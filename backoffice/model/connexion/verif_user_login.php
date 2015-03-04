<?php
	//*****************************************************************************
	//*****************************************************************************
	//**************** Fonction afin de se connecter (page login) *****************
	//*****************************************************************************
	//*****************************************************************************
	
	function se_connecter($connect, $name, $passwords)
	{
		try
		{
			$se_connecter = $connect -> prepare("SELECT
														USER_LOGIN,
														USER_PASSWORD
												   FROM 
												        khauv.minitp_users 
												  WHERE 
														USER_LOGIN = :login 
													AND 
														USER_PASSWORD= :pwd");	
														
			$se_connecter -> bindValue(':login', $name, PDO::PARAM_STR);
			$se_connecter -> bindValue(':pwd', $passwords, PDO::PARAM_STR);						
			$se_connecter -> execute();
			$se_connecter2 = $se_connecter -> fetchAll(PDO::FETCH_OBJ);
			$se_connecter -> closeCursor();
			if(count($se_connecter2) >= 1)
			{
				$_SESSION["User_connect"] = true;
				$_SESSION["User_login"] = "$name";
				$_SESSION["User"] = current($se_connecter2);
				if (isset($_POST['relog']))
					{
						if(!setcookie("Front_Login",$name,time()+3600*24*31))
						{
							die("cookie ne peut etre enregistré !");
						}
						if(!setcookie("Front_Passwords",$passwords,time()+3600*24*31))
						{
							die("cookie ne peut etre enregistré !");
						}
					}	
	
				return true;
			}
			else
			{
				$_SESSION["User_connect"] = false;
				return false;
			}			//var_dump($se_connecter);
		}
		catch (Exception $e)
		{
		    echo 'Message' . $e -> getMessage();
		}
	}
?>