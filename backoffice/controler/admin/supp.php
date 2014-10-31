<?php

	include_once("model/admin/delete_comment.model.php");
	
	
	if(supprimer_comment($connect, $_GET['id']))
	{
		header("location:index.php?module=admin&action=admin&message=delete_ok");
		exit();
	}
	else
	{
		header("location:index.php?module=admin&action=admin&error=delete_fail");
		exit();

	}
	
	
	
	