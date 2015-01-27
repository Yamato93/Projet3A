<?php
if(isset($_GET['search'])) {
    include_once '../app/model/search/search.model.php';
    $search = $_GET['search'];
    $search = 'Crotian';
    $limit = 30;
    $offset = 0;
    echo $limit.'//'.$offset.'//'.$search;
    $data = search($connect, $search, $limit, $offset);
    var_dump($data);
}