<?php
if(isset($_GET['info']))
{
	unset($_SESSION['Books']['Step'.$_GET['info']]);
	
	for($i = 1; $i < $_SESSION['count-step']; $i++)
	{
		if(!isset($_SESSION['Books']['Step'.$i]))
		{
			$Pa3 = $i + 1;
			if(isset($_SESSION['Books']['Step'.$Pa3]))
			{
				$_SESSION['Books']['Step'.$i] = $_SESSION['Books']['Step'.$Pa3];
				unset($_SESSION['Books']['Step'.$Pa3]);
				$_SESSION['count-step']--;
				
			}
		}
	}
}	
	header("Location:index.php?module=books&action=memorie");
	exit();