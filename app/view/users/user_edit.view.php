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
                        <img src='<?php $retVal = (isset($data->USE_PICTURE)) ? $data->USE_PICTURE : "public/img/preview.jpg"; echo($retVal); ?>' alt="User picture"/>
                    </div>
                    <form action="?module=users=" method="post" enctype="multipart/form-data">
                        <!--<label for="picture">Profil picture</label>
                        <input type="file" id="picture" name="picture">-->
                        <label for="firstname">Firstname</label>
                        <input type="text" id="firstname" name="firstname" value="<?php $retVal = (isset($data->USE_FIRSTNAME)) ? $data->USE_FIRSTNAME : ""; echo($retVal); ?>">
                        <label for="lastname">Lastname</label>
                        <input type="text" id="lastname" name="lastname" value="<?php $retVal = (isset($data->USE_LASTNAME)) ? $data->USE_LASTNAME : ""; echo($retVal); ?>">
                        <label for="dateofbirth">Date of birth</label>
                        <input type="date" id="dateofbirth" name="dateofbirth" value="<?php $retVal = (isset($data->USE_BIRTHDAY)) ? $data->USE_BIRTHDAY : ""; echo($retVal); ?>">
                        <label for="country">Country</label>
                        <input type="text" id="country" name="country" value="<?php $retVal = (isset($data->USE_COUNTRY)) ? $data->USE_COUNTRY : ""; echo($retVal); ?>">
                        <label for="level">What type of traveler are you?</label>
                        <input type="text" id="level" name="level" value="<?php $retVal = (isset($data->USE_LVL)) ? $data->USE_LVL : ""; echo($retVal); ?>">
                        <label for="level">Write a few lines about yourself ..</label>
                        <textarea name="" id="" rows="4" cols="8">
                            <?php $retVal = (isset($data->USE_DESCR)) ? $data->USE_DESCR : ""; echo($retVal); ?>
                        </textarea>
                    </form>
                </diV>
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