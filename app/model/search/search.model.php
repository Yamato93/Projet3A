<?php
/**
 * Created by PhpStorm.
 * User: alexandredupont
 * Date: 23/01/15
 * Time: 17:46
 */
function search($connect, $search, $limit, $offset){
    try
    {
        $query ='SELECT *
                FROM DT_BOOKS A, DT_BOOKS_STEPS B
                WHERE A.BOOKS_ID = B.BOOKS_ID
                AND ( BOOKS_TITLE LIKE :search
                OR BOOKS_DESCR LIKE :search
                OR BOOKS_STEPS_CONTENT LIKE :search )
                LIMIT :offset, :limit ;' ;
        $curseur = $connect->prepare($query);
        $curseur ->bindValue(':search', $search, PDO::PARAM_STR);
        $curseur ->bindValue(':offset', $offset, PDO::PARAM_INT);
        $curseur ->bindValue(':limit', $limit, PDO::PARAM_INT);

        $curseur->execute();
        var_dump($curseur);
        $data_user = $curseur -> fetchAll(PDO::FETCH_OBJ);
        var_dump($data_user);
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