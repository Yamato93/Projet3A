<?php
/* $_SESSION['cover_session_id'] */
function insert_step($connect, $dbname, $tablename, $books_id, $use_id, $descr, $start_date, $end_date)
{
	try 
	{
		$query="INSERT INTO ".$dbname.".".$tablename." (BOOKS_ID, USE_ID, BOOKS_STEPS_CONTENT, BOOKS_STEPS_START_DATE, BOOKS_STEPS_END_DATE) 
		VALUES (:Param1, :Param2, :Param3, :Param4, :Param5)";
		$curseur = $connect -> prepare($query);
		//var_dump($curseur);
		// $post contient le $_POST
		$curseur -> bindValue(':Param1', $books_id, PDO::PARAM_STR);
		$curseur -> bindValue(':Param2', $use_id, PDO::PARAM_STR);
		$curseur -> bindValue(':Param3', $descr, PDO::PARAM_STR);
		$curseur -> bindValue(':Param4', $start_date, PDO::PARAM_STR);
		$curseur -> bindValue(':Param5', $end_date, PDO::PARAM_STR);
		$retour = $curseur -> execute();
		$curseur -> closeCursor();
		$_SESSION['step_session_id'] = $connect->lastInsertId();
		return true;

	}

	catch (Exception $e)
	{
		die ('Erreur de Requete' . $e -> getMessage());
		return false;
	}
}
