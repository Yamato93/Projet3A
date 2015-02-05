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

            <form action="<?php echo $actionurl; ?>" class="grid" method="post" enctype="multipart/form-data">
                <div class="column-twothirds journal-container">
                    <h1>Let's the journey begin</h1>
                    <ul class="breadcrumb">
                        <li>
                            <span></span> Start by your cover
                        </li>
                        <li>
                            <span></span> Create a memorie
                        </li>
                        <li class="active">
                            <span></span> Recount your story
                        </li>
                    </ul>
                   
                    <div class="form-div">
                        <textarea name="story" placeholder="Write your story"><?php if(isset($_GET['info']) and isset($_GET['bookid']))
	{echo $stepinfo->BOOKS_STEPS_CONTENT; }?></textarea>
                        <label>Your story</label>
                    </div>
                    <div class="list-item">
                        <ul>			   
							<?php
							$i=1;
							foreach ($stepimginfo as $key => $value)
							{
								$url = $value->STEPS_IMG;		
								
									?>	
									<li>
										<img src="<?php echo $url; ?>" class="filePreview" alt="Preview image form empty">
									</li>
									<?php
									$i++;
							}
							$i = count($stepimginfo);
							while($i<8)
							{
								$url = 'public/img/preview.jpg';
							?>
							<li>
								<img src="<?php echo $url; ?>" class="filePreview" alt="Preview image form empty">
								<input type="file" name="story-img<?php echo $i; ?>" class="addFile"/>
							</li>
							<?php
								$i++;
							}
							?>
							
                        </ul>
                    </div>
                    <input type="submit" value="Validate my memorie"/>
                </div>
                <div class="column-third">
                    <h2>Informations</h2>
                    <div>
                        <img src="<?php echo $bookslist[0]->BOOKS_COVER;?>" alt="Preview image"/>
                    </div>
                    <div class="form-div">
                        <input type="date" name="start-date" placeholder="Date of arrival" value="<?php if(isset($_GET['info']) and isset($_GET['bookid']))
	{echo $stepinfo->BOOKS_STEPS_START_DATE; }?>"/>
                        <label>Date of arrival</label>
                    </div>
                    <div class="form-div">
                        <input type="date" name="end-date"placeholder="Stop date" value="<?php if(isset($_GET['info']) and isset($_GET['bookid']))
	{ echo $stepinfo->BOOKS_STEPS_END_DATE; }?>"/>
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
        <script src="public/js/modules/imageModule.js"></script>
        <script src="public/js/story-script.js"></script>
        <!-- END SCRIPTS -->
    </body>
</html>