<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Discover it - Create your cover</title>
        <meta name="description" content="Organize your travel from the others feedbacks.">
        <link rel="stylesheet" href="public/css/cover.css">
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
                    <li class="active">
                        <span></span> Start by your cover
                    </li>
                    <li>
                        <span></span> Create a memorie
                    </li>
                    <li>
                        <span></span> Recount your story
                    </li>
                </ul>
                <form action="index.php?module=books&action=cover" class="grid create-cover" method="post" enctype="multipart/form-data">
                    <?php display_notification(); ?>
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
                    <input type="submit" value="Continue the adventure"/>
                </form>
            </div>
        </div>
        <!-- END CONTENT -->

        <!-- FOOTER -->
        <?php include('../app/includes/footer.inc.php') ?>
        <!-- END FOOTER -->

        <!-- SCRIPTS -->
        <?php include('../app/includes/blockScript.php') ?>
        <script src="public/js/check-form.js"></script>
        <!-- END SCRIPTS -->
    </body>
</html>