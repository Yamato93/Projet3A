<?php

include_once("../app/model/contact/select_comment.model.php");
include_once("../app/model/contact/insert_comment.model.php");
include_once("../core/function/function_validate_email.php");
include_once ("../core/function/function_notification.php");

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
		sessionize('danger', 'Nom manquant');
		header('location:index.php?module=contact&action=contact');
		exit;		
	} 
	else if($mail == '' or empty($mail)) 
	{
		sessionize('danger', 'E-mail manquant');
		header('location:index.php?module=contact&action=contact');
		exit;	
	} 
	else if(!email_validate($mail)) 
	{
		sessionize('danger', 'E-mail invalide');
		header('location:index.php?module=contact&action=contact');
		exit;	
	} 
	else if($comment == 'Message' or $comment == '' or empty($comment)) 
	{
		sessionize('danger', 'Message manquant');
		header('location:index.php?module=contact&action=contact');
		exit;
	} 
	else
	{
		if(insert_comments($connect, $nom, $mail, $comment)){
			sessionize('success', 'Commentaire publié');
		}
		else{
			sessionize('danger', 'Un problème est survennu !');
		}
		header('location:index.php?module=contact&action=contact');
		exit;
	}
}
else
{
	include_once("../app/view/contact/contact.view.php");
}
