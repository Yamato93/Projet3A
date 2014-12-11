<?php
include_once("../../core/function/function_select_everything.php");

$list = select_everything($connect, BASE, "DT_ROUTE", "ROUTE_ID", "ASC", $limit = null, $offset = null);


include_once("../app/view/parcours/parcours.view.php");