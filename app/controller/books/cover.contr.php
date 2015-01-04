<?php 
if(isset($_SESSION['Books']['cover_title']) and isset($_SESSION['Books']['cover_descr']))
{
	header("location:index.php?module=books&action=memorie");
	exit;
}
if(isset($_POST))
{
	$tempo_path = BASE_DIR_TMP.'/public/tempo/';
	//include_once("../model/books/insert_cover.model.php")
	if(isset($_FILES['cover_img']))
	{
		if(isset($_POST['cover_title']))
		{
			if(isset($_POST['cover_descr']))
			{
				$_SESSION['Books'] = array();
				include_once("../core/function/function_upload_img.php");
				upload('cover_img','Books','cover_upload');
				$_SESSION['Books']['cover_title'] = $_POST['cover_title'];
				$_SESSION['Books']['cover_descr'] = $_POST['cover_descr'];
				header("location:index.php?module=books&action=memorie");
				exit;
	 		}	
		}
	}
}
include_once("../app/view/books/cover.view.php");

/*
include('../function/function_upload_photo.php');
if (isset($_FILES['photo1']) AND $_FILES['photo1']['error'] == 0)
{
upload('photo1');
$img_repas = $_SESSION['BACKOFFICE']['photo1'];
}
else
{
	$img_repas = false;
}
*/