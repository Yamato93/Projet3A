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

            <form action="index.php?module=books&action=story" class="grid" method="post" enctype="multipart/form-data">
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
                    <?php display_notification(); ?>
                    <div class="form-div">
                        <textarea name="story" placeholder="Write your story"></textarea>
                        <label>Your story</label>
                    </div>
                    <div class="list-item">
                        <ul>
                            <li>
                                <img src="public/img/preview.jpg" class="filePreview" alt="Preview image form empty">
                                <input type="file" name="story-img1" class="addFile"/>
                            </li>				   
                            <li>				   
                                <img src="public/img/preview.jpg" class="filePreview" alt="Preview image form empty">
                                <input type="file" name="story-img2" class="addFile"/>
                            </li>				   
                            <li>				   
                                <img src="public/img/preview.jpg" class="filePreview" alt="Preview image form empty">
                                <input type="file" name="story-img3" class="addFile"/>
                            </li>				   
                            <li>				   
                                <img src="public/img/preview.jpg" class="filePreview" alt="Preview image form empty">
                                <input type="file" name="story-img4" class="addFile"/>
                            </li>				   
                            <li>				   
                                <img src="public/img/preview.jpg" class="filePreview" alt="Preview image form empty">
                                <input type="file" name="story-img5" class="addFile"/>
                            </li>				   
                            <li>				   
                                <img src="public/img/preview.jpg" class="filePreview" alt="Preview image form empty">
                                <input type="file" name="story-img6" class="addFile"/>
                            </li>				   
                            <li>				   
                                <img src="public/img/preview.jpg" class="filePreview" alt="Preview image form empty">
                                <input type="file" name="story-img7" class="addFile"/>
                            </li>				   
                            <li>
                                <img src="public/img/preview.jpg" class="filePreview" alt="Preview image form empty">
                                <input type="file" name="story-img8"class="addFile"/>
                            </li>
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
                        <input type="date" name="start-date" placeholder="Date of arrival"/>
                        <label>Date of arrival</label>
                    </div>
                    <div class="form-div">
                        <input type="date" name="end-date"placeholder="Stop date"/>
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