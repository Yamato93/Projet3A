<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=no">
        <title>Discover it - Name of the travel journal</title>
        <meta name="description" content="Description of travel journal">
        <link rel="stylesheet" href="public/css/travel-journal.css">
    </head>
    <body>

        <!-- HEADER -->
        <?php include('../app/includes/header.inc.php') ?>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <div class="travel-container">
            <div class="travel-cover">
                <h1>Discovering vietnam</h1>
                <div class="travel-nav">
                    <a href="#journal">Go to journal</a>
                    <a href="#gallery">Go to gallery</a>
                </div>
            </div>
            <div id="journal" class="travel-journal u-wrapper">
                <div class="grid grid-vertical">
                    <div class="column-half">
                        <h2>Chau Doc</h2>
                        <p>
                            Chau Doc is a small city in the Mekong Delta close to the Vietnam-Cambodia border.  Due to its proximity to the border, the people of this region are  either Cham, Cambodian, or Vietnamese in ethnicity, and they all live together in harmony.  The Cham people who live in Chau Doc are descendents of the Muslim Cham people who were displaced from Central and South Vietnam during the war in the 18th century. This unique mix of cultures and religions gives this town a different kind of vibe.  The main draw to this town, besides the slower paced life, is the religious architecture.  A few kilometres outside of Chau Doc is Mount Sam, where they have many temples and pagodas, and around the area you will find many mosques as well. 
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
                    <div class="column-half">
                        <img src="public/img/country_image.jpg" alt="Memorie image"/>
                    </div>
                </div>
                <div class="grid grid-vertical inverse">
                    <div class="column-half">
                        <h2>Chau Doc</h2>
                        <p>
                            Chau Doc is a small city in the Mek.
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
                    <div class="column-half">
                        <img src="public/img/viet.jpg" alt="Memorie image"/>
                    </div>
                </div>
                <div class="grid grid-vertical">
                    <div class="column-half">
                        <h2>Chau Doc</h2>
                        <p>
                            Chau Doc is a small city in the Mekong Delta close to the Vietnam-Cambodia border.  Due to its proximity to the border, the people of this region are  either Cham, Cambodian, or Vietnamese in ethnicity, and they all live together in harmony.  The Cham people who live in Chau Doc are descendents of the Muslim Cham people who were displaced from Central and South Vietnam during the war in the 18th century. This unique mix of cultures and religions gives this town a different kind of vibe.  The main draw to this town, besides the slower paced life, is the religious architecture.  A few kilometres outside of Chau Doc is Mount Sam, where they have many temples and pagodas, and around the area you will find many mosques as well. 
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
                    <div class="column-half">
                        <img src="public/img/boat.jpg" alt="Memorie image"/>
                    </div>
                </div>
            </div>
            <div id="gallery" class="travel-gallery u-wrapper">
                <h2>Gallery</h2>
                <ul class="grid grid-vertical">
                    <li class="column-third">
                        <img src="public/img/diaries/bridge.jpg" alt="Name Picture"/>
                    </li>
                    <li class="column-third">
                        <img src="public/img/diaries/cascade.jpg" alt="Name Picture"/>
                    </li>
                    <li class="column-third">
                        <img src="public/img/diaries/lake.jpg" alt="Name Picture"/>
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
        <script src="public/js/modules/scrollModule.js" type="text/javascript"></script>
        <script src="public/js/pageScript/travel-journal.js" type="text/javascript"></script>
        <!-- END SCRIPTS -->
    </body>
</html>