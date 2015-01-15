<?php
/* $_SESSION['step_session_id'] and $_SESSION['cover_session_id']*/
function insert_step($connect, $dbname, $tablename, $books_steps, $books_id, $img)
{
	try 
	{
		$query="INSERT INTO ".$dbname.".".$tablename." (BOOKS_STEPS, BOOKS_ID, STEPS_IMG) 
		VALUES (:Param1, :Param2, :Param3)";

		$curseur = $connect -> prepare($query);
		//var_dump($curseur);
		// $post contient le $_POST
		$curseur -> bindValue(':Param1', $books_steps, PDO::PARAM_STR);
		$curseur -> bindValue(':Param2', $books_id, PDO::PARAM_STR);
		$curseur -> bindValue(':Param3', $img, PDO::PARAM_STR);

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
