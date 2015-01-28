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
		
	}
	
	
	if(isset($_GET['info']) and isset($_GET['bookid']))
	{
		$actionurl = "index.php?module=books&action=updatebookstory&bookid=".$_GET['bookid']."&info=".$_GET['info'];
		$bookslist = select_data_book($connect, BASE, "DT_BOOKS", "BOOKS_ID" , $_GET['bookid']);
		$stepinfo = current(select_data_step_info($connect, BASE, "DT_BOOKS_STEPS", "USE_ID", $_SESSION['User']->USE_ID, "BOOKS_ID", $_GET['bookid'], "BOOKS_STEPS_ID", $_GET['info']));
		$stepimginfo = select_data_step_picture($connect, BASE, "DT_BOOKS_STEPS_PICTURE", "USE_ID", $_SESSION['User']->USE_ID, "BOOKS_ID", $_GET['bookid'], "BOOKS_STEPS", $_GET['info']);

	}
	include_once("../app/view/books/bookseditstory.view.php");
	
	
}
else
{
	header("Location:index.php");
	exit;
}