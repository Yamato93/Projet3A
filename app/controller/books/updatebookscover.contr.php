<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Discover it - Edit your travel journal</title>
        <meta name="description" content="Edit your travel journal">
        <link rel="stylesheet" href="public/css/memorie.css">
    </head>
    <body>
        <!-- HEADER -->
        <?php include('../app/includes/header.inc.php') ?>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <div class="book-edit-container">
			
            <?php include('../app/includes/nav.inc.php') ?>
			<?php foreach ($bookslist as $key => $value)
			{
			?>
            <div class="journal-container u-wrapper">
                <form method='POST'>
                    <h1>Let's the journey begin</h1>
                    <div class="grid">
                        <div class="column-half" style="background-image:url(<?php echo $value->BOOKS_COVER;?>);">
                            <h2 class="cover-title">
                                <input type="text" placeholder="Title" value="<?php echo $value->BOOKS_TITLE;?>"/>
                            </h2>
                            <span class="input-file">
                                Select an image for your cover
                                <input type="file" name="cover_img" id="cover" required/>
                            </span>
                        </div>
                        <div class="column-half">
                            <textarea placeholder="Your description"><?php echo $value->BOOKS_DESCR;?></textarea>
                        </div>
                    </div>
                    <div class="tab-container">
                        <ul>
                            <li>
                                <a href="#memories" class="active">Memories</a>
                            </li>
                            <li>
                                <a href="#map">Map</a>
                            </li>
                        </ul>
                        <div id="memories" class="tab-content active">
                        	<ul>
								<?php
									foreach ($booksstep as $key => $value)
								    {
								    	$passage = false;
										foreach ($booksstepimg as $keys => $values)
										{
										   //commandes
											if($passage == false)
											{
												if($value->BOOKS_STEPS_ID == $values->BOOKS_STEPS)
												{
												$passage = true;
												$url = $values->STEPS_IMG;
												}
											}
											
										}
										
										?>
		                                <li>
		                                    <img src="<?php echo $url; ?>" alt="Preview image form empty">
		                                    <a href="index.php?module=books&action=updatebookstory&bookid=<?php echo $_GET['id']; ?>&info=<?php echo $value->BOOKS_STEPS_ID; ?>"></a>
		                                </li>
                               <?php
                                    }   
                                ?>
                                <li>
                                    <img src="public/img/preview.jpg" alt="Preview image form empty">
                                    <a href="index.php?module=books&action=bookseditstory&id=<?php echo $_GET['id']; ?>">+</a>
                                </li>
                            </ul>
                        </div>
                        <div id="map" class="tab-content">
                        </div>
                    </div>
                    <button class="save-journal" onClick="location.href='index.php?module=books&action=updatebookscover'">Save your books</button>
                </form>
            </div>
            <?php 			
			}
			?>
        </div>
        <!-- END CONTENT -->

        <!-- FOOTER -->
        <?php include('../app/includes/footer.inc.php') ?>
        <!-- END FOOTER -->

        <!-- SCRIPTS -->
        <?php include('../app/includes/blockScript.php') ?>
        <script src="public/js/modules/imageModule.js"></script>
        <script src="public/js/script-cover.js"></script>
        <!-- END SCRIPTS -->
    </body>
</html>