<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Discover it - Write a story</title>
        <meta name="description" content="Organize your travel from the others feedbacks.">
        <link rel="stylesheet" href="public/css/story.css">
    </head>
    <body>
        <!-- HEADER -->
        <?php include('../app/includes/header.inc.php') ?>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <div class="cover-container">

            <?php include('../app/includes/nav.inc.php') ?>

            <form action="index.php?module=books&action=storyedit&editinfo=<?php echo $id; ?>" class="grid" method="post" enctype="multipart/form-data">
                <div class="column-twothirds journal-container">
                    <h1>Let's the journey begin</h1>
                    <ul class="breadcrumb">
                        <li>
                            <span>1</span> Start by your cover
                        </li>
                        <li>
                            <span>2</span> Create a memorie
                        </li>
                        <li class="active">
                            <span>3</span> Recount your story
                        </li>
                    </ul>
                    <?php display_notification(); ?>
                    <div class="form-div">
                        <textarea name="story" placeholder="Write your story" value="<?php echo $infostory['content'] ?>"><?php echo $infostory['content'] ?></textarea>
                        <label>Your story</label>
                    </div>
                    <div class="list-item">
                        <ul>
                        	<?php 
                        		for ($i = 1; $i <= 8; $i++) 
                        		{
                        			if(!isset($infostory['step_img'.$i]))
                        			{
	                        			$url = 'public/img/preview.jpg';
                        			}
                        			else
                        			{
	                        			$url = $infostory['step_img'.$i];
                        			}
							?>
                        			<li>
			                        	<img src="<?php echo $url; ?>" class="filePreview" alt="Preview image form empty">
			                            <input type="file" name="story-img<?php echo $i; ?>" class="addFile"/>
			                        </li>		
                        	<?php
                        		}
                        	?>
						</ul>
                    </div>
                    <input type="submit" value="Validate my memorie"/>
                </div>
                <div class="column-third">
                    <h2>Informations</h2>
                    <div>
                        <img src="<?php echo $_SESSION['Books']['cover_upload'];?>" alt="Preview image"/>
                    </div>
                    <div class="form-div">
                        <input type="text" name="start-date" placeholder="Date of arrival" value="<?php echo $infostory['start-date'] ?>"/>
                        <label>Date of arrival</label>
                    </div>
                    <div class="form-div">
                        <input type="text" name="end-date"placeholder="Stop date" value="<?php echo $infostory['end-date'] ?>"/>
                        <label>Stop date</label>
                    </div>
                    <div class="googleMap"></div>
                </div>
            </form>
        </div>
        <!-- END CONTENT -->

        <!-- FOOTER -->
        <?php include('../app/includes/footer.inc.php') ?>
        <!-- END FOOTER -->

        <!-- SCRIPTS -->
        <?php include('../app/includes/blockScript.php') ?>
        <script src="public/js/story-script.js"></script>
        <!-- END SCRIPTS -->
    </body>
</html>