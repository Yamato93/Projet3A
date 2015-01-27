<?php
if(isset($_SESSION['User']))
{

include_once("../app/model/books/select_data_books.php");
include_once("../app/model/books/select_data_steps.php");
//include_once("../app/model/books/select_books_step.php");

$bookslist = select_data_books($connect, BASE, "DT_BOOKS", "BOOKS_ID" , $_GET['id'], "USE_ID", $_SESSION['User']->USE_ID);

if(empty($bookslist))
{
	header('location:index.php?module=others&action=404');
	exit;
}



$booksstep = select_data_step($connect, BASE, "DT_BOOKS_STEPS", "USE_ID", $_SESSION['User']->USE_ID, "BOOKS_ID", $_GET['id']);

$booksstepimg = select_data_step_picture($connect, BASE, "DT_BOOKS_STEPS_PICTURE", "USE_ID", $_SESSION['User']->USE_ID, "BOOKS_ID", $_GET['id']);


include_once("../app/view/books/bookedit.view.php");
}
else
{
	header("Location:index.php");
	exit;
}



