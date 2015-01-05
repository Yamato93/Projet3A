<?php

function select_user_by_mail_password($connect, $mail, $password)
{
	try
	{
		$query ="SELECT * FROM DT_USERS
				WHERE USE_MAIL = :mail
				AND USE_PASSWORD = :password";
							
		$curseur = $connect->prepare($query); 
		$curseur ->bindValue(':mail', $nom, PDO::PARAM_STR);
		$curseur ->bindValue(':password', $mail, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();
		return $retour;
	}
			
	catch ( Exception $e ) 
	{
	   die('Erreur Mysql : '.$e->getMessage());
	}

}