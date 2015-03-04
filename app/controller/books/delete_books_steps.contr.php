<?php
include("../core/function/function_delete.php");
include_once("../app/model/books/select_data_steps.php");

if(select_data_step_picture($connect, BASE, "DT_BOOKS_STEPS_PICTURE", "USE_ID", $_SESSION['User']->USE_ID, "BOOKS_ID", $_GET['bookid'], "BOOKS_STEPS", $_GET['info']))
{
	if(delete($connect, BASE, "DT_BOOKS_STEPS", "BOOKS_STEPS_ID", $_GET['info']))
	{
		sessionize('success','Your memory has been delete');
		header('Location:index.php?module=books&action=bookedit&id='.$_GET['bookid'].'&message=deleteok');
		exit();
	}
	else
	{
		sessionize('danger','Your memory has not been delete');
		header('Location:index.php?module=books&action=bookedit&id='.$_GET['bookid'].'&message=deletefail');
		exit();
	}
}
else
{
	header('Location:index.php?module=books&action=bookslist');
	exit();
}