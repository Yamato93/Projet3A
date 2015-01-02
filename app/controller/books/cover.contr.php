<?php 
if(isset($_POST))
{
	$tempo_path = BASE_DIR_TMP.'/public/tempo/';
	$_SESSION['Books'] = array();
	//include_once("../model/books/insert_cover.model.php")
	if(isset($_FILES['cover_img']))
	{
		if(isset($_POST['cover_title']))
		{
			if(isset($_POST['cover_descr']))
			{
				$fichiers = 'cover_img';
				$ext = array('jpg' , 'jpeg' , 'gif' , 'png');
				$ext_upload = strtolower( substr( strrchr($_FILES[$fichiers]['name'], '.'), 1) );
				if (in_array($ext_upload, $ext))
				{
					//echo "Cette extension est autorisée ! <br />";
				}				
				//****************************************************
				//Déplacement du fichier recu avec remplacement de nom
				//****************************************************
				$url = md5(uniqid(rand(),true));
				$exp = explode(".",$_FILES[$fichiers]['name']);
				//echo "Nouveau nom : {$url}<br />";
				if (move_uploaded_file($_FILES[$fichiers]['tmp_name'],$tempo_path.$url.".".$ext_upload))
				{
					//echo "Le fichier est bien enregistré !";
				}
				$_SESSION['Books']['cover_img'] = $_POST['cover_title'];
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