<?php

function show_comments($connect, $table_name ,$order_by = null, $order = null, $limit = null, $offset = null)
{
	try
	{
		$info = array(
		"Le nom de la function : ".__FUNCTION__,
		"Le nom du document : ".__FILE__,
		"Le numero de la ligne : ".__LINE__);
		
		$query = "SELECT MINITP_ID AS id, 
		                 MINITP_NAME AS nom,
		                 MINITP_MAIL AS mail,
		                 MINITP_COMMENT AS comment
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
		$debug_tableau = array($info ,$query);
		$_SESSION["requetes"] = $debug_tableau;
		$curseur = $connect -> prepare($query);
		$curseur -> execute();
		$retour = $curseur -> fetchAll(PDO::FETCH_OBJ);
		$curseur ->closeCursor();
		return $retour;
    }
    catch ( Exception $e ) 
	{
	   die('Erreur Mysql : '.$e->getMessage());
	}
		
}
