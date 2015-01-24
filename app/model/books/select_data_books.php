<?php

function select_data_books($connect, $dbname, $tablename, $where, $id)
{
	try
	{
		//echo "Le nom de la function : ".__FUNCTION__." / Le nom du document : ".__FILE__." / Le numero de la ligne : ".__LINE__;
			$info = array(
				"Le nom de la function : ".__FUNCTION__,
				"Le nom du document : ".__FILE__,
				"Le numero de la ligne : ".__LINE__);
				
			$query = "SELECT *
						FROM ".$dbname.".".$tablename."
						WHERE ".$where." = :Param1 ORDER BY BOOKS_DATE_CREA DESC";
			
			$curseur = $connect -> prepare($query);
			$curseur -> bindValue(':Param1', $id, PDO::PARAM_STR);
			$curseur -> execute();
			$retour = $curseur -> fetchAll(PDO::FETCH_OBJ);
			$curseur ->closeCursor();
			
			$debug_tableau = array($info ,$query);
			$_SESSION["requetes"] = $debug_tableau;	
			
			return $retour;
    }
    catch ( Exception $e ) 
	{
	   die('Erreur Mysql : '.$e->getMessage());
	}
		
}

function select_data_step($connect, $dbname, $tablename, $where, $id, $where2, $id2)
{
	try
	{
		//echo "Le nom de la function : ".__FUNCTION__." / Le nom du document : ".__FILE__." / Le numero de la ligne : ".__LINE__;
			$info = array(
				"Le nom de la function : ".__FUNCTION__,
				"Le nom du document : ".__FILE__,
				"Le numero de la ligne : ".__LINE__);
				
			$query = "SELECT *
						FROM ".$dbname.".".$tablename."
						WHERE ".$where." = :Param1
						AND ".$where2." = :Param2";
						
			$curseur = $connect -> prepare($query);
			$curseur -> bindValue(':Param1', $id, PDO::PARAM_STR);
			$curseur -> bindValue(':Param2', $id2, PDO::PARAM_STR);
			$curseur -> execute();
			$retour = $curseur -> fetchAll(PDO::FETCH_OBJ);
			$curseur ->closeCursor();
			
			$debug_tableau = array($info ,$query);
			array_push($_SESSION["requetes"], $debug_tableau);	

			return $retour;
    }
    catch ( Exception $e ) 
	{
	   die('Erreur Mysql : '.$e->getMessage());
	}
		
}
function select_data_step_picture($connect, $dbname, $tablename, $where, $id, $where2, $id2)
{
	try
	{
		//echo "Le nom de la function : ".__FUNCTION__." / Le nom du document : ".__FILE__." / Le numero de la ligne : ".__LINE__;
			$info = array(
				"Le nom de la function : ".__FUNCTION__,
				"Le nom du document : ".__FILE__,
				"Le numero de la ligne : ".__LINE__);
						
			$query = "SELECT *
						FROM ".$dbname.".".$tablename."
						WHERE ".$where." = :Param1
						AND ".$where2." = :Param2";

			
			$curseur = $connect -> prepare($query);
			$curseur -> bindValue(':Param1', $id, PDO::PARAM_STR);
			$curseur -> bindValue(':Param2', $id2, PDO::PARAM_STR);
			$curseur -> execute();
			$retour = $curseur -> fetchAll(PDO::FETCH_OBJ);
			$curseur -> closeCursor();
			
			$debug_tableau2 = array($info ,$query);
			array_push($_SESSION["requetes"], $debug_tableau2);	
			
			return $retour;
    }
    catch ( Exception $e ) 
	{
	   die('Erreur Mysql : '.$e->getMessage());
	}
		
}