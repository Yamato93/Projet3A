<?php
if ($_POST['login'] && $_POST['mail'] && $_POST['password']) {
	if (!empty($_POST['mail']) && !empty($_POST['password'])) {
		$mail = $_POST['mail'];
		$password = $_POST['password'];
		include_once '../model/select_user_by_mail_password.model.php';
		if (select_user_by_mail_password($connect, $mail, $password)) {
			
			//header(string);
		}
	}
	else{
		die('mail and/or password empty');
	}
}

if ($_POST['register'] && $_POST['mail'] && $_POST['password'] && $_POST['passwordconfirm']) {
	if (!empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['passwordconfirm']) ) {
		$mail = $_POST['mail'];
		$password = $_POST['password'];
		$passwordconfirm = $_POST['passwordconfirm'];
		if ($passwordconfirm == $password) {
			include_once '../model/insert_new_user.model.php';
			$password = md5($password);
			if(insert_new_user($connect, $mail, $password)){
				//header(string);
			}
			else{
				die('erreur lors de l\'enregistrement');
			}
		else {
			die('password is different of the confirmation');
		}
	}
}

include_once("../app/view/login/login.view.php");