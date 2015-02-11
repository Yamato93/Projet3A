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

$bookslist = select_data_books($connect, BASE, "DT_BOOKS", "BOOKS_ID" , $_GET['id'], "USE_ID", $_SESSION['User']->USE_ID);

$booksstep = select_data_step($connect, BASE, "DT_BOOKS_STEPS", "USE_ID", $_SESSION['User']->USE_ID, "BOOKS_ID", $_GET['id'], 6);

$booksstepimgbook = select_data_step_picture($connect, BASE, "DT_BOOKS_STEPS_PICTURE", "USE_ID", $_SESSION['User']->USE_ID, "BOOKS_ID", $_GET['id'], null, null, 6,0);

$booksstepimggalery = select_data_step_picture($connect, BASE, "DT_BOOKS_STEPS_PICTURE", "USE_ID", $_SESSION['User']->USE_ID, "BOOKS_ID", $_GET['id'], null, null, 6,6);


include_once("../app/view/books/book.view.php");