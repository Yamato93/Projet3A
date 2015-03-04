<?php
include("../core/function/function_delete.php");
include_once("../app/model/books/select_data_books.php");

if(select_data_books($connect, BASE, "DT_BOOKS", "BOOKS_ID" , $_GET['id'], "USE_ID", $_SESSION['User']->USE_ID))
{
	if(delete($connect, BASE, "DT_BOOKS", "BOOKS_ID", $_GET['id']))
	{
		sessionize('success','Your book has been delete');
		header('Location:index.php?module=books&action=bookslist&message=deleteok');
		exit();
	}
	else
	{
		sessionize('danger','Your book has not been delete');
		header('Location:index.php?module=books&action=bookslist&message=deletefail');
		exit();
	}
}
else
{
	header('Location:index.php?module=books&action=bookslist');
	exit();
}