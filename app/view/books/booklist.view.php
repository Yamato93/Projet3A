<!DOCTYPE html>
<html lang="en">

    <?php
        $title = "Travel journal list";
        include('../app/includes/head.inc.php')
    ?>

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
                        <a href="index.php?module=books&action=cover">
                            <div>
                                <p>+</p>
                            </div>
                            <div>
                                <p>
                                    Create a new travel journal
                                </p>
                            </div>
                        </a>
                    </li>
                    <?php
                    	foreach ($bookslist as $key => $value)
                    	{
                    	    //commandes
					?>
						<li class="column-third">
	                        <div>
	                            <img src="<?php echo $value->BOOKS_COVER;?>" alt="Russian travel book"/>
	                        </div>
	                        <div>
	                            <h2>
	                                <?php echo $value->BOOKS_TITLE;?>
	                            </h2>
	                            <p>
	                                "<?php echo substr($value->BOOKS_DESCR, 0, 50);?>"
	                            </p>
	                            <a href="index.php?module=books&action=books&id=<?php echo $value->BOOKS_ID;?>" class="more">Read more</a>
	                            <a href="index.php?module=books&action=bookedit&id=<?php echo $value->BOOKS_ID;?>">Edit</a>
	                        </div>
	                    </li>
					<?php
                    	}
                    ?>
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