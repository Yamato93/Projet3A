<?php
if (isset($_SESSION['User']->USE_ID)) {
	header('location:index.php');
}
if(isset($_POST['type'])) {
	if($_POST['type'] == 'login') {
		if (isset($_POST['mail']) && isset($_POST['password'])) {
			if (!empty($_POST['mail']) && !empty($_POST['password'])) {
				$mail = $_POST['mail'];
				$password = md5($_POST['password']);
				include_once '../app/model/users/select_user_by_mail_password.model.php';
				if ($user = select_user_by_mail_password($connect, $mail, $password)) {
					$_SESSION["User"] = current($user);
					sessionize('success', 'You are logged in');
					if(!isset($_SESSION['frombooks']))
					{	
						header('location:index.php');
						exit();
					} else {
						unset($_SESSION['frombooks']);
						header('location:index.php?module=books&action=memorie');
						exit();
					}
				} else{
					sessionize('danger', 'mail and/or password no match');
				}
			} else{
				sessionize('danger', 'mail and/or password empty');
			}
		}
	}
}
if(isset($_POST['type'])) {
	if($_POST['type'] == 'register') {
		if (isset($_POST['mail']) && isset($_POST['password']) && isset($_POST['passwordconfirm'])){
			if (!empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['passwordconfirm']) ) {
				$mail = $_POST['mail'];
				$password = $_POST['password'];
				$passwordconfirm = $_POST['passwordconfirm'];
				include_once '../core/function/function_validate_email.php';
				if (email_validate($mail)) {			
					include_once '../app/model/users/select_user_by_mail.model.php';
					//test if mail is already exist
					if (select_user_by_mail($connect, $mail)) {
						if ($passwordconfirm == $password) {

							include_once '../app/model/users/insert_new_user.model.php';
							
							$password = md5($password);
							if(insert_new_user($connect, $mail, $password)) {
								sessionize('success','You are registered');
							} else {
								sessionize('danger', 'Registration error');
							}
						} else {
							sessionize('danger', 'password is different of the confirmation');
						}
					} else{
						sessionize('danger', 'Mail is already use for a user');
					}
				} else{
					sessionize('danger', 'Mail is not correct');
				}
			} else{
				sessionize('danger', 'mail or password are not good ');
			}
		}
	}
}

// Facebook app settings
$appId = '513750448764721';
$appSecret = '98ac17a5d2a6fdaef378fefd7bfd9dca';

if ($_SERVER["HTTP_HOST"] == "localhost:8888") {
	$redirect_uri = 'http://localhost:8888/3A/Projet/Projet3A/www/index.php?module=users&action=login' ;
}
else if (($_SERVER["HTTP_HOST"] == "ns366377.ovh.net") && ($server_name == "alexandr") ){
	$redirect_uri = 'http://ns366377.ovh.net/alexandr/projet3a/Discoverit/www/index.php?module=users&action=login' ;
}
else{
	$redirect_uri = 'http://ns366377.ovh.net/dupont/perso/Discoverit/Projet3A/www/index.php?module=users&action=login' ;
}

include_once ('../core/class/facebookConnect.class.php');
$user = (new FacebookConnect($appId, $appSecret))->connect($redirect_uri);

if(is_string($user)){
	$url_fb = $user;
} else {
	$fb_id = $user->getId();
	$email = $user->getEmail();
	$lastname = $user->getLastName();
	$firstname = $user->getFirstName();

	//var_dump($user);

	include_once '../app/model/users/select_user_by_mail_fbid.model.php';
	//Mail & fb_id already use ?
	$user =  select_user_by_mail_fbid($connect, $email, $fb_id);

	if (!empty($user)){

		$_SESSION["User"] = current($user);
		sessionize('success', 'You are logged in');

		if(!isset($_SESSION['frombooks']))
		{
			header('location:index.php');
			exit();
		}
		else
		{
			unset($_SESSION['frombooks']);
			header('location:index.php?module=books&action=memorie');
			exit();
		}
	} else {

		include_once '../app/model/users/insert_new_user_from_fb.model.php';

		if (insert_new_user_from_fb($connect, $email, $firstname, $lastname, $fb_id)){

			$user = select_user_by_mail_fbid($connect, $email, $fb_id);

			$_SESSION["User"] = current($user);
			sessionize('success', 'You are logged in');
			if(!isset($_SESSION['frombooks']))
			{
				header('location:index.php');
				exit();
			}
			else
			{
				unset($_SESSION['frombooks']);
				header('location:index.php?module=books&action=memorie');
				exit();
			}
		} else {
			header('location:index.php?module=users&action=logout');
			exit;
		}

	}
}
include_once("../app/view/users/login.view.php");
