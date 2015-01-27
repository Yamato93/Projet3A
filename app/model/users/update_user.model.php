<?php

function update_user($connect, $lastname, $firstname, $dateofbirth, $descr, $picture, $country, $id)
{
	try
	{
		$query ="UPDATE  `khauv`.`DT_USERS` SET  `USE_LASTNAME` =  :lastname,
				`USE_FIRSTNAME` =  :firstname,
				`USE_BIRTHDAY` =  :dateofbirth,
				`USE_DESCR` =  :descr,
				`USE_PIC` =  :picture,
				`USE_COUNTRY` =  :country WHERE  `DT_USERS`.`USE_ID` = :id;";
							
		$curseur = $connect->prepare($query); 
		$curseur ->bindValue(':lastname', $lastname, PDO::PARAM_STR);
		$curseur ->bindValue(':firstname', $firstname, PDO::PARAM_STR);
		$curseur ->bindValue(':dateofbirth', $dateofbirth, PDO::PARAM_STR);
		$curseur ->bindValue(':descr', $descr, PDO::PARAM_STR);
		$curseur ->bindValue(':picture', $picture, PDO::PARAM_STR);
		$curseur ->bindValue(':country', $country, PDO::PARAM_STR);
		$curseur ->bindValue(':id', $id, PDO::PARAM_INT);
		$retour = $curseur->execute();
		$curseur->closeCursor();
		return $retour;
	}
			
	catch ( Exception $e ) 
	{
	   die('Erreur Mysql : '.$e->getMessage());
	}

}