<?php include_once("../app/include/header.inc.php"); ?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<h1 class="page-header">Admin user</h1>
	<div class="row placeholders">
	
	</div>
	<div role="tabpanel">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
			<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Add book</a></li>
		</ul>
	
		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="home">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>User ID</th>
								<th>Book Title</th>
								<th>Book Description</th>
								<th>Book Cover</th>
								<th>Date of Creation</th>
								<th>Edit / Delete</th>
							</tr>
						</thead>
						<tbody>
				
							<?php
							foreach($list as $key=>$value)
							{
							
								?>
								<tr>
								<td><?php echo $value->BOOKS_ID; ?></td>
								<td><?php echo $value->USE_ID; ?></td>
								<td><?php echo $value->BOOKS_TITLE; ?></td>
								<td><?php echo $value->BOOKS_DESCR; ?></td>
								<td><?php echo $value->BOOKS_COVER; ?></td>
								<td><?php echo $value->BOOKS_DATE_CREA ?></td>
								<?php
								if($_SESSION['User']->ADM_LVL > 3)
								{
									?>
										<td>
											<a id="edit" data-toggle="modal" data-target="#myModal<?php echo $value->BOOKS_ID; ?>"><span class="glyphicon glyphicon-pencil"></span></a> /
											<a id="delete" href="index.php?module=index&action=deladmin&del=<?php echo $value->BOOKS_ID; ?>"><span class="glyphicon glyphicon-remove"></span></a>
										</td>
								</tr>
									<?php
								}
							//href="index.php?module=index&action=editadmin&del=<?php echo $value->ADM_ID;
							}
							?>

						</tbody>
					</table>
				</div>
			</div>
		    <div role="tabpanel" class="tab-pane" id="profile">
		    	<div class="col-md-4">
				    <form role="form" name="add_admin_form" action="index.php?module=index&action=index" method="post">
				    	<div class="form-group">
							<label for="Name">User ID</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
						</div>
						<div class="form-group">
							<label for="Name">Book Title</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
						</div>
						<div class="form-group">
						    <label for="exampleInputEmail1">Book Description</label>
						    <textarea class="form-control" rows="3"></textarea>
						</div>
						<div class="form-group">
						    <label for="exampleInputFile">File input</label>
						    <input type="file" id="exampleInputFile">
						    <p class="help-block">Example block-level help text here.</p>
						</div>
	
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
		    	</div>
		    </div>
		</div>
	</div>
</div>

<?php
foreach($list as $key=>$value)
{
?>
<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $value->BOOKS_ID; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Books n°<?php echo $value->BOOKS_ID; ?></h4>
			</div>
			<div class="modal-body">
				<form role="form" name="edit_admin_form" action="index.php?module=index&action=index" method="post">
					<div class="form-group">
						<label for="Name">Nom d'utilisateur</label>
						<input type="text" class="form-control" id="name" name="name" value="<?php echo $value->ADM_NAME; ?>">
					
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="pwd" name="pwd" placeholder="New Password" value="value="<?php echo $value->ADM_PASSWORD; ?>"">
					</div>
					<?php
					if($_SESSION['User']->ADM_LVL > 3)
					{
					?>
					<div class="form-group">
						<label>Niveau d'administration</label><br/>
						<?php
							for ($i = 1; $i <= 5; $i++) 
							{
						?>
							<label class="checkbox-inline">
							  	<input <?php if($value->ADM_LVL == $i){ echo "checked";} ?> type="checkbox" name="lvl" value="<?php echo $i; ?>"> <?php echo $i; ?>
							</label>
						<?php
							}
						?>
					</div>
					<?php
						}
					?>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<?php	
}
?>



<?php include_once("../app/include/footer.inc.php"); ?>   