<!DOCTYPE html>
<html lang="en">

    <?php
        $title = "Create a memorie";
        include('../app/includes/head.inc.php')
    ?>

    <body>
        <!-- HEADER -->
        <?php include('../app/includes/header.inc.php') ?>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <div class="memorie-container">

            <?php include('../app/includes/nav.inc.php') ?>

            <div class="journal-container u-wrapper">
                <div class="grid">
                    <h1>Let the journey continue</h1>
                    <h2 class="sub-title">Create a memory to enrich your travel journal</h2>
                    <ul class="breadcrumb column-twothirds">
                        <li>
                            <span></span> Cover
                        </li>
                        <li class="active">
                            <span></span> Memory
                        </li>
                        <li>
                            <span></span> Story
                        </li>
                    </ul>
                    <div class="column-third">
                        <button class="save-journal" onClick="location.href='index.php?module=books&action=insert_books'">Publish your journal</button>
                    </div>
                    <div class="column-half cover-journal">
                        <div style="background-image:url(<?php echo $_SESSION['Books']['cover_upload'];?>);">
                            <h2 class="cover-title"><?php echo $_SESSION['Books']['cover_title'];?></h2>
                        </div>
                        <div>
                            <p><?php echo $_SESSION['Books']['cover_descr'];?></p>
                        </div>
                    </div>
                    <div class="column-half memorie">
                        <ul class="grid">
                            <?php
                                $y = 1;
                                
                                while(isset($_SESSION['Books']['Step'.$y]))
                                {
                                    $x = 0;
                                    while(!isset($_SESSION['Books']['Step'.$y]['step_img'.$x]))
                                    {
                                        $x++;
                                        if(isset($_SESSION['Books']['Step'.$y]['step_img'.$x]))
                                        {
                                            
                                            $url = $_SESSION['Books']['Step'.$y]['step_img'.$x];
                            
                                        }
                                    }
                                    ?>
                                <li class="column-half" style="background-image:url(<?php echo $url; ?>);">
                                    <a href="index.php?module=books&action=storyedit&info=<?php echo $y; ?>"></a>
                                </li>
                            <?php
                                $y++;
                                }
                            ?>
                            <li class="column-half">
                                <a href="index.php?module=books&action=story">+</a>
                            </li>
                        </ul>
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
        <script src="public/js/pageScript/memory.js"></script>
        <!-- END SCRIPTS -->
    </body>
</html>