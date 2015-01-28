<?php
if(isset($_SESSION['User']))
{
include_once("../app/model/books/select_data_books.php");


$bookslist = select_data_book($connect, BASE, "DT_BOOKS", "USE_ID" ,$_SESSION['User']->USE_ID);


include_once("../app/view/books/booklist.view.php");
}
else
{
	header("Location:index.php");
}