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
                        <img src="public/img/leymarie.jpeg" alt="User picture"/>
                    </div>
                    <ul class="user-infos">
                        <li>
                            <h1>Patrice Leymarie</h1>
                        </li>
                        <li>Age : 24</li>
                        <li>Live in : France</li>
                        <li>Travelers : Expert</li>
                    </ul>
                </diV>
                <div class="column-half">
                    <h2>About me</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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