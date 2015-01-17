<?
function select_user_by_id($connect, $id)
{
	try
	{
		$query ="SELECT * FROM DT_USERS
				WHERE USE_ID = :id";
							
		$curseur = $connect->prepare($query); 
		$curseur ->bindValue(':id', $id, PDO::PARAM_STR);
		$curseur->execute();
		$data_user = $curseur -> fetchAll(PDO::FETCH_OBJ);
		$curseur->closeCursor();
		if(isset($data_user))
		{
			return current($data_user);
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