<?php

	header('Content-type: text/html; charset=UTF-8'); 

	//include ("model/model.php");
	include_once("../app/config/param.inc.php");
	include_once("../app/config/connect.bdd.php");
	include_once("../core/function/function_start_session.php");
	my_session_start(SESSION_NAME);
	
	$debug = array();
	$_SESSION["requetes"] = array();
	
	
	
	
	$connect = cnx_site_local( 'pdo' );
	// DOSSIER
	if(isset($_GET["module"]))
	{
		$module = $_GET["module"];
	}
	else
	{
		$module = "index";
	}
	//PAGE
	if(isset($_GET["action"]))
	{
		$action = $_GET["action"];
	}
	else
	{
		$action = "index";
	}
	
	$url = "../app/controller/".$module."/".$action.".contr.php";
		
			
	if(file_exists($url))
	{		
		include($url);
	}
	else
	{
		include_once("../app/controller/others/404.view.php");
	}
	include_once("../core/function/function_barre_debug.php");
?>