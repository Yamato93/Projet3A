<?php

function insert_comments($connect, $mail, $password)
{
	try
	{
		$query ="INSERT INTO DT_USERS
							(USE_MAIL, USE_PASSWORD)
						VALUE
							(:mail, :password)";
							
		$curseur = $connect->prepare($query); 
		$curseur ->bindValue(':mc_nom', $nom, PDO::PARAM_STR);
		$curseur ->bindValue(':mc_mail', $mail, PDO::PARAM_STR);
		$curseur ->bindValue(':mc_comment', $comment, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();
		return $retour;
	}
			
	catch ( Exception $e ) 
	{
	   die('Erreur Mysql : '.$e->getMessage());
	}

}