<?
function count_books_and_travel_by_id($connect, $id)
{
	try
	{
		$query ="SELECT
				(SELECT COUNT(*) FROM DT_BOOKS WHERE USE_ID = :id) as nb_books,
				(SELECT COUNT(*) FROM DT_ROUTE WHERE USE_ID = :id) as nb_routes";
							
		$curseur = $connect->prepare($query); 
		$curseur ->bindValue(':id', $id, PDO::PARAM_STR);
		$curseur->execute();
		$data = $curseur -> fetchAll(PDO::FETCH_OBJ);
		$curseur->closeCursor();
		if(isset($data))
		{
			return current($data);
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