<?php

/**
 * @param $connect
 * @param $mail
 * @param $firstname
 * @param $lastname
 * @return mixed
 */
function insert_new_user_from_fb($connect, $mail, $firstname, $lastname, $fbid)
{

	try
	{
		$query ="INSERT INTO DT_USERS
				(USE_MAIL, USE_LASTNAME, USE_FIRSTNAME, USE_FACEBOOK_ID, USE_TYPE)
			VALUE
				(:mail, :lastname, :firstname, :fbid,  1)";
							
		$curseur = $connect->prepare($query); 
		$curseur ->bindValue(':mail', $mail, PDO::PARAM_STR);
		$curseur ->bindValue(':lastname', $lastname, PDO::PARAM_STR);
		$curseur ->bindValue(':firstname', $firstname, PDO::PARAM_STR);
		$curseur ->bindValue(':fbid', $fbid, PDO::PARAM_INT);
		$retour = $curseur->execute();
		$curseur->closeCursor();
		return $retour;
	}
			
	catch ( Exception $e ) 
	{
	   die('Erreur Mysql : '.$e->getMessage());
	}

}