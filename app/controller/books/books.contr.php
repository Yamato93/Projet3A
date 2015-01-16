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
	include_once("../app/model/books/insert_cover.model.php");
	include_once("../app/model/books/insert_step.model.php");
	include_once("../app/model/books/insert_step_img.model.php");
	
	insert_cover($connect, $dbname, $tablename, $id, $title, $descr, $cover)
	insert_step($connect, $dbname, $tablename, $books_id, $use_id, $descr, $start_date, $end_date)
	insert_step_img($connect, $dbname, $tablename, $books_steps, $books_id, $img)
	//header('location:landing.html');
	//exit();
}
else
{
	$_SESSION['frombooks'] = true;
	header('location:index.php?module=login&action=login');
	exit();
}

