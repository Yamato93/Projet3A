<?php
if(isset($_POST['search'])) {
    include_once '../app/model/search/search.model.php';
    $search = $_POST['search'];
    $data = search($search);
}