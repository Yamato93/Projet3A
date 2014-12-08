<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<h1 class="page-header">Dashboard</h1>
		<div class="row placeholders">
		</div>
		
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nom</th>
						<th>Mail</th>
						<th>Comment</th>
						<th>Supression</th>
					</tr>
				</thead>
				<tbody>
		
					<?php
					foreach($comments as $key=>$value)
					{
					
					?>
					<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->nom; ?></td>
					<td><?php echo $value->mail; ?></td>
					<td><?php echo utf8_encode($value->comment); ?></td>
					<td><a id="suppr" href="index.php?module=admin&action=supp&id=<?php echo $value->id; ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
					</tr>
					<?php
					}
					?>
				</tbody>
		</table>
	</div>
</div>
     