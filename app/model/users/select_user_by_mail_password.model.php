<?php

function select_user_by_mail_password($connect, $mail, $password)
{
	try
	{
		$query ="SELECT * FROM DT_USERS
				WHERE USE_MAIL = :mail
				AND USE_PASSWORD = :password";
							
		$curseur = $connect->prepare($query); 
		$curseur ->bindValue(':mail', $mail, PDO::PARAM_STR);
		$curseur ->bindValue(':password', $password, PDO::PARAM_STR);
		$curseur->execute();
		$data_user = $curseur -> fetchAll(PDO::FETCH_OBJ);
		$curseur->closeCursor();
		return $data_user;
	}
			
	catch ( Exception $e ) 
	{
	   die('Erreur Mysql : '.$e->getMessage());
	}

}