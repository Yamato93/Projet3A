<?php
	include_once("../../model/connection/verif_user_login.php");
	include_once("../../config/connect.bdd.php");
	include_once("../../config/param.inc.php");
	include_once("../../../core/function/function_start_session.php");
	my_session_start(SESSION_NAME);
	
	$connect = cnx_site_local( 'pdo' );
	
	$valeur = sign_in($connect, $_POST["login"], $_POST["password"]);
	
	if($valeur == 1)
	{	
		
		//$_SESSION["User_connect"] = true;
		//$_SESSION["User"] = $valeur["User_log"];
		if (!setcookie(COOKIE_LOG, $_POST["login"],time()+3600*24*31))
		{
			die("Cookie can't be saved !");
		}
		if (!setcookie(COOKIE_PASS, $_POST["password"], time()+3600*24*31))
		{
			die("Cookie can't be saved !");
		}
		$_SESSION["User_connect"] = true;
		$answer = array( 
						"Nombre user" =>  $valeur,
						"Message" => "Known user");
	}
	else if ($valeur == 0)
	{
		$_SESSION["User_connect"] = false;
		$answer = array( 
						"Nombre user" =>  $valeur,
						"Message" => "Unknown user");
	}
	else
	{
		$_SESSION["User_connect"] = false;
		$answer = array( 
						"Nombre user" => $valeur,
						"Message" => "To much user");
	}
	
	echo json_encode($answer); 