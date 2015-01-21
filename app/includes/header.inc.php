<div class="site-header">
    <div class="site-logo">
        <a href="index.php?module=index&action=index">
            <img src="public/img/logo.svg" alt="Discover It" />
        </a>
    </div>
    <nav class="header-nav">
    <?php
    	if(isset($_SESSION['User']))
    	{
    ?>		
    		 <a href="index.php?module=users&action=users" style='background-color:white;'>Hello, <?php echo $_SESSION['User']->USE_LASTNAME; ?></a>
	    	 <a href="index.php?module=users&action=logout">Log off</a>
	<?php
    	}
    	else
    	{
	?>
			<a href="index.php?module=users&action=login">Connexion</a>
			<a href="landing.html">Are you a pro ?</a>
	<?php
    	}
    ?>
       
        <a href="https://www.facebook.com/discover.fr" target="_blank"></a>
        <a href="https://twitter.com/DiscoverIt_fr" target="_blank"></a>
        <a href="https://plus.google.com/115867732065766652271" target="_blank"></a>
    </nav>
</div>