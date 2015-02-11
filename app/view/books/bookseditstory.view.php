<!DOCTYPE html>
<html lang="en">
		<?php
		//from updatebookstory.contr.php
	        $title = "Edit your story";
	        include('../app/includes/head.inc.php')
	    ?>

        <body>

        <!-- HEADER -->
        <?php include('../app/includes/header.inc.php') ?>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <div class="story-container">

            <?php include('../app/includes/nav.inc.php') ?>

            <form action="<?php echo $actionurl; ?>" class="grid" method="post" enctype="multipart/form-data">
                <div class="column-twothirds">
                    <div class="cover-journal" style="background-image:url(<?php echo $bookslist[0]->BOOKS_COVER;?>)">
                        <div>
                            <div class="form-div">
                                <input type="date" name="start-date" placeholder="Date of arrival" value="<?php if(isset($_GET['info']) and isset($_GET['bookid']))
    {echo $stepinfo->BOOKS_STEPS_START_DATE; }?>"/>
                                <label>Date of arrival</label>
                            </div>
                            <div class="form-div">
                                <input type="date" name="end-date"placeholder="Stop date" value="<?php if(isset($_GET['info']) and isset($_GET['bookid']))
    { echo $stepinfo->BOOKS_STEPS_END_DATE; }?>"/>
                                <label>Stop date</label>
                            </div>
                        </div>
                    </div>
                    <div class="journal-container">
                        <h1>Let's the journey begin</h1>
                        <input type="submit" value="Validate my memorie"/>
                        <div class="form-div">
                            <textarea name="story" placeholder="Write your story"><?php if(isset($_GET['info']) and isset($_GET['bookid']))
	{echo $stepinfo->BOOKS_STEPS_CONTENT; }?></textarea>
                            <label>Your story</label>
                        </div>
                    </div>
                </div>
                <div class="column-third gallery">
                    <h2>Gallery</h2>
                    <ul class="grid">
                        <?php
                        $i=1;
                        if(isset($stepimginfo))
                        {
                        
	                        foreach ($stepimginfo as $key => $value)
	                        {
	                            $url = $value->STEPS_IMG;
	                            ?>
	                            <li class="column-half" style="background-image:url(<?php echo $url; ?>)">
	                                <input type="file" name="story-img<?php echo $i; ?>" class="addFile"/>
	                            </li>
	                            <?php
	                            $i++;
	                        }
							$i = count($stepimginfo);
                        }
                        while($i<9)
                        {
                        ?>
                        <li class="column-half">
                            <input type="file" name="story-img<?php echo $i; ?>" class="addFile"/>
                        </li>
                        <?php
                            $i++;
                        }
                        ?>
                    </ul>
                </div>
            </form>
        </div>
        <!-- END CONTENT -->

        <!-- FOOTER -->
        <?php include('../app/includes/footer.inc.php') ?>
        <!-- END FOOTER -->

        <!-- SCRIPTS -->
        <?php include('../app/includes/blockScript.php') ?>
        <script src="public/js/modules/imageModule.js"></script>
        <script src="public/js/story-script.js"></script>
        <!-- END SCRIPTS -->
    </body>
</html>