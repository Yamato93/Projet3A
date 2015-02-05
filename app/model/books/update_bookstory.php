<?php

function update_book_story($connect, $dbname, $tablename, $id1, $id2, $id3, $table1, $table2, $table3)
{
	try 
	{
		$query="UPDATE ".$dbname.".".$tablename."
		SET 
			BOOKS_STEPS_CONTENT = '".$table1."',
			BOOKS_STEPS_START_DATE = '".$table2."',
			BOOKS_STEPS_END_DATE = '".$table3."'
		WHERE
			USE_ID = $id1
		AND
			BOOKS_ID = $id2
		AND
			BOOKS_STEPS_ID = $id3";

		$curseur = $connect -> prepare($query);
		//var_dump($curseur);
		// $post contient le $_POST
		$curseur -> bindValue(':Param1', $id1, PDO::PARAM_STR);
		$curseur -> bindValue(':Param2', $id2, PDO::PARAM_STR);
		$curseur -> bindValue(':Param3', $id3, PDO::PARAM_STR);
		
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