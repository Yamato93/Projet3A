<?php
/**
 * Created by PhpStorm.
 * User: alexandredupont
 * Date: 27/01/15
 * Time: 17:57
 */
if (isset($_POST['id']) && $_POST['type'] == 'edit_user') {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $dateofbirth = $_POST['dateofbirth'];
    $descr = $_POST['descr'];
    $level = $_POST['level'];
    //$picture = $_POST['picture'];
    $picture = '';
    $country = $_POST['country'];
    $id = $_POST['id'];
    
    //MODEL
    include_once("../app/model/users/update_user.model.php");


    if (update_user($connect, $lastname, $firstname, $dateofbirth, $descr, $level ,$picture, $country, $id)){
        sessionize('success','Informations are registered');
        header('location:?module=users&action=users&id='.$id.'&state=OK');
    } else {
        sessionize('danger','Sorry, error when saving, please try again later');
        header('location:?module=users&action=users&id='.$id.'&state=OK');
    }
} elseif (isset($_SESSION['User']->USE_ID)) {

    $id = $_SESSION['User']->USE_ID;

    //MODEL
    include_once("../app/model/users/select_user_by_id.model.php");
    $data = select_user_by_id($connect, $id);

    //VUE
    include_once("../app/view/users/user_edit.view.php");

} else {
    header('location:index.php?module=users&action=login');
}