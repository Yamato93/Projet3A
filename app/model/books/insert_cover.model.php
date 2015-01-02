<?php

function insert_cover($connect, $dbname, $tablename)
{
	try 
	{
		$query="INSERT INTO ".$dbname.".".$tablename." (Col1, Col2) 
		VALUES (:Param1, :Param2)";

		$curseur = $connect -> prepare($query);
		//var_dump($curseur);
		// $post contient le $_POST
		$curseur -> bindValue(':NAME', $name, PDO::PARAM_STR);
		$curseur -> bindValue(':PASSWORD', md5($password), PDO::PARAM_STR);
		$retour = $curseur -> execute();
		$curseur -> closeCursor();
		return true;

	}

	catch (Exception $e)
	{
		die ('Erreur de Requete' . $e -> getMessage());
		return false;
	}
}
