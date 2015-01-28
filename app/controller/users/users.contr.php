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
#TODO 'revoir les test à faire en sorte que ce soit en fonction d'un ID en GET'
if (isset($_GET['id'])) {

	$id = $_GET['id'];
	//MODELS
	include_once("../app/model/users/select_user_by_id.model.php");
	include_once("../app/model/users/count_books_and_travel_by_id.model.php");

	$data = select_user_by_id($connect, $id);

	$count = count_books_and_travel_by_id($connect, $id);

	//VIEW
	if (!empty($data) && !empty($count)) {
		include_once("../app/view/users/user.view.php");
	} else {
		echo 'error';
	}
} else {
	header('location:index.php?module=users&action=login');
}
