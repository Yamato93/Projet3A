<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Mon expo photo</title>
	<!-- <link href="public/css/style1.css" rel="stylesheet" type="text/css" media="screen" id="css" /> -->
	<link href="public/css_bootstrap/bootstrap.css" rel="stylesheet"/>
	<link href="public/css/style.css" rel="stylesheet"/>
	<script type="text/javascript" src="public/js/script.js"></script>
	<script type="text/javascript" src="public/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
		function traiterFlux(flux){
			//contenu = "<ul>";
			$.each(flux, function(key, value){
				
				if( value == 1 )
				{
					//contenu += "<li>Key : "+key+" - Value : "+value+"</li>";	
					//$("#formLogin").remove();
					$("#formLogin").replaceWith("<a href='index.php?module=connection&action=deco'>Se deconnecter</a>");
					$("#affichage").remove();
				}
				
			});
			//contenu += "</ul>";
			
			//$("#affichage").html(contenu);
		}
		
		$(document).ready( function() {
			$("#formLogin").on('submit', function(e)
			{
				// on désactive le comportement par défaut (submit)
				e.preventDefault();
				$.ajax({
					// URL du traitement sur le serveur
					url	 :'../app/controller/connection/verif_user_login.php',
					// Type de requête
					type :'post',
					// Parametres envoyés
					data :  
						/* Login : $('#Login').val(), 
						   Password : $('#password').val()
						*/
						$(this).serialize(),
					//On précise le type de flux
					dataType: 'json',
					// Traitement en cas de succès : on reçoit le flus dans data
					success: function(data) {
						console.log(data);
						traiterFlux(data);
					},
					error: function(jqXHR, textStatus, errorThrown)
					{
						console.log(textStatus);
						console.log(errorThrown);
						console.log("Erreur execution requete AJAX !");
					}
				});
			});
		});
	</script>
	</head>

<body>

<div id="container" class=".container col-md-10 col-md-offset-1">
	<!-- Début du container -->
	<div id="header">
		<div class="row">
			<div id="logo" class="col-md-4">
				<h1><a href="index.php?module=index&action=index"><?php echo SITE_NAME ?></a></h1>
				<p>Exercice de formation</p>
	
			</div>
			<div id="menu" class="col-md-8" >
				<ul class="nav nav-pills nav-justified">
					<li class="current_page_item">
						<a id="lien1" href="index.php?module=index&action=index">Accueil</a></li>
					<li><a id="lien2" href="index.php?module=others&action=404">Blog</a></li>
					<li><a id="lien3" href="index.php?module=galerie&action=galerie">Photos</a></li>
					<li><a id="lien4" href="index.php?module=others&action=404">A propos</a></li>
					<li><a id="lien5" href="index.php?module=contact&action=contact">Contact</a></li>
				</ul>
				<div id="aide">Aide contextuelle</div>
			</div>
		</div>
		<?php 
		if (isset($_SESSION['notif'])) 
		{
			include_once ("../core/function/function_notification.php");
			display($_SESSION['notif']);
		}
		?>
		<div id="divLogin">
		<?php
		if(isset($_SESSION['User_connect']) and $_SESSION['User_connect'] == 1)
		{
		?>	
	
				<a href="index.php?module=connection&action=deco">Se deconnecter</a>

		<?php	
		}
		else
		{
		?>		
			<form action="#" method="post" id="formLogin">
				<input type="text" name="login" id="login" placeholder="login"/>
				<input type="password" name="password" id="password" placeholder="mot de passe"/>
				<input type="submit" id="lancer" value="Lancer Ajax" />
			</form>
			<div id="affichage" style="background-color: yellowgreen"></div>
		<?php	
		}
		?>
		</div>
	</div>
	