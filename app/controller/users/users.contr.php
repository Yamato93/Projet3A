<?php 
/**
 * Controller principal of modul users
 *
 * edit, create, display
 *
 * 
 */
//echo('controler users');

// if (isset($_GET['action']) && $_GET['action'] == 'login') {
// 	include_once 'login.contr.php';
// }
// if (isset($_GET['action']) && $_GET['action'] == 'logout') {
// 	include_once 'logout.contr.php';
// }

if (isset($_SESSION['User']->USE_ID)) {

	$id = $_SESSION['User']->USE_ID;
	include_once("../app/model/users/select_user_by_id.model.php");
	select_user_by_id($connect, $id);
	include_once("../app/view/users/user.view.php");
}
else
{
	header('location:index.php?module=users&action=login');
}
