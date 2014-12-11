<?php
include_once("../../core/function/function_select_everything.php");

$list = select_everything($connect, BASE, "DT_BOOKS", "BOOKS_ID", "ASC", $limit = null, $offset = null);


include_once("../app/view/books/books.view.php");