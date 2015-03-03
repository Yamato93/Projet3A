<!DOCTYPE html>
<html lang="en">

    <?php
        $title = "Search page";
        include('../app/includes/head.inc.php')
    ?>

    <body>
        <!-- HEADER -->
        <?php include('../app/includes/header.inc.php') ?>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <div class="search-container">
            <div class="search-form">
                <form action="index.php?module=search&action=search" method="post" id="search">
                    <input name="search" type="text" placeholder="Search an other location" />
                    <button type="submit">GO</button>
                </form>
            </div>
            <div class="search-result">
                <?php
                    foreach ($data as $key => $value){
                ?>
                    <div class="search-journal grid grid-vertical">
                        <div class="journal-cover column-half" style="background-image:url(<?php echo $value->BOOKS_COVER;?>);">
                        </div>
                        <div class="journal-infos column-half">
                            <div class="grid grid-vertical">
                                <div class="column-half">
                                    <h1>
                                        <?php echo $value->BOOKS_TITLE ?>
                                    </h1>
                                    <p>
                                        <?php echo $value->BOOKS_DESCR ?>
                                    </p>
                                </div>
                                <div class="column-half">
                                    <a href="index.php?module=books&action=books&id=<?php echo $value->BOOKS_ID;?>">See this travel journal ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
        <!-- END CONTENT -->

        <!-- FOOTER -->
        <?php include('../app/includes/footer.inc.php') ?>
        <!-- END FOOTER -->

        <!-- SCRIPTS -->
        <?php include('../app/includes/blockScript.php') ?>
        <!-- END SCRIPTS -->

    </body>
</html>