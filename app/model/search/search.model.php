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
                FROM DT_BOOKS A
                LEFT JOIN DT_BOOKS_STEPS B
                ON A.BOOKS_ID=B.BOOKS_ID
                WHERE BOOKS_TITLE LIKE :search
                OR BOOKS_DESCR LIKE :search
                OR BOOKS_STEPS_CONTENT LIKE :search
                LIMIT :offset, :limit ;' ;

        $curseur = $connect->prepare($query);

        $curseur ->bindValue(':search', $search, PDO::PARAM_STR);
        $curseur ->bindValue(':offset', $offset, PDO::PARAM_INT);
        $curseur ->bindValue(':limit', $limit, PDO::PARAM_INT);

        $curseur->execute();

        $data = $curseur -> fetchAll(PDO::FETCH_OBJ);

        $curseur->closeCursor();
        if(isset($data))

        {
            return $data;
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