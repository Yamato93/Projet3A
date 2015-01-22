<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Discover it - Create a memorie</title>
        <meta name="description" content="Organize your travel from the others feedbacks.">
        <link rel="stylesheet" href="public/css/memorie.css">
    </head>
    <body>
        <!-- HEADER -->
        <?php include('../app/includes/header.inc.php') ?>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <div class="cover-container">

            <?php include('../app/includes/nav.inc.php') ?>

            <div class="journal-container u-wrapper">
                <h1>Let's the journey begin</h1>
                <ul class="breadcrumb">
                    <li>
                        <span></span> Start by your cover
                    </li>
                    <li class="active">
                        <span></span> Create a memorie
                    </li>
                    <li>
                        <span></span> Recount your story
                    </li>
                </ul>
                <div class="grid">
                    <div class="column-half" style="background-image:url(<?php echo $_SESSION['Books']['cover_upload'];?>); background-size: cover;">
                        <h2 class="cover-title"><?php echo $_SESSION['Books']['cover_title'];?></h2>
                    </div>
                    <div class="column-half">
                        <p><?php echo $_SESSION['Books']['cover_descr'];?></p>
                    </div>
                </div>
                <div class="tab-container">
                    <ul>
                        <li>
                            <a href="#memories" class="active">Memories</a>
                        </li>
                        <li>
                            <a href="#map">Map</a>
                        </li>
                    </ul>
                    <div id="memories" class="tab-content active">
                        <ul>
                        	<?php
                        		$y = 1;
                        		$x = 0;
                        		while(isset($_SESSION['Books']['Step'.$y]))
                        		{
                        			while(!isset($_SESSION['Books']['Step'.$y]['step_img'.$x]))
									{
										
										$x++;
										if(!empty($_SESSION['Books']['Step'.$y]['step_img'.$x]))
										{
											
											$url = $_SESSION['Books']['Step'.$y]['step_img'.$x];

										}
										else
										{
											$url = 'public/img/preview.jpg';
										}
									}
					
	                        ?>
	                        	<li>
                                	<img src="<?php echo $url; ?>" alt="Preview image form empty">
									<a href="index.php?module=books&action=storyedit&info=<?php echo $y; ?>"></a>
								</li>
	                        <?php
	                        		$y++;
	               
                        		}
                        	?>
                            <li>
                                <img src="public/img/preview.jpg" alt="Preview image form empty">
                                <a href="index.php?module=books&action=story">+</a>
                            </li>
                        </ul>
                    </div>
                    <div id="map" class="tab-content">
                    </div>
                </div>
                <button class="save-journal" onClick="location.href='index.php?module=books&action=books_insert'">Save your books</button>
            </div>
        </div>
        <!-- END CONTENT -->

        <!-- FOOTER -->
        <?php include('../app/includes/footer.inc.php') ?>
        <!-- END FOOTER -->

        <!-- SCRIPTS -->
        <?php include('../app/includes/blockScript.php') ?>
        <script src="public/js/script-cover.js"></script>
        <!-- END SCRIPTS -->
    </body>
</html>