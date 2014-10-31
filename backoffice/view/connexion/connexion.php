
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
	
	    <title>Se connecter</title>
	
	    <!-- Bootstrap core CSS -->
	    <link href="../www/public/css_bootstrap/bootstrap.css" rel="stylesheet">

	    <!-- Just for debugging purposes. Don't actually copy this line! -->
	    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	    <![endif]-->
    </head>

    <body id="Fond_login">


	    <div class="container" id="marge_login_container">

	    	<form class="form-signin" action="index.php?module=connexion&action=verif_user_login" method="post">
	    	
	        	<h2 class="form-signin-heading color_white" id="marge_login_container_form">Please log in</h2>
	        	
	        	<input type="text" class="form-control" placeholder="Login" id="login" name="login" required autofocus>
	        	
	        	<input type="password" class="form-control" placeholder="Password" id="pwd" name="pwd" required>
	        	
	  
	        	<button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
	        </form>
	    </div><!-- /.container -->
	    <?php 
		if (isset($_SESSION['notif'])) 
		{
			include_once ('../core/function/function_notification.php');
			display($_SESSION['notif']);
		} 
		?>
		<br/>
	    <div class="col-md-2 col-md-offset-1">
		    <a class="btn btn-lg btn-primary btn-block" href="../www/index.php" >Retour acceuil</a>
	    </div>
