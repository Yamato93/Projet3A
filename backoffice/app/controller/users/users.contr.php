<?php
if(isset($_SESSION['User']))
{

include_once("../../core/function/function_select_everything.php");
include_once("../app/model/index/addadmin.model.php");


$list = select_everything($connect, BASE, "DT_USERS", "USE_ID", "ASC", $limit = null, $offset = null);

include_once("../app/view/users/users.view.php");
}
else
{
	header('location:index.php?module=login&action=logout');
	exit;
}