<?php


	//include ("model/model.php");
	include_once("../app/config/param.inc.php");
	include_once("../app/config/connect.bdd.php");
	
	
	
	//$retour = array();

	$connect = cnx_site_local( 'pdo' );

	
	// DOSSIER
	if(isset($_GET["module"]))
	{
		$module = $_GET["module"];
	}
	else
	{
		$module = "connexion";
	}
	//PAGE
	if(isset($_GET["action"]))
	{
		$action = $_GET["action"];
	}
	else
	{
		$action = "connexion";
	}
	
	$url = "controler/".$module."/".$action.".php";
		
			
	if(file_exists($url))
	{
		include($url);
	}
	else
	{
		include_once("../app/controler/others/404.contr.php");
	}
	
	//include_once("../app/debug/debug.php");

?>