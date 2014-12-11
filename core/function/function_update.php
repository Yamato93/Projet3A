<?php

function update($connect, $dbname, $tablename, $colname, $id, $datapost)
{
	try
	{
			$info = array(
				"Le nom de la function : ".__FUNCTION__,
				"Le nom du document : ".__FILE__,
				"Le numero de la ligne : ".__LINE__);
			
			$column_name = "SELECT 
								COLUMN_NAME
							FROM  
								information_schema.columns
							WHERE  
								table_name = ".$tablename;
			$curseur = $connect -> prepare($column_name);
			$curseur -> execute();
			$retour = $curseur -> fetchAll(PDO::FETCH_OBJ);
			$curseur ->closeCursor();

			$combine = array_combine($column_name, $datapost);
								
			$query = "SELECT *
						FROM ".$dbname.".".$tablename."
						WHERE ".$colname." = :ID";
						
			$curseur = $connect -> prepare($query);
			$curseur -> bindValue(":ID", $id, PDO::PARAM_STR);
			$curseur -> execute();
			$data_id = $curseur -> fetchAll(PDO::FETCH_OBJ);
			$curseur ->closeCursor();
			
			$debug_tableau = array($info ,$query);
			$_SESSION["requetes"] = $query;		
			
			if(count($data_id) >= 1)
			{
				$info = array(
				"Le nom de la function : ".__FUNCTION__,
				"Le nom du document : ".__FILE__,
				"Le numero de la ligne : ".__LINE__);
				
				$query2 = "UPDATE ".$dbname.".".$tablename."SET";
				
				foreach ($combine as $value => $key)
				{
					$query2 .= $value." = ".$key; 
				}
							
				$query2 .= "WHERE ".$colname." = ".$id;
				
				$retour = $curseur -> execute($query2);
				$curseur -> closeCursor();
				
				$debug_tableau = array($info ,$query2);
				$_SESSION["requetes"] = $query;	
				return true
			}
			else
			{
				return false;
			}		
			
			
			
    }
    catch ( Exception $e ) 
	{
	   die('Erreur Mysql : '.$e->getMessage());
	}
		
}