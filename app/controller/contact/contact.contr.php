<?php

include_once("../app/model/contact/select_comment.model.php");
include_once("../app/model/contact/insert_comment.model.php");
include_once("../core/function/function_validate_email.php");

$comments = show_comments($connect, "minitp", "MINITP_ID", "DESC");
//$debug = $comments;
$retour = $_POST;
if(!empty($_POST))
{
	$nom = stripslashes($_POST['nom']); 
	$mail = trim($_POST['mail']);
	$mail = mb_strtolower($mail);
	$comment = stripslashes($_POST['comment']);
	
	

	if($nom == '' or $nom == 'Name' or empty($nom)) 
	{
		header('location:index.php?module=contact&action=contact');
		exit;		
	} 
	else if($mail == '' or empty($mail)) 
	{
		header('location:index.php?module=contact&action=contact');
		exit;	
	} 
	else if(!email_validate($mail)) 
	{
		header('location:index.php?module=contact&action=contact');
		exit;	
	} 
	else if($comment == 'Message' or $comment == '' or empty($comment)) 
	{
		header('location:index.php?module=contact&action=contact');
		exit;
	} 
	else
	{
		insert_comments($connect, $nom, $mail, $comment);
		header('location:index.php?module=contact&action=contact');
		exit;
	}
}
else
{
	include_once("../app/view/contact/contact.view.php");
}
