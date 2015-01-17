<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Discover it - Discover, Desire, Go</title>
        <meta name="description" content="Organize your travel from the others feedbacks.">
        <link rel="stylesheet" href="public/css/user.css">
    </head>
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
                        <img src='<?php $retVal = (isset($data->USE_PICTURE)) ? $data->USE_PICTURE : "public/img/leymarie.jpeg"; echo($retVal); ?>' alt="User picture"/>
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
                </diV>
            </div>
            <div class="user-stats">
                <ul>
                    <li>
                        14
                        <span>Country visited</span>
                    </li>
                    <li>
                        6
                        <span>Travel journals</span>
                    </li>
                    <li>
                        9
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