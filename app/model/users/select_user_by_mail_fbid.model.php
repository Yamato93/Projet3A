<?php

/**
 * @param $connect
 * @param $mail
 * @param $fb_id
 * @return mixed
 */
function select_user_by_mail_fbid($connect, $mail, $fb_id)
{
	try
	{
		$query ="SELECT * FROM DT_USERS
				WHERE USE_MAIL = :mail
				AND USE_FACEBOOK_ID = :fb_id ";
		//OR USE_FB_ID = :fb_id
							
		$curseur = $connect->prepare($query); 
		$curseur ->bindValue(':mail', $mail, PDO::PARAM_STR);
		$curseur ->bindValue(':fb_id', $fb_id, PDO::PARAM_INT);
		$curseur->execute();
		$data_user = $curseur -> fetchAll(PDO::FETCH_OBJ);
		$curseur->closeCursor();
		return $data_user;
	}
			
	catch ( Exception $e ) 
	{
	   die('Erreur Mysql : '.$e->getMessage());
	}

}