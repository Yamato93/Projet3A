<?php
function select_data_step($connect, $dbname, $tablename, $where, $id, $where2, $id2, $limit = null, $offset = null)
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
			if($limit != null)
			{
				$query .= " LIMIT ".$limit;
			}
			if($offset != null)
			{
				$query .= " OFFSET ".$offset;
			}
						
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

function select_data_step_picture($connect, $dbname, $tablename, $where, $id, $where2, $id2, $where3 = null, $id3 = null, $limit = null, $offset = null)
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
			if($where3 != null and $id3 != null)
			{
				$query .= " AND ".$where3." = :Param3";
			}
			if($limit != null)
			{
				$query .= " LIMIT ".$limit;
			}
			if($offset != null)
			{
				$query .= " OFFSET ".$offset;
			}
					
			
			$curseur = $connect -> prepare($query);
			$curseur -> bindValue(':Param1', $id, PDO::PARAM_STR);
			$curseur -> bindValue(':Param2', $id2, PDO::PARAM_STR);
			if($where3 != null and $id3 != null)
			{
				$curseur -> bindValue(':Param3', $id3, PDO::PARAM_STR);
			}
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

function select_data_step_info($connect, $dbname, $tablename, $where, $id, $where2, $id2, $where3, $id3)
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
						AND ".$where2." = :Param2
						AND ".$where3." = :Param3";
						
			$curseur = $connect -> prepare($query);
			$curseur -> bindValue(':Param1', $id, PDO::PARAM_STR);
			$curseur -> bindValue(':Param2', $id2, PDO::PARAM_STR);
			$curseur -> bindValue(':Param3', $id3, PDO::PARAM_STR);
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