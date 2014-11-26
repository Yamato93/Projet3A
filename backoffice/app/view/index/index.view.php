<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="../www/public/css_bootstrap/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../www/public/css_bootstrap/dashboard.css" rel="stylesheet">
    
   
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="index.php?module=admin&action=deco">Se déconnecter</a></li>
          </ul>
        </div>
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
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../www/public/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../www/public/js/evt_supp.js"></script>
  </body>
</html>
