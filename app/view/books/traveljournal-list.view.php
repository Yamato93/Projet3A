<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Discover it - Travel journal list</title>
        <meta name="description" content="Access to your full list of travel journals in on place">
        <link rel="stylesheet" href="public/css/traveljournal-list.css">
    </head>
    <body>
        <!-- HEADER -->
        <?php include('../app/includes/header.inc.php') ?>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <div class="cover-container">

            <?php include('../app/includes/nav.inc.php') ?>

            <div class="journal-list">
                <h1>
                    <span>
                        <img src="public/img/icons/journal-dark.svg" alt="Journal page"/>
                    </span>
                    Travel journals
                </h1>
                <ul class="grid">
                    <li class="column-third create">
                        <div>
                            <span>+</span>
                        </div>
                        <div>
                            <p>
                                Create a new travel journal
                            </p>
                        </div>
                    </li>
                    <li class="column-third create">
                        <div>
                            <span>+</span>
                        </div>
                        <div>
                            <p>
                                Create a new travel journal
                            </p>
                        </div>
                    </li>
                    <li class="column-third create">
                        <div>
                            <span>+</span>
                        </div>
                        <div>
                            <p>
                                Create a new travel journal
                            </p>
                        </div>
                    </li>
                </ul>
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