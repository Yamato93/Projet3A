<?php
/* $_SESSION['step_session_id'] and $_SESSION['cover_session_id']*/
function insert_step_img($connect, $dbname, $tablename, $books_steps, $books_id, $use_id, $img)
{
	try 
	{
		$query="INSERT INTO ".$dbname.".".$tablename." (BOOKS_STEPS, BOOKS_ID, USE_ID,STEPS_IMG) 
		VALUES (:Param1, :Param2, :Param3, :Param4)";

		$curseur = $connect -> prepare($query);
		//var_dump($curseur);
		// $post contient le $_POST
		$curseur -> bindValue(':Param1', $books_steps, PDO::PARAM_STR);
		$curseur -> bindValue(':Param2', $books_id, PDO::PARAM_STR);
		$curseur -> bindValue(':Param3', $use_id, PDO::PARAM_STR);
		$curseur -> bindValue(':Param4', $img, PDO::PARAM_STR);

		$retour = $curseur -> execute();
		//var_dump($retour);
		$curseur -> closeCursor();
		return true;

	}

	catch (Exception $e)
	{
		die ('Erreur de Requete' . $e -> getMessage());
		return false;
	}
}
