<?php
	//*****************************************************************************
	//*****************************************************************************
	//**************** Fonction afin de se connecter (page login) *****************
	//*****************************************************************************
	//*****************************************************************************
	function sign_in($connect, $name, $passwords)
	{
		

		try
		{
			$info = array(
		"Le nom de la function : ".__FUNCTION__,
		"Le nom du document : ".__FILE__,
		"Le numero de la ligne : ".__LINE__);
			$query = ("SELECT 
							USER_LOGIN,
							USER_PASSWORD
					   FROM 
					        khauv.minitp_users 
					  WHERE 
							USER_LOGIN = :login
						AND 
							USER_PASSWORD = :pwd");		
			
			$curseur = $connect -> prepare($query);
			
			$curseur -> bindValue(":login", $name, PDO::PARAM_STR);
			$curseur -> bindValue(":pwd", $passwords, PDO::PARAM_STR);
			
			$curseur -> execute();
			$data_user = $curseur -> fetchAll(PDO::FETCH_OBJ);
			$curseur ->closeCursor();
			
				$debug_tableau = array($info ,$query);
				$_SESSION["requetes"] = $query;		

			if(count($data_user) >= 1)
			{
				$_SESSION["User"] = current($data_user);
				//return array("Valeur" => count($se_connecter2), "User_log" => current($se_connecter2));
				return count($data_user);
			}
			else
			{
				return count($data_user);
				//return array("Valeur" => count($se_connecter2));
			}			//var_dump($se_connecter);
		}
		catch (Exception $e)
		{
		    echo 'Message' . $e -> getMessage();
		}
	}
?>