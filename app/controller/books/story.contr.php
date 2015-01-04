<?php
if(!isset($_SESSION['Books']['cover_title']))
{
	header("location:index.php?module=books&action=cover");
	exit;
}
include_once("../core/function/function_upload_img.php");
if(isset($_POST['story']) and isset($_POST['start-date']) and isset($_POST['end-date']))
{
	if(!isset($_SESSION['Books']['Step1']) and !isset($_SESSION['count-step']))
	{
		$_SESSION['count-step'] = 1;
	}
	$step = $_SESSION['count-step'];
	$_SESSION['Books']['Step'.$step]['content'] = $_POST['story'];
	$_SESSION['Books']['Step'.$step]['start-date'] = $_POST['start-date'];
	$_SESSION['Books']['Step'.$step]['end-date'] = $_POST['end-date'];
	for($i=1; $i < count($_FILES); $i++)
	{
		if($_FILES['story-img'.$i]['error'] == 0)
		{
			upload('story-img'.$i,'Books','Step'.$step,'step_img'.$i);
		}
	}
	$_SESSION['count-step']++;
	header("location:index.php?module=books&action=memorie");
	exit;

}


include_once("../app/view/books/story.view.php");