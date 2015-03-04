

<?php include("../app/include/header.inc.php"); 
?>

<?php 
if (isset($_GET["comment"]))
{
	echo "Formulaire reçu :<br />";
	echo "Nom : ".$_GET["nom"]."<br />";
	echo "Mail : ".$_GET["mail"]."<br />";
	echo "Commentaire : ".$_GET["comment"]."<br />";
	echo "Fin de formulaire<br />";
}
?>

<div id="formulaire" class="row">
	<div id="content2" class="col-md-6">
		<h2>Les commentaires</h2>
		<div id="comment">
			<?php
			foreach($comments as $key=>$value)
			{
			
			?>
				<li class="list-group-item">
				<?php echo $value->comment; ?><br />par
				<?php echo $value->nom; ?><br />
				<?php echo $value->mail; ?>
				</li>
			<?php
			}
			?>
		</div>
	</div>
	<div id="sidebar2" class="col-md-6">
		<h2>Commentez !</h2>
		<form id="formu" name="formu" action="index.php?module=contact&action=contact" method="post" role="form">
			<div class="form-group">
				<label>Votre nom (*) : </label>
				<input type="text" class="form-control" name="nom" size="30" />
			</div>
			<div class="form-group">
				<label>Votre mail (*) : </label>
				<input type="text" class="form-control" name="mail" size="30" />
			</div>
			<div class="form-group">
				<label>Commentaire (*) : </label>
				<textarea name="comment" class="form-control" rows="5" cols="40"></textarea>
			</div>
			<p class="help-block">(*) Obligatoire</p>
			<div><input type="submit"  class="btn btn-default" value="Envoyer" /></div>
		</form>
	</div>
</div>
	
<?php include("../app/include/footer.inc.php"); ?>

<script type="text/javascript" src="public/js/evt.js"></script>
<script type="text/javascript" src="public/js/evt_formu.js"></script>

</body>
</html>
