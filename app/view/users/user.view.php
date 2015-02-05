<!DOCTYPE html>
<html lang="en">
    <?php
        $title = "My Account";
        include('../app/includes/head.inc.php')
    ?>
    <body>

        <!-- HEADER -->
        <?php include('../app/includes/header.inc.php') ?>
        <!-- END HEADER -->

        <!-- SUB NAV -->
        <?php include('../app/includes/nav.inc.php') ?>
        <!-- END SUB NAV -->

        <!-- CONTENT -->
        <div class="user-container">
            <div class="user-profil grid">
                <div class="column-half">
                    <div class="user-picture">
                        <img src='<?php $retVal = (isset($data->USE_PICTURE)) ? $data->USE_PICTURE : "public/img/preview.jpg"; echo($retVal); ?>' alt="User picture"/>
                    </div>
                    <ul class="user-infos">
                        <li>
                            <h1><?php $retVal = (isset($data->USE_FIRSTNAME)) ? $data->USE_FIRSTNAME : "FirstName"; echo($retVal); ?> 
                            <?php $retVal = (isset($data->USE_LASTNAME)) ? $data->USE_LASTNAME : "LastName"; echo($retVal); ?></h1>
                        </li>
                        <li>Age : <?php $retVal = (isset($data->USE_BIRTHDAY)) ? $data->USE_BIRTHDAY : "N/A"; echo($retVal); ?></li>
                        <li>Live in : <?php $retVal = (isset($data->USE_COUNTRY)) ? $data->USE_COUNTRY : "N/A"; echo($retVal); ?></li>
                        <li>Travelers : <?php $retVal = (isset($data->USE_LVL)) ? $data->USE_LVL : "N/A"; echo($retVal); ?></li>
                    </ul>
                </diV>
                <div class="column-half">
                    <h2>About me</h2>
                    <p><?php $retVal = (isset($data->USE_DESCR)) ? $data->USE_DESCR : "N/A"; echo($retVal); ?></p>
                    <?php if (isset($_SESSION['User'])) { if ($data->USE_ID == $_SESSION['User']->USE_ID){?>
                    <a href="?module=users&action=edit">Edit profil</a>
                    <?php } } ?>
                </diV>
            </div>
            <div class="user-stats">
                <ul>
                    <li>
                        14
                        <span>Country visited</span>
                    </li>
                    <li>
                        <?php echo $count->nb_books ?>
                        <span>Travel journals</span>
                    </li>
                    <li>
                        <?php echo $count->nb_routes ?>
                        <span>Routes</span>
                    </li>
                </ul>
            </div>
            <div class="user-map">
            </div>
        </div>
        <!-- END CONTENT -->

        <!-- FOOTER -->
        <?php include('../app/includes/footer.inc.php') ?>
        <!-- END FOOTER -->

        <!-- SCRIPTS -->
        <?php include('../app/includes/blockScript.php') ?>
        <script type="text/javascript">
            $('.cover-nav li').removeClass('active');
            $('.cover-nav li:nth-child(2)').addClass('active');
        </script>
        <!-- END SCRIPTS -->

    </body>
</html>