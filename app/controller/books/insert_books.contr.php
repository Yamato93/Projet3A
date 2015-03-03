<?php 
/**
 * Controller principal of modul books
 *
 * Create, edit, delete, display
 *
 * 
 */
if(isset($_SESSION['User']) and !empty($_SESSION['User']))
{
	/***** insert information from session in BDD for the user *****/
	include_once("../app/model/books/insert_cover.model.php");
	include_once("../app/model/books/insert_step.model.php");
	include_once("../app/model/books/insert_step_img.model.php");
	if(isset($_SESSION['Books']))
	{
		$use_id = $_SESSION['User']->USE_ID;
		$cover_title = $_SESSION['Books']['cover_title'];
		$cover_descr = $_SESSION['Books']['cover_descr'];
		$cover_img = $_SESSION['Books']['cover_upload'];
		if(insert_cover($connect, BASE, "DT_BOOKS", $use_id, $cover_title, $cover_descr, $cover_img))
		{
			for ($i = 0; $i < count($_SESSION['Books']); $i++) 
			{
				if(isset($_SESSION['Books']['Step'.$i]))
				{
					$books_id = $_SESSION['cover_session_id'];
					$step = $_SESSION['Books']['Step'.$i];
				    if(insert_step($connect, BASE, "DT_BOOKS_STEPS", $books_id, $use_id, $step['content'], $step['start-date'], $step['end-date']))
				    {
						for($j = 0; $j < $_SESSION['max_chan_id ']; $j++)
						{
							if(isset($step['step_img'.$j]))
							{
							
								 insert_step_img($connect, BASE, "DT_BOOKS_STEPS_PICTURE", $_SESSION['step_session_id'], $books_id, $use_id, $step['step_img'.$j]);
							}
										
						}					   
				    }
				}
			}
		}
		unset($_SESSION['count-step']);
		unset($_SESSION['Books']);
		header('location:index.php?module=books&action=books&id='.$books_id);
		exit();
	}
}
else
{
	$_SESSION['frombooks'] = true;
	header('location:index.php?module=users&action=login');
	exit();
}

