<?php

	if(isset($_POST["login"]) && isset($_POST["pwd"]))
	{
		
	}
	else
	{
		if(isset($_SESSION[CONNECT]) and ($_SESSION[CONNECT] != false))
		{
			include_once("../app/view/index/index.view.php");
		}
		else
		{
			include_once("../app/view/login/logpage.view.php");
		}

	}