<?php
if(isset($_GET['info']) & isset($_GET['img_id']))
{
	unset($_SESSION['Books']['Step'.$_GET['info']]['step_img'.$_GET['img_id']]);
}
exit();