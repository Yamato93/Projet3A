<!DOCTYPE html>
<html lang="en">

    <?php
        $title = "Edit your story";
        include('../app/includes/head.inc.php')
    ?>

    <body>
        <!-- HEADER -->
        <?php include('../app/includes/header.inc.php') ?>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <div class="story-container">

            <?php include('../app/includes/nav.inc.php') ?>

            <form action="<?php echo $actionurl; ?>" class="grid" method="post" enctype="multipart/form-data">
                <div class="column-twothirds">
                    <div class="cover-journal" style="background-image:url(<?php echo $_SESSION['Books']['cover_upload'];?>)">
                        <div>
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
                        </div>
                    </div>
                    <div class="journal-container">
                        <h1>Let's the journey begin</h1>
                        <input type="submit" value="Validate my memorie"/>
                        <div class="form-div">
                            <textarea name="story" placeholder="Write your story"><?php if(isset($_GET['info']) and isset($_GET['bookid']))
	{echo $stepinfo->BOOKS_STEPS_CONTENT; }?></textarea>
                            <label>Your story</label>
                        </div>
                    </div>
                </div>
                <div class="column-third gallery">
                    <h2>Gallery</h2>
                    <ul class="grid">
                        <?php
                        $i=1;
                        foreach ($stepimginfo as $key => $value)
                        {
                            $url = $value->STEPS_IMG;
                            ?>
                            <li class="column-half">
                                <img src="<?php echo $url; ?>" class="filePreview" alt="Preview image form empty">
                                <input type="file" name="story-img<?php echo $i; ?>" class="addFile"/>
                            </li>
                            <?php
                            $i++;
                        }
                        $i = count($stepimginfo);
                        while($i<8)
                        {
                            $url = 'public/img/preview.jpg';
                        ?>
                        <li class="column-half">
                            <img src="<?php echo $url; ?>" class="filePreview" alt="Preview image form empty">
                            <input type="file" name="story-img<?php echo $i; ?>" class="addFile"/>
                        </li>
                        <?php
                            $i++;
                        }
                        ?>
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