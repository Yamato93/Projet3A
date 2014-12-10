<?php
include_once("../../core/function/function_select_everything.php");

$listadmin = select_everything($connect, BASE, "DT_ADMIN", "ADM_ID", "ASC", $limit = null, $offset = null);


include_once("../app/view/index/index.view.php");