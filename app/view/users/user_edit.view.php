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
            <div class="user-profil">
                <form class="grid" action="?module=users&action=edit" method="post" enctype="multipart/form-data">
                    <!--<label for="picture">Profil picture</label>
                    <input type="file" id="picture" name="picture">-->
                    <div class="column-half">
                        <div class="form-div">
                            <input type="text" id="firstname" placeholder="Firstname" name="firstname" value="<?php $retVal = (isset($data->USE_FIRSTNAME)) ? $data->USE_FIRSTNAME : ""; echo($retVal); ?>">
                            <label for="firstname">Firstname</label>
                        </div>
                        <div class="form-div">
                            <input type="text" id="lastname" placeholder="Lastname" name="lastname" value="<?php $retVal = (isset($data->USE_LASTNAME)) ? $data->USE_LASTNAME : ""; echo($retVal); ?>">
                            <label for="lastname">Lastname</label>
                        </div>
                        <div class="form-div">
                            <input type="date" id="dateofbirth" name="dateofbirth" value="<?php $retVal = (isset($data->USE_BIRTHDAY)) ? $data->USE_BIRTHDAY : ""; echo($retVal); ?>">
                            <label for="dateofbirth">Date of birth</label>
                        </div>
                    </div>
                    <div class="column-half">
                        <div class="form-div">
                            <input type="text" id="country" placeholder="Country" name="country" value="<?php $retVal = (isset($data->USE_COUNTRY)) ? $data->USE_COUNTRY : ""; echo($retVal); ?>">
                            <label for="country">Country</label>
                        </div>
                        <div class="form-div select">
                            <label for="level">What type of traveler are you?</label>
                            <select name="level" id="level">
                                <option>Select a level</option>
                                <option value="Novice">Novice</option>
                                <option value="Beginner">Beginner</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Expert">Expert</option>
                            </select>
                        </div>
                        <div class="form-div">
                            <textarea name="descr" id="descr" placeholder="Write a description of yourself"><?php $retVal = (isset($data->USE_DESCR)) ? $data->USE_DESCR : ""; echo(trim($retVal)); ?></textarea>
                            <label for="descr">Descritption of yourself</label>
                        </div>
                    </div>
                    <input type="hidden" value="<?php $retVal = (isset($data->USE_ID)) ? $data->USE_ID : ""; echo($retVal); ?>" name="id">
                    <input type="hidden" name="type" value="edit_user">
                    <input type="submit" value="save">
                </form>
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