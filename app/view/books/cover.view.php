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
            <ul class="cover-nav">
                <li>
                    <a href="#">
                        <span>
                            <img src="public/img/icons/house.svg" alt="Home page"/>
                        </span>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>
                            <img src="public/img/icons/user.svg" alt="Home page"/>
                        </span>
                        My account
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <span>
                            <img src="public/img/icons/journal.svg" alt="Home page"/>
                        </span>
                        Travel journal
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>
                            <img src="public/img/icons/pin.svg" alt="Home page"/>
                        </span>
                        My routes
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>
                            <img src="public/img/icons/star.svg" alt="Home page"/>
                        </span>
                        Best journals
                    </a>
                </li>
            </ul>
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
                    <div class="column-half">
                        <img src="public/img/preview.jpg" id="cover-preview" alt="Preview image form empty">
                        <span class="input-file">
                            <input type="file" name="cover_img" id="cover"/>
                        </span>
                    </diV>
                    <div class="column-half">
                        <div class="form-div">
                            <input type="text" name="cover_title" placeholder="Title"/>
                            <label>Title</label>
                        </div>
                        <div class="form-div">
                            <textarea type="text" name="cover_descr" placeholder="Description"></textarea>
                            <label>Description</label>
                        </div>
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