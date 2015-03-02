<?php

function update_book_cover($connect, $dbname, $tablename, $id1, $id2, $table1, $table2)
{
	try 
	{
		$query="UPDATE ".$dbname.".".$tablename."
		SET 
			BOOKS_TITLE = '".$table1."',
			BOOKS_DESCR = '".$table2."'
		WHERE
			USE_ID = :Param1
		AND
			BOOKS_ID = :Param2";

		$curseur = $connect -> prepare($query);
		//var_dump($curseur);
		// $post contient le $_POST
		$curseur -> bindValue(':Param1', $id1, PDO::PARAM_STR);
		$curseur -> bindValue(':Param2', $id2, PDO::PARAM_STR);
		
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
function update_book_cover_img($connect, $dbname, $tablename, $id1, $id2, $table1)
{
	try 
	{
		$query="UPDATE ".$dbname.".".$tablename."
		SET 
			BOOKS_COVER = '".$table1."'
		WHERE
			USE_ID = :Param1
		AND
			BOOKS_ID = :Param2";

		$curseur = $connect -> prepare($query);
		//var_dump($curseur);
		// $post contient le $_POST
		$curseur -> bindValue(':Param1', $id1, PDO::PARAM_STR);
		$curseur -> bindValue(':Param2', $id2, PDO::PARAM_STR);
		
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