<?php

	function se_deconnecter()
	{

		unset($_SESSION["User_connect"]);
	
		if (!setcookie("Login","",time()-3600*24*31))
		{
			die("Le cookie ne peut être enregistré !");
		}
		if (!setcookie("Passwords","", time()-3600*24*31))
		{
			die("Le cookie ne peut être enregistré !");
		}
		header("location:index.php");

	}