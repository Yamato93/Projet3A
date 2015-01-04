<?php
include_once("../core/function/function_upload_img.php");
if(!isset($_SESSION['Books']['cover_title']))
{
	header("location:index.php?module=books&action=cover");
	exit;
}
if(isset($_GET['info']))
{	
	$id = $_GET['info'];
	if(!isset($_SESSION['Books']['Step'.$id]))
	{
		header("location:index.php?module=books&action=memorie");
		exit();
	}
	$infostory = $_SESSION['Books']['Step'.$id];
	include_once("../app/view/books/storyedit.view.php");
}

if(isset($_POST['story']) and isset($_POST['start-date']) and isset($_POST['end-date']))
{
		$step = $_GET['editinfo'];
		$_SESSION['Books']['Step'.$step]['content'] = $_POST['story'];
		$_SESSION['Books']['Step'.$step]['start-date'] = $_POST['start-date'];
		$_SESSION['Books']['Step'.$step]['end-date'] = $_POST['end-date'];
		for($i=1; $i < count($_FILES); $i++)
		{
			if(isset($_SESSION['Books']['Step'.$step]['step_img'.$i]) and !empty($_SESSION['Books']['Step'.$step]['step_img'.$i]))
			{
				$_SESSION['Books']['Step'.$step]['step_img'.$i] = $_SESSION['Books']['Step'.$step]['step_img'.$i];
			}
			else
			{	if($_FILES['story-img'.$i]['error'] == 0)
				{
				upload('story-img'.$i,'Books','Step'.$step,'step_img'.$i);
				}
			}
		}
	header("location:index.php?module=books&action=memorie");
	exit();
}

