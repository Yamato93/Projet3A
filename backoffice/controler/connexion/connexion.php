<?php

	if(isset($_SESSION["User_connect"]) and ($_SESSION["User_connect"] != false))
	{
		include_once("view/admin/admin.php");
	}
	else
	{
		include_once("view/connexion/connexion.php");
	}