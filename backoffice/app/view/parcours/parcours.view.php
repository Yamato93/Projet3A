<?php include_once("../app/include/header.inc.php"); ?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<h1 class="page-header">Liste des admins</h1>
	<div class="row placeholders">
	</div>
	<div role="tabpanel">

		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
			<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Add Admin</a></li>
		</ul>
	
		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="home">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Nom d'utilisateur</th>
								<th>Mot de passe</th>
								<th>Level d'administration</th>
								<th>Administration</th>
							</tr>
						</thead>
						<tbody>
				
							<?php
							foreach($list as $key=>$value)
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
										<td>
											<a id="suppr" href="index.php?module=admin&action=supp&id=<?php echo $value->id; ?>"><span class="glyphicon glyphicon-pencil"></span></a> /
											<a id="suppr" href="index.php?module=admin&action=supp&id=<?php echo $value->id; ?>"><span class="glyphicon glyphicon-remove"></span></a>
										</td>
								</tr>
									<?php
								}
							
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		    <div role="tabpanel" class="tab-pane" id="profile">
		    	<div class="col-md-4">
				    <form role="form" name="add_admin_form" action="" method="post">
						<div class="form-group">
							<label for="exampleInputEmail1">Nom d'utilisateur</label>
							<input type="text" class="form-control" placeholder="Enter name">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>
						<div class="form-group">
							<label>Niveau d'administration</label><br/>
							<label class="checkbox-inline">
							  	<input type="checkbox" name="lvl" value="1"> 1
							</label>
							<label class="checkbox-inline">
							  	<input type="checkbox" name="lvl" value="2"> 2
							</label>
							<label class="checkbox-inline">
							  	<input type="checkbox" name="lvl" value="3"> 3
							</label>
							<label class="checkbox-inline">
							  	<input type="checkbox" name="lvl" value="4"> 4
							</label>
							<label class="checkbox-inline">
							  	<input type="checkbox" name="lvl" value="5"> 5
							</label>
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
		    	</div>
		    </div>
		</div>
	</div>
</div>

<?php include_once("../app/include/footer.inc.php"); ?>   