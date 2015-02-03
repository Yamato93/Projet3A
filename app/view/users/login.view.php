<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=no">
        <title>Discover it - Discover, Desire, Go</title>
        <meta name="description" content="Organize your travel from the others feedbacks.">
        <link rel="stylesheet" href="public/css/login.css">
    </head>
    <body>

        <!-- HEADER -->
        <?php include('../app/includes/header.inc.php') ?>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <div class="connexion-container">
            <div class="connexion-content tab-container">
                <ul>
                    <li>
                        <a href="#login" <?php if(isset($fb_id)){ echo ''; }else{ echo 'class="active"';} ?>>Log in</a>
                    </li>
                    <li>
                        <a href="#register" <?php if(isset($fb_id)){ echo 'class="active"'; } ?>>Register</a>
                    </li>
                </ul>
                <div class="connexion-form">
                    <div class="form-container">
                        <?php display_notification(); ?>
                        <form id="login" method="post" action="" class="tab-content <?php if(isset($fb_id)){ echo ''; }else{ echo 'active';} ?>">
                            <div class="form-div">
                                <input type="email" name="mail" placeholder="Email" required/>
                                <label>Email</label>
                            </div>
                            <div class="form-div">
                                <input type="password" name="password" placeholder="Password" required/>
                                <label>Password</label>
                            </div>
                            <input type="hidden" name="type" value="login">
                            <input type="submit" value="Go"/>
                        </form>
                        <form id="register" method="post" action="" class="tab-content <?php if(isset($fb_id)){ echo 'active'; }else{ echo '';} ?>">
                            <div class="form-div">
                                <input type="email" name="mail" placeholder="Email" <?php if (isset($email)){echo 'value="'.$email.'"' ;} ?> required/>
                                <label>Email</label>
                            </div>
                            <div class="form-div">
                                <input type="password" name="password" placeholder="Password" required/>
                                <label>Password</label>
                            </div>
                            <div class="form-div">
                                <input type="password" name="passwordconfirm" placeholder="Confirm password" required/>
                                <label>Confirm the password</label>
                            </div>
                            <input type="hidden" name="type" value="register">
                            <input type="hidden" name="fb_id" value="<?php if(isset($fb_id)){echo $fb_id ; } ?>">
                            <input type="submit" value="Go"/>
                        </form>
                    </div>
                    <div class="social-container">
                        <a href="<?php if(isset($url_fb)){ echo $url_fb; } else { echo 'landing.html' ; } ?>">Connexion avec Facebook</a>
                        <a href="landing.html">Connexion avec Google +</a>
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