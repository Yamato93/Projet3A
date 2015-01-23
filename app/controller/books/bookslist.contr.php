<?php
if(isset($_SESSION['User']))
{
include_once("../app/model/books/select_data_books.php");


$bookslist = select_date_books($connect, BASE, "DT_BOOKS", "USE_ID" ,$_SESSION['User']->USE_ID);


include_once("../app/view/books/traveljournal-list.view.php");
}
else
{
	header("Location:index.php");
}