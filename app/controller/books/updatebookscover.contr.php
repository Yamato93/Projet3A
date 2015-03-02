<?php
include_once("../core/function/function_upload_img.php");
include_once("../app/model/books/update_bookcover.php");

if(isset($_SESSION['User']))
{	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{	   
		if(update_book_cover($connect, BASE, "DT_BOOKS", $_SESSION['User']->USE_ID, $_GET['bookid'], $_POST['cover_title'], $_POST['cover_descr']))
		{
			if((isset($_FILES['cover_img'])) and ($_FILES['cover_img']['name'] != ''))
			{
				if($_FILES['cover_img']['error'] == 0)
				{
					upload('cover_img','Updatebookcover', 'cover_img');
				} 
				update_book_cover_img($connect, BASE, "DT_BOOKS", $_SESSION['User']->USE_ID, $_GET['bookid'], $_SESSION['Updatebookcover']['cover_img']);
			}
			header('location:index.php?module=books&action=bookedit&id='.$_GET['bookid'].'&message=editok');
			exit;
		}
		else
		{
			header('location:index.php?module=books&action=bookedit&id='.$_GET['bookid'].'&message=editnook');
			exit;
		}
	}
	else
	{
		header('location:index.php?module=books&action=bookedit&id='.$_GET['bookid']);
		exit;
	}	
}
else
{
	header("Location:index.php?module=users&action=login");
	exit;
}