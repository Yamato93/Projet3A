<?php
if (isset($_POST['login']) && isset($_POST['mail']) && isset($_POST['password'])) {
	if (!empty($_POST['mail']) && !empty($_POST['password'])) {
		$mail = $_POST['mail'];
		$password = md5($_POST['password']);
		include_once '../model/login/select_user_by_mail_password.model.php';
		if (select_user_by_mail_password($connect, $mail, $password)) {
			echo "user trouvé";
		}
	}
	else{
		die('mail and/or password empty');
	}
}

if (isset($_POST['register']) && isset($_POST['mail']) && isset($_POST['password']) && isset($_POST['passwordconfirm'])){
	if (!empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['passwordconfirm']) ) {
		$mail = $_POST['mail'];
		$password = $_POST['password'];
		$passwordconfirm = $_POST['passwordconfirm'];

		if ($passwordconfirm == $password) {
			include_once '../model/login/insert_new_user.model.php';

			$password = md5($password);
			if(insert_new_user($connect, $mail, $password))
			{
				//header(string);
				echo "nouvel user enregistré";
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
}

include_once("../app/view/login/login.view.php");