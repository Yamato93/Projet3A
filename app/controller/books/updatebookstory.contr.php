<?php
include_once("../app/model/books/insert_step.model.php");
include_once("../app/model/books/insert_step_img.model.php");
include_once("../core/function/function_upload_img.php");
include_once("../app/model/books/select_data_books.php");
include_once("../app/model/books/select_data_steps.php");
include_once("../app/model/books/update_bookstory.php");
if(isset($_SESSION['User']))
{	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{	   
		

		
		if(update_book_story($connect, BASE, "DT_BOOKS_STEPS", $_SESSION['User']->USE_ID, $_GET['bookid'], $_GET['info'], $_POST['story'], $_POST['start-date'], $_POST['end-date']))
		{
			if(isset($_FILES))
			{
				$countfile = count($_FILES);
				$z=1;
				for ($i = 1; $i <= $countfile; $i++) 
				{
				    if((isset($_FILES['story-img'.$i])) and ($_FILES['story-img'.$i]['name'] != ''))
				    {
						if($_FILES['story-img'.$i]['error'] == 0)
						{
							upload('story-img'.$i,'Updatebookstory', 'step_img'.$z);
						} 
						$z++;
				    }
				}
				if(isset($_SESSION['Updatebookstory']))
				{
					$nbUpdatebookstory = $_SESSION['Updatebookstory'];
					$countfilesession =  count(array_keys($nbUpdatebookstory));
				}
				else
				{
					$nbUpdatebookstory = 0;
					$countfilesession = 0;
				}

				for ($y = 1; $y <= $countfilesession; $y++) 
				{
					if(isset($_SESSION['Updatebookstory']['step_img'.$y]))
					{
						insert_step_img($connect, BASE, "DT_BOOKS_STEPS_PICTURE", $_GET['info'], $_GET['bookid'], $_SESSION['User']->USE_ID, $_SESSION['Updatebookstory']['step_img'.$y]);
					}

				}
				unset($_SESSION['Updatebookstory']);
			}
			header('location:index.php?module=books&action=bookedit&id='.$_GET['bookid']);
			exit;
		}
		else
		{
			header('location:index.php?module=books&action=bookslist&message=editnook');
			exit;
		}
	}
	
	
	if(isset($_GET['info']) and isset($_GET['bookid']))
	{
		$actionurl = "index.php?module=books&action=updatebookstory&bookid=".$_GET['bookid']."&info=".$_GET['info'];
		$bookslist = select_data_book($connect, BASE, "DT_BOOKS", "BOOKS_ID" , $_GET['bookid']);
		$stepinfo = current(select_data_step_info($connect, BASE, "DT_BOOKS_STEPS", "USE_ID", $_SESSION['User']->USE_ID, "BOOKS_ID", $_GET['bookid'], "BOOKS_STEPS_ID", $_GET['info']));
		$stepimginfo = select_data_step_picture($connect, BASE, "DT_BOOKS_STEPS_PICTURE", "USE_ID", $_SESSION['User']->USE_ID, "BOOKS_ID", $_GET['bookid'], "BOOKS_STEPS", $_GET['info']);

		$_SESSION['count_update_story'] = count($stepimginfo);
	}
	include_once("../app/view/books/bookseditstory.view.php");
	
	
}
else
{
	header("Location:index.php");
	exit;
}