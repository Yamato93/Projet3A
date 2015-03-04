<?php

/**
 * @param $connect
 * @param $mail
 * @return bool
 */
function select_user_by_mail($connect, $mail)
{
	try
	{
		$query ="SELECT * FROM DT_USERS
				WHERE USE_MAIL = :mail";
							
		$curseur = $connect->prepare($query); 
		$curseur ->bindValue(':mail', $mail, PDO::PARAM_STR);
		$curseur->execute();
		$data_user = $curseur -> fetchAll(PDO::FETCH_OBJ);
		$curseur->closeCursor();
		if(count($data_user) >= 1)
		{
			return false;
		}
		else
		{
			return true;
		}
	
	}
			
	catch ( Exception $e ) 
	{
	   die('Erreur Mysql : '.$e->getMessage());
	}

}