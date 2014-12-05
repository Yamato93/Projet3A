<?php
/********** **********/
/**
 ** Constantes for every document
 **/
 	/*********************
	Name for the session
	*********************/
	define('SESSION_NAME', "Discoverit_bo_session");
	
	/***********************
	Max post per page
	***********************/
	define('MAX_PAGE', 10);
	
	/*********************
	Préfixe BDD
	*********************/
	define('PREFIX_BASE', "");
	
	/*********************
	BDD name
	*********************/
	define('BASE', "khauv");
	
	/*********************
	Name for the site
	*********************/
	define('SITE_NAME', "MonExpo.com");
	
	/*********************
	SITE URL <?php echo BASE_DIR ?>
	*********************/
	define('BASE_DIR',"http://".$_SERVER["HTTP_HOST"].dirname($_SERVER['SCRIPT_NAME']));
	define('BUG_BASE_DIR', "http://".$_SERVER["HTTP_HOST"].dirname(dirname($_SERVER['SCRIPT_NAME'])));
	/*********************
	Name for the site
	*********************/
	define('COOKIE_LOG', "Login");
	define('COOKIE_PASS', "Password");
	/********************************
	var in session for being connect
	********************************/
	if((!defined('BACKOFFICE')|| !BACKOFFICE))
	{
		define('CONNECT', "admin_connect");
	}
	else
	{
		define('CONNECT', "user_connect");
	}
	
/**
 ** Config localhost
 **/
	if (($_SERVER["HTTP_HOST"] == "localhost") or ($_SERVER["HTTP_HOST"] == "127.0.0.1"))
	{
		define('DEBUG', TRUE);
	}
/**
 ** Config online host
 **/
	else if ($_SERVER["HTTP_HOST"] == "ns366377.ovh.net")
	{
		define('DEBUG', FALSE);
	}
	
	if((defined('DEBUG') && DEBUG ))
	{
		//include_once("../app/debug/debug.php");
		ini_set('display_errors', 1);
		error_reporting(E_ALL & ~E_DEPRECATED);
	}
	else
	{
		ini_set('display_errors', 0);
		error_reporting(0);
	}
?>