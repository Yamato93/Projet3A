<?php

function insert_new_user($connect, $mail, $password)
{
	try
	{
		$query ="INSERT INTO DT_USERS
				(USE_MAIL, USE_PASSWORD, USE_TYPE)
			VALUE
				(:mail, :password, 1)";
							
		$curseur = $connect->prepare($query); 
		$curseur ->bindValue(':mail', $mail, PDO::PARAM_STR);
		$curseur ->bindValue(':password', $password, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();
		return $retour;
	}
			
	catch ( Exception $e ) 
	{
	   die('Erreur Mysql : '.$e->getMessage());
	}

}