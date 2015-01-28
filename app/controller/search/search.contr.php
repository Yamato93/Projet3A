<?php
if (isset($_POST['search'])) {
    include_once '../app/model/search/search.model.php';
    $search = '%'.$_POST['search'].'%';
    $limit = 30;
    $offset = 0;
    $data = search($connect, $search, $limit, $offset);
    if (!empty($data)) {
        var_dump($data);
        //include_once '../app/view/search/NOTNAMED.view.php'
    }
    else{
        echo "no result";
    }
} else {
    header('location:index.php');
}