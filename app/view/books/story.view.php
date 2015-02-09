<!DOCTYPE html>
<html lang="en">

    <?php
        $title = "Write a story";
        include('../app/includes/head.inc.php')
    ?>

    <body>
        <!-- HEADER -->
        <?php include('../app/includes/header.inc.php') ?>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <div class="story-container">

            <?php include('../app/includes/nav.inc.php') ?>

            <form action="index.php?module=books&action=story" class="grid" method="post" enctype="multipart/form-data">
                <div class="column-twothirds">
                    <div class="cover-journal" style="background-image:url(<?php echo $_SESSION['Books']['cover_upload'];?>)">
                        <div>
                            <div class="form-div">
                                <input type="date" name="start-date" placeholder="Date of arrival"/>
                                <label>Date of arrival</label>
                            </div>
                            <div class="form-div">
                                <input type="date" name="end-date"placeholder="Stop date"/>
                                <label>Stop date</label>
                            </div>
                        </div>
                    </div>
                    <div class="journal-container">
                        <h1>Tell us more about your journey</h1>
                        <h2>Write about a place you went and add some pictures to illustrate</h2>
                        <div class="grid grid-vertical">
                            <ul class="breadcrumb column-twothirds">
                                <li>
                                    <span></span> Cover
                                </li>
                                <li>
                                    <span></span> Memory
                                </li>
                                <li class="active">
                                    <span></span> Story
                                </li>
                            </ul>
                            <div class="column-third">
                                <input type="submit" value="Validate my memory"/>
                            </div>
                        </div>
                        <div class="form-div">
                            <textarea name="story" placeholder="Write your story"></textarea>
                            <label>Your story</label>
                        </div>
                    </div>
                </div>
                <div class="column-third gallery">
                    <h2>Gallery</h2>
                    <ul class="grid">
                        <li class="column-half">
                            <input type="file" name="story-img1" class="addFile"/>
                        </li>
                        <li class="column-half">
                            <input type="file" name="story-img2" class="addFile"/>
                        </li>
                        <li class="column-half">
                            <input type="file" name="story-img3" class="addFile"/>
                        </li>
                        <li class="column-half">
                            <input type="file" name="story-img4" class="addFile"/>
                        </li>
                        <li class="column-half">
                            <input type="file" name="story-img5" class="addFile"/>
                        </li>
                        <li class="column-half">
                            <input type="file" name="story-img6" class="addFile"/>
                        </li>
                        <li class="column-half">
                            <input type="file" name="story-img7" class="addFile"/>
                        </li>
                        <li class="column-half">
                            <input type="file" name="story-img8"class="addFile"/>
                        </li>
                    </ul> 
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