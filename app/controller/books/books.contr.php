<?php 
/**
 * Controller principal of modul books
 *
 * Create, edit, delete, display
 *
 * 
 */
if(isset($_SESSION['User']) and !empty($_SESSION['User']))
{
	/***** insert information from session in BDD for the user *****/
	header('location:landing.html');
	exit();
}
else
{
	$_SESSION['frombooks'] = true;
	header('location:index.php?module=login&action=login');
	exit();
}

