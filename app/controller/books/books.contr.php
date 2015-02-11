<?php

include_once("../app/model/books/select_data_books.php");
include_once("../app/model/books/select_data_steps.php");

if (isset($_GET['id'])){
    $IdBook = $_GET['id'];
    $book =  select_data_book($connect, BASE, "DT_BOOKS", "BOOKS_ID", $IdBook);

    $bookStep = select_data_steps($connect, $IdBook);



} else {
    header('location:index.php');
    exit();
}

$booksstepimgbook = select_data_picture($connect, BASE, "DT_BOOKS_STEPS_PICTURE", "BOOKS_ID", $_GET['id']);

$booksstepimggalery = select_data_picture($connect, BASE, "DT_BOOKS_STEPS_PICTURE", "BOOKS_ID", $_GET['id']);


include_once("../app/view/books/book.view.php");