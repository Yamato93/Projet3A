<?php
if (isset($_POST['search'])) {
    include_once '../app/model/search/search.model.php';
    $search = '%'.$_POST['search'].'%';
    //$search = '%Crotian%';
    $limit = 30;
    $offset = 0;
    //echo $limit.'//'.$offset.'//'.$search;
    $data = search($connect, $search, $limit, $offset);
    //var_dump($data);
} else {
    header('location : index.php');
}