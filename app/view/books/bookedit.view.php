<!DOCTYPE html>

<html lang="en">
    <?php
        $title = "Edit your travel journal";
        include('../app/includes/head.inc.php')
    ?>
    <body>
        <!-- HEADER -->
        <?php include('../app/includes/header.inc.php') ?>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <div class="memorie-container">
			
            <?php include('../app/includes/nav.inc.php') ?>
			<?php foreach ($bookslist as $key => $value)
			{
			?>
            <div class="journal-container u-wrapper">
                <form class="grid" action="index.php?module=books&action=updatebookscover&bookid=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data">
                    <h1>Let's the journey begin</h1>
                    <h2 class="sub-title">Edit your travel journal to enrich your travel journal</h2>
                    <button class="save-journal edit" type="submit">Save your journal</button>
                    <div class="column-half cover-journal">
                        <div style="background-image:url(<?php echo $value->BOOKS_COVER;?>);">
                            <h2 class="cover-title">
                                <input type="text" name="cover_title" placeholder="Title" value="<?php echo $value->BOOKS_TITLE;?>"/>
                            </h2>
                            <span class="input-file">
                                Select an image for your cover
                                <input type="file" name="cover_img" id="cover"/>
                            </span>
                        </div>
                        <div>
                            <textarea placeholder="Your description" value="<?php echo $value->BOOKS_DESCR;?>" name="cover_descr" ><?php echo $value->BOOKS_DESCR;?></textarea>
                        </div>
                    </div>
                    <div class="column-half memorie">
                            <ul class="grid">
                                <?php
                                    foreach ($bookStep as $key => $value)
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
	                                                ?>
                                        <li class="column-half" style="background-image:url(<?php echo $url; ?>)">
                                            <a href="index.php?module=books&action=updatebookstory&bookid=<?php echo $_GET['id']; ?>&info=<?php echo $value->BOOKS_STEPS_ID; ?>"></a>
                                        </li>
                               <?php
	                                                }
	                                                  
                                            }
                                            
                                        }
                                        
                                        
                                    }   
                                ?>
                                <li class="column-half">
                                    <a href="index.php?module=books&action=bookseditstory&id=<?php echo $_GET['id']; ?>">+</a>
                                </li>
                            </ul>
                        </div>
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