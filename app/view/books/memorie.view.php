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
                    <li>
                        <span>1</span> Start by your cover
                    </li>
                    <li class="active">
                        <span>2</span> Create a memorie
                    </li>
                    <li>
                        <span>3</span> Recount your story
                    </li>
                </ul>
                <div class="grid">
                    <div class="column-half" style="background-image:url(<?php echo $_SESSION['Books']['cover_img']['tmp_name'];?>)">
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
                            <li>
                                <img src="public/img/preview.jpg" alt="Preview image form empty">
                                <a href="index.php?module=books&action=story">+</a>
                            </li>
                        </ul>
                    </div>
                    <div id="map" class="tab-content">
                    </div>
                </div>
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