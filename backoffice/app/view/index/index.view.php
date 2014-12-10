<?php include_once("../app/include/header.inc.php"); ?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<h1 class="page-header">Liste des admins</h1>
		<div class="row placeholders">
		</div>
		
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nom d'utilisateur</th>
						<th>Mot de passe</th>
						<th>Level d'administration</th>
						<th>Supression</th>
					</tr>
				</thead>
				<tbody>
		
					<?php
					foreach($listadmin as $key=>$value)
					{
					
						?>
						<tr>
						<td><?php echo $value->ADM_ID; ?></td>
						<td><?php echo $value->ADM_NAME; ?></td>
						<td><?php echo $value->ADM_PASSWORD; ?></td>
						<td><?php echo $value->ADM_LVL ?></td>
						<?php
						if($value->ADM_LVL < 5)
						{
							?>
								<td><a id="suppr" href="index.php?module=admin&action=supp&id=<?php echo $value->id; ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
						</tr>
							<?php
						}
					
					}
					?>
				</tbody>
		</table>
	</div>
</div>

<?php include_once("../app/include/footer.inc.php"); ?>   