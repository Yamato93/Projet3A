<?php
	//*****************************************************************************
	//*****************************************************************************
	//******** Fonctions afin d'enregistrer, et afficher les notifcations  ********
	//*****************************************************************************
	//*****************************************************************************
	// $LEVEL -> DANGER, SUCCESS
	// $CONTENT -> CONTENU
	function sessionize($level, $content)
	{
		$_SESSION['notif'] = array('level' => $level, 'content'=> $content);
	}
	function display($msg)
	{
		echo '<div class="row">
					<div class="alert alert-'.$msg['level'].'">
						<p> '.$msg['content'].' </p>
					</div>
				</div>';
		unset($_SESSION['notif']);
		
	}
	
	
?>