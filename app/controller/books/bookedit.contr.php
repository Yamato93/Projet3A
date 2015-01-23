<?php
if(isset($_SESSION['User']))
{

include_once("../app/model/books/select_data_books.php");
include_once("../app/model/books/select_books_step.php");

$bookslist = select_data_books($connect, BASE, "DT_BOOKS", "BOOKS_ID" , $_GET['id']);

$booksstep = select_data_books($connect, BASE, "DT_BOOKS_STEPS", $_SESSION['User']->USE_ID);


include_once("../app/view/books/bookedit.view.php");
}
else
{
	header("Location:index.php");
}



