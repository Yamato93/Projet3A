<?php 
if(!isset($_SESSION['Books']['cover_title']))
{
	header("location:index.php?module=books&action=cover");
	exit;
}
include_once("../app/view/books/memorie.view.php");