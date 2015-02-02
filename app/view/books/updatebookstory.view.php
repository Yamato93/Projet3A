<?php

function update_book_story($connect, $dbname, $tablename, $where1, $id1, $where2, $id2, $table1, $table2, $table3, $table4)
{
	try 
	{
		$query="UPDATE INTO ".$dbname.".".$tablename."
		SET 
			USE_ID = :Param1
			BOOKS_STEPS_CONTENT = :Param2,
			BOOKS_STEPS_START_DATE = :Param3,
			BOOKS_STEPS_END_DATE = :Param4,
		WHERE";

		$curseur = $connect -> prepare($query);
		//var_dump($curseur);
		// $post contient le $_POST
		$curseur -> bindValue(':Param1', $table1, PDO::PARAM_STR);
		$curseur -> bindValue(':Param2', $table2, PDO::PARAM_STR);
		$curseur -> bindValue(':Param3', $table3, PDO::PARAM_STR);
		$curseur -> bindValue(':Param4', $table4, PDO::PARAM_STR);
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