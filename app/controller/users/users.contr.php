<?php 
/**
 * Controller principal of modul users
 *
 * edit, create, display
 *
 * 
 */
//echo('controler users');

if (isset($_GET['action']) && $_GET['action'] == 'login') {
	# code...
}
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
	
}

include_once("../app/view/users/user.view.php");
