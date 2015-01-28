<?php
/**
 * Created by PhpStorm.
 * User: alexandredupont
 * Date: 28/01/15
 * Time: 17:23
 * @param $DateNaissance DATE(Y-m-d)
 * @return int (ex : 30)
 */
function ageFR($DateNaissance)
{
    $DateNaissance = explode("-", $DateNaissance);
    $Date = explode("/", date("Y/m/d"));

    if (($DateNaissance[1] <= $Date[1]) && ($DateNaissance[0] <= $Date[0])) $Age = $Date[0] - $DateNaissance[0];
    else $Age = $Date[2] - $DateNaissance[2] - 1;


    return $Age;
}