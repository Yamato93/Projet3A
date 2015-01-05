<?php
if(isset($_POST['type']))
{
	if($_POST['type'] == 'login')
	{
		if (isset($_POST['mail']) && isset($_POST['password'])) {
			
			if (!empty($_POST['mail']) && !empty($_POST['password'])) {
				$mail = $_POST['mail'];
				$password = md5($_POST['password']);
				include_once '../app/model/login/select_user_by_mail_password.model.php';
				if ($user = select_user_by_mail_password($connect, $mail, $password)) {
					$_SESSION["User"] = current($user);
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
				}
				else{
					die('mail and/or password no match');
				}
			}
			else{
				die('mail and/or password empty');
			}
		}
	}
}
if(isset($_POST['type']))
{
	if($_POST['type'] == 'register')
	{
		if (isset($_POST['mail']) && isset($_POST['password']) && isset($_POST['passwordconfirm'])){
			if (!empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['passwordconfirm']) ) {
				$mail = $_POST['mail'];
				$password = $_POST['password'];
				$passwordconfirm = $_POST['passwordconfirm'];
				include_once '../app/model/login/select_user_by_mail.model.php';
				//test if mail is already exist
				if (select_user_by_mail($connect, $mail)) {
					if ($passwordconfirm == $password) {
						include_once '../app/model/login/insert_new_user.model.php';
			
						$password = md5($password);
						if(insert_new_user($connect, $mail, $password))
						{
							//header(string);
							die('sign in Ok !');
						}
						else
						{
							die('erreur lors de l\'enregistrement');
						}
					}
					else 
					{
						die('password is different of the confirmation');
					}
				}
				else{
					die('Mail is already use for a user');
				}
			}
			else{
				die('mail or password are not good ');
			}
		}
	}
}
include_once("../app/view/login/login.view.php");