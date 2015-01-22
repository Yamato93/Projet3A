<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Discover it - Edit your travel journal</title>
        <meta name="description" content="Zdit your travel journal">
        <link rel="stylesheet" href="public/css/memorie.css">
    </head>
    <body>
        <!-- HEADER -->
        <?php include('../app/includes/header.inc.php') ?>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <div class="book-edit-container">

            <?php include('../app/includes/nav.inc.php') ?>

            <div class="journal-container u-wrapper">
                <form method='POST'>
                    <h1>Let's the journey begin</h1>
                    <div class="grid">
                        <div class="column-half" style="background-image:url(<?php /* echo $_SESSION['Books']['cover_upload'];*/?>);">
                            <h2 class="cover-title">
                                <input type="text" placeholder="Title"/>
                                <?php /*echo $_SESSION['Books']['cover_title'];*/?>
                            </h2>
                            <span class="input-file">
                                Select an image for your cover
                                <input type="file" name="cover_img" id="cover" required/>
                            </span>
                        </div>
                        <div class="column-half">
                            <textarea placeholder="Your description"><?php /* echo $_SESSION['Books']['cover_descr'];*/?></textarea>
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
                                <?php /*
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
                                        */
                                ?>
                                    <li>
                                        <img src="<?php /* echo $url; */?>" alt="Preview image form empty">
                                        <a href="index.php?module=books&action=storyedit&info=<?php /* echo $y; */?>"></a>
                                    </li>
                                <?php/*
                                        $y++;
                       
                                    }*/
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
        <script src="public/js/script-cover.js"></script>
        <!-- END SCRIPTS -->
    </body>
</html>