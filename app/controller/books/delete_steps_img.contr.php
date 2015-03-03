<?php
include("../core/function/function_delete.php");
include_once("../app/model/books/select_data_steps.php");

if(select_data_step_info($connect, BASE, "DT_BOOKS_STEPS", "BOOKS_STEPS_ID", $_GET['info'], "BOOKS_ID", $_GET['bookid'], "USE_ID", $_SESSION['User']->USE_ID))
{
	if(delete($connect, BASE, "DT_BOOKS_STEPS_PICTURE", "PIC_ID", $_GET['img_id']))
	{
		sessionize('success','Your picture has been delete');
		$retour = array(
			"data_return" => true
		);
	}
	else
	{
		sessionize('danger','Your picture has not been delete');
		$retour = array(
			"data_return" => false
		);
	}
	echo json_encode($retour);
}
else
{
	header('Location:index.php?module=books&action=bookslist');
	exit();
}
