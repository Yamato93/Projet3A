<?php

	function supprimer_comment($connect, $ID)
	{

		try 
		{
			$query = "DELETE FROM minitp
						WHERE MINITP_ID = :suppr";
			//echo $query;
			$curseur = $connect -> prepare($query);
			// $post contient le $_POST
			$curseur -> bindParam(':suppr', $ID);
		    $curseur -> execute();
			$curseur -> closeCursor();	
			return true;			
		}
		catch (Exception $e)
		{
			die ('Erreur de Requete' . $e -> getMessage());
			return false;
		}
			
	}