<?php 
/**
 * Controller principal of modul users
 *
 * edit, create, display
 *
 * 
 */

if (isset($_SESSION['User']->USE_ID)) {

	$id = $_SESSION['User']->USE_ID;;
	//MODELS
	include_once("../app/model/users/select_user_by_id.model.php");
	include_once("../app/model/users/count_books_and_travel_by_id.model.php");

	$data = select_user_by_id($connect, $id);
	$count = count_books_and_travel_by_id($connect, $id);

	//CHANGE DateOfBirth IN AGE
	include_once("../core/function/function_age.php");
	if ($data->USE_BIRTHDAY > 0) {
		$data->USE_BIRTHDAY = ageFR($data->USE_BIRTHDAY);
	}
	//VIEW
	if (!empty($data) && !empty($count)) {
		include_once("../app/view/users/user.view.php");
	} else {
		echo 'error';
	}
} else {
	header('location:index.php?module=users&action=login');
}
