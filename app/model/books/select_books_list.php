<?php

function select_books_list($connect, $dbname, $tablename, $id)
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
						WHERE USE_ID = :Param1 ORDER BY BOOKS_DATE_CREA DESC";
			
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
