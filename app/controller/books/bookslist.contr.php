<?php

include_once("../app/model/books/select_books_list.php");


$bookslist = select_books_list($connect, BASE, "DT_BOOKS", $_SESSION['User']->USE_ID);


include_once("../app/view/books/traveljournal-list.view.php");