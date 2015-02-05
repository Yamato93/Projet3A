<!DOCTYPE html>
<html lang="en">

    <?php
        $title = "Edit my profile";
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
                    <form action="?module=users&action=edit" method="post" enctype="multipart/form-data">
                        <!--<label for="picture">Profil picture</label>
                        <input type="file" id="picture" name="picture">-->
                        <label for="firstname">Firstname</label>
                        <input type="text" id="firstname" name="firstname" value="<?php $retVal = (isset($data->USE_FIRSTNAME)) ? $data->USE_FIRSTNAME : ""; echo($retVal); ?>"><br/>
                        <label for="lastname">Lastname</label>
                        <input type="text" id="lastname" name="lastname" value="<?php $retVal = (isset($data->USE_LASTNAME)) ? $data->USE_LASTNAME : ""; echo($retVal); ?>"><br/>
                        <label for="dateofbirth">Date of birth</label>
                        <input type="date" id="dateofbirth" name="dateofbirth" value="<?php $retVal = (isset($data->USE_BIRTHDAY)) ? $data->USE_BIRTHDAY : ""; echo($retVal); ?>"><br/>
                        <label for="country">Country</label>
                        <input type="text" id="country" name="country" value="<?php $retVal = (isset($data->USE_COUNTRY)) ? $data->USE_COUNTRY : ""; echo($retVal); ?>"><br/>
                        <label for="level">What type of traveler are you?</label>
                        <input type="text" id="level" name="level" value="<?php $retVal = (isset($data->USE_LVL)) ? $data->USE_LVL : ""; echo($retVal); ?>"><br/>
                        <label for="level">Write a few lines about yourself ..</label>
                        <textarea name="descr" id="" rows="4" cols="20"><?php $retVal = (isset($data->USE_DESCR)) ? $data->USE_DESCR : ""; echo(trim($retVal)); ?></textarea><br/>
                        <input type="hidden" value="<?php $retVal = (isset($data->USE_ID)) ? $data->USE_ID : ""; echo($retVal); ?>" name="id">
                        <input type="hidden" name="type" value="edit_user">
                        <input type="submit" value="save">
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