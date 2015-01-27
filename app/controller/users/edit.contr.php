<?php
/**
 * Created by PhpStorm.
 * User: alexandredupont
 * Date: 27/01/15
 * Time: 17:57
 */
if (isset($_SESSION['User']->USE_ID)) {
    $id = $_SESSION['User']->USE_ID;

    //MODEL
    include_once("../app/model/users/select_user_by_id.model.php");
    $data = select_user_by_id($connect, $id);

    //VUE
    include_once("../app/view/users/user_edit.view.php");

} else {
    header('location:index.php?module=users&action=login');
}