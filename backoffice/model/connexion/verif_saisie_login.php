<?php
	//*****************************************************************************
	//*****************************************************************************
	//******************** Fonction pour la gestion des saisie ********************
	//*****************************************************************************
	//*****************************************************************************
	
	function ALL_supprimer_MQ($valeur)
	{
		// si magic_quotes_gpc est à "on", on enlève les \
		return (get_magic_quotes_gpc())?stripslashes($valeur): $valeur;
	}
	
	function ALL_valeur_GPC($valeur)
	{
		// si magic_quotes_gpc est à "on", on enlève les \
		return ALL_supprimer_MQ(trim($valeur));
	}
	function ALL_vers_mysql($valeur)
	{
		// si magic_quotes_gpc est à "on", on enlève les \
		return mysqli_real_escape_string(trim($valeur));
	}
	
	function ALL_vers_form($valeur)
	{
		// si magic_quotes_gpc est à "on", on enlève les \
		return htmlentities($valeur, ENT_QUOTES);
	}
	
	function ALL_vers_page($valeur)
	{
		// si magic_quotes_gpc est à "on", on enlève les \
		return nl2br(htmlentities($valeur, ENT_QUOTES));
	}
?>