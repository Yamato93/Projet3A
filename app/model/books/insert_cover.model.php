<?php
function insert_cover($connect, $dbname, $tablename, $id, $title, $descr, $cover)
{
	try 
	{
		$query="INSERT INTO ".$dbname.".".$tablename." (USE_ID, BOOKS_TITLE, BOOKS_DESCR, BOOKS_COVER) 
		VALUES (:Param1, :Param2, :Param3, :Param4)";

		$curseur = $connect -> prepare($query);
		//var_dump($curseur);
		// $post contient le $_POST
		$curseur -> bindValue(':Param1', $id, PDO::PARAM_STR);
		$curseur -> bindValue(':Param2', $title, PDO::PARAM_STR);
		$curseur -> bindValue(':Param3', $descr, PDO::PARAM_STR);
		$curseur -> bindValue(':Param4', $cover, PDO::PARAM_STR);
		$retour = $curseur -> execute();
		$curseur -> closeCursor();
		$_SESSION['cover_session_id'] = $connect->lastInsertId();
		return true;

	}

	catch (Exception $e)
	{
		die ('Erreur de Requete' . $e -> getMessage());
		return false;
	}
}