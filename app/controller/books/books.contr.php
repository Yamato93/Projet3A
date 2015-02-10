<?php

include_once("../app/model/books/select_data_books.php");
include_once("../app/model/books/select_data_steps.php");

$booksstep = select_data_step($connect, BASE, "DT_BOOKS_STEPS", "USE_ID", $_SESSION['User']->USE_ID, "BOOKS_ID", $_GET['id'], 6);

$booksstepimg = select_data_step_picture($connect, BASE, "DT_BOOKS_STEPS_PICTURE", "USE_ID", $_SESSION['User']->USE_ID, "BOOKS_ID", $_GET['id'], null, null, 6,0);

echo "<pre>";
var_dump($booksstep);
echo "<pre>";

echo "<pre>";
var_dump($booksstepimg);
echo "<pre>";
include_once("../app/view/books/traveljournal.view.php");