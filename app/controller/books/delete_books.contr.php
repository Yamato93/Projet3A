<?php
include("../core/function/function_delete.php");
include_once("../app/model/books/select_data_books.php");
echo "<pre>";
print_r($_GET['id']);
echo "<pre>";
if(select_data_books($connect, BASE, "DT_BOOKS", "BOOKS_ID" , $_GET['id'], "USE_ID", $_SESSION['User']->USE_ID))
{
	if(delete($connect, BASE, "DT_BOOKS", "BOOKS_ID", $_GET['id']))
	{
	}
	else
	{
	}
}

