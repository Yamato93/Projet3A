<?php

function select_everything($connect, $table_name ,$order_by = null, $order = null, $limit = null, $offset = null)
{
	
	//echo "Le nom de la function : ".__FUNCTION__." / Le nom du document : ".__FILE__." / Le numero de la ligne : ".__LINE__;
	$query = "--".__FUNCTION__."  //  ".__FILE__."  //  ".__LINE__."  --
				SELECT *
				FROM ".PREFIX_BASE."$table_name";
				
	if($order_by != null and $order != null)
	{
		$query .= " ORDER BY $order_by $order";
	}
	if($limit != null)
	{
		$query .= " LIMIT $limit";
	}
	if($offset != null)
	{
		$query .= " OFFSET $offset";
	}
	$requetes = $query;
	$curseur = $connect -> prepare($query);
	$curseur -> execute()
	$retour = $curseur -> fetchAll(PDO::FETCH_OBJ);
		$curseur ->closeCursor();
		return $retour;
    }
    catch ( Exception $e ) 
	{
	   die('Erreur Mysql : '.$e->getMessage());
	}
		
}
