<?php

function insert_comments($connect, $nom, $mail, $comment)
{
	try
	{
		$query ="INSERT INTO khauv.minitp
							(MINITP_NAME, MINITP_MAIL, MINITP_COMMENT)
						VALUE
							(:mc_nom, :mc_mail, :mc_comment)";
							
		$curseur = $connect->prepare($query); 
		$curseur ->bindValue(':mc_nom', $nom, PDO::PARAM_STR);
		$curseur ->bindValue(':mc_mail', $mail, PDO::PARAM_STR);
		$curseur ->bindValue(':mc_comment', $comment, PDO::PARAM_STR);
		$retour = $curseur->execute();
		$curseur->closeCursor();
	}
			
	catch ( Exception $e ) 
	{
	   die('Erreur Mysql : '.$e->getMessage());
	}

}