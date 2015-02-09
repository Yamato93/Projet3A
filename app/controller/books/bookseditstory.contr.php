<?php
include_once("../app/model/books/insert_step.model.php");
include_once("../app/model/books/insert_step_img.model.php");
include_once("../core/function/function_upload_img.php");
include_once("../app/model/books/select_data_books.php");
include_once("../app/model/books/select_data_steps.php");
if(isset($_SESSION['User']))
{	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$use_id = $_SESSION['User']->USE_ID;
		$books_id = $_GET['id'];
		
			if(insert_step($connect, BASE, "DT_BOOKS_STEPS", $books_id, $use_id, $_POST['story'], $_POST['start-date'], $_POST['end-date']))
			{
				$i = 1;
				$y = 1;
					while(isset($_FILES['story-img'.$i]) and ($_FILES['story-img'.$i]['name'] != ''))
					{
						if($_FILES['story-img'.$x]['name'] != '')
						{
							if($_FILES['story-img'.$i]['error'] == 0)
							{
								upload('story-img'.$i,'Bookseditstory', 'step_img'.$i);
							}
						}
						$i++;
					}
					
					while(isset($_SESSION['Bookseditstory']['step_img'.$y]))
					{
						insert_step_img($connect, BASE, "DT_BOOKS_STEPS_PICTURE", $_SESSION['step_session_id'], $books_id, $use_id, $_SESSION['Bookseditstory']['step_img'.$y]);
						$y++;
					}
			}	
		
		unset($_SESSION['Bookseditstory']);
		unset($_SESSION['step_session_id']);
		unset($_SESSION['Books']);
	
		header("Location:index.php?module=books&action=bookedit&id=".$books_id);
		exit;
	}
	
	
	if(isset($_GET['id']))
	{
		$actionurl = "index.php?module=books&action=bookseditstory&id=".$_GET['id'];
	}
	$bookslist = select_data_book($connect, BASE, "DT_BOOKS", "BOOKS_ID" , $_GET['id']);
	include_once("../app/view/books/bookseditstory.view.php");
	
	
}
else
{
	header("Location:index.php");
	exit;
}