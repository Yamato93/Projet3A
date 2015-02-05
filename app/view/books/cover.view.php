<!DOCTYPE html>
<html lang="en">

    <?php
        $title = "Create your cover";
        include('../app/includes/head.inc.php')
    ?>

    <body>
        <!-- HEADER -->
        <?php include('../app/includes/header.inc.php') ?>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <div class="cover-container">

            <?php include('../app/includes/nav.inc.php') ?>

            <div class="journal-container u-wrapper">
                <h1>Let the journey begin</h1>
                <h2>Start your travel journal by creating a cover</h2>
                <form action="index.php?module=books&action=cover" class="grid create-cover" method="post" enctype="multipart/form-data">
                    <ul class="breadcrumb column-twothirds">
                        <li class="active">
                            <span></span> Cover
                        </li>
                        <li>
                            <span></span> Memory
                        </li>
                        <li>
                            <span></span> Story
                        </li>
                    </ul>
                    <div class="column-third">
                        <input type="submit" value="Continue the adventure"/>
                    </div>
                    <div class="column-half">
                        <div class="form-div">
                            <input type="text" name="cover_title" placeholder="Title" required/>
                            <label>Title</label>
                        </div>
                        <div class="form-div">
                            <textarea type="text" name="cover_descr" placeholder="Description" required></textarea>
                            <label>Description</label>
                        </div>
                    </diV>
                    <div class="column-half">
                        <span class="input-file">
                            Select an image for your cover
                            <input type="file" name="cover_img" id="cover" required/>
                        </span>
                        <img src="public/img/preview.jpg" id="cover-preview" alt="Preview image form empty">
                    </diV>
                </form>
            </div>
        </div>
        <!-- END CONTENT -->

        <!-- FOOTER -->
        <?php include('../app/includes/footer.inc.php') ?>
        <!-- END FOOTER -->

        <!-- SCRIPTS -->
        <?php include('../app/includes/blockScript.php') ?>
        <script src="public/js/modules/imageModule.js"></script>
        <script src="public/js/check-form.js"></script>
        <!-- END SCRIPTS -->
    </body>
</html>