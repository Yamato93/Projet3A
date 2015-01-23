<?php
/**
 * Created by PhpStorm.
 * User: alexandredupont
 * Date: 23/01/15
 * Time: 17:46
 */
function search($connect, $search){
    try
    {
        $query ="SELECT * FROM DT_USERS
				WHERE USE_ID = :";

        $curseur = $connect->prepare($query);
        $curseur ->bindValue(':id', $search, PDO::PARAM_STR);
        $curseur->execute();
        $data_user = $curseur -> fetchAll(PDO::FETCH_OBJ);
        $curseur->closeCursor();
        if(isset($data_user))
        {
            return current($data_user);
        }
        else
        {
            return false;
        }

    }

    catch ( Exception $e )
    {
        die('Erreur Mysql : '.$e->getMessage());
    }
}