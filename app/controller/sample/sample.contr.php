<?php
/**
 * Created by PhpStorm.
 * User: alexandredupont
 * Date: 29/01/15
 * Time: 11:15
 */
// Must pass session data for the library to work (only if not already included in your app)
//session_start();

//$redirect_uri = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];




// Facebook app settings
$appId = '513750448764721';
$appSecret = '98ac17a5d2a6fdaef378fefd7bfd9dca';

$redirect_uri = 'http://localhost:8888/3A/Projet/Projet3A/www/index.php?module=sample&action=sample' ;


require '../core/class/facebookConnect.class.php';

$user = (new FacebookConnect($appId, $appSecret))->connect($redirect_uri);
if(is_string($user)){
   $url_fb = $user;

}else{
    $fb_id = $user->getId();
    $email = $user->getEmail();
    if
}

include_once('../app/view/sample/sample.view.php');