<!DOCTYPE html>
<html lang="en">

    <?php
        $title = $book[0]->BOOKS_TITLE;
        include('../app/includes/head.inc.php')
    ?>

    <body>
        <!-- HEADER -->
        <?php include('../app/includes/header.inc.php') ?>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <?php include('../app/includes/nav.inc.php') ?>
        <div class="travel-container">
            <div class="travel-cover" style="background-image:url(<?php echo $book[0]->BOOKS_COVER;?>);">
                <h1><?php echo $book[0]->BOOKS_TITLE;?></h1>

                <div class="travel-nav">
                    <a href="#journal">Go to journal</a>
                    <a href="#gallery">Go to gallery</a>
                </div>
            </div>
            <div id="journal" class="travel-journal u-wrapper">
                <h1>Journal</h1>
            <?php
            	$nb = 0;
            	foreach ($bookStep as $key => $value)
                {
	                $test = false;
	                foreach ($booksstepimgbook as $key2 => $value2)
					{
						if($test == true)
						{
							$test == false;
						}
						else
						{
							if($value->BOOKS_STEPS_ID == $value2->BOOKS_STEPS)
							{
								
								if(($nb%2)!=1)
			                	{
			?>
					            	<div class="grid grid-vertical">
					                    <div class="column-half">
					                      
					                        <p>
					                        	<?php echo $value->BOOKS_STEPS_CONTENT;?>
					                        </p>
					                        <div class="grid">
					                            <div class="column-half">
					                                <a href="#" class="travel-add">+ Add your business here</a>
					                            </div>
					                            <div class="column-half">
					                                <a href="#" class="travel-more">Read more</a>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="column-half" style="background-image:url(<?php echo $value2->STEPS_IMG; ?>);">
					                    </div>
					                </div>
					                
						<?php    	
								
			                	}  
			                	else
			                	{
						?>
						        	<div class="grid grid-vertical inverse">
					                    <div class="column-half">
					                        <p>
					                            <?php echo $value->BOOKS_STEPS_CONTENT;?>
					                        </p>
					                        <div class="grid">
					                            <div class="column-half">
					                                <a href="#" class="travel-add">+ Add your business here</a>
					                            </div>
					                            <div class="column-half">
					                                <a href="#" class="travel-more">Read more</a>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="column-half" style="background-image:url(<?php echo $value2->STEPS_IMG; ?>);">
					                    </div>
					                </div>
				        <?php
			                	} 
			                	$nb++;
						
								$test = true;
						 	}

						}
	                }
		                	
                }
            ?>
            </div>
            <div id="gallery" class="travel-gallery u-wrapper">
                <h2>Gallery</h2>
                <ul class="grid grid-vertical">
                	<?php
            		foreach ($booksstepimggalery as $key => $value)
					{
                	?>
                    <li class="column-third" style="background-image:url(<?php echo $value->STEPS_IMG; ?>);">
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
        <script src="public/js/modules/scrollModule.js" type="text/javascript"></script>
        <script src="public/js/pageScript/travel-journal.js" type="text/javascript"></script>
        <!-- END SCRIPTS -->
    </body>
</html>