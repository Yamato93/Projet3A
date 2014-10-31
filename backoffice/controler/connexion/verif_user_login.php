<?php
include_once("model/connexion/verif_user_login.php");
include_once("model/connexion/verif_saisie_login.php");
if(isset($_SESSION['User']))
{
	header("location:index.php?module=admin&action=admin");
	exit();

}
else
{
	if(se_connecter($connect, ALL_valeur_GPC($_POST["login"]), ALL_valeur_GPC($_POST["pwd"])))
	{
		header("location:index.php?module=admin&action=admin");
		exit();
	}	
	else
	{
		header("location:index.php?module=connexion&action=connexion&message=wrong");
		exit();
	}
}