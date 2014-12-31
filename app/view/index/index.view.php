<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Discover it - Discover, Desire, Go</title>
        <meta name="description" content="Organize your travel from the others feedbacks.">
        <link rel="stylesheet" href="public/css/index.css">
    </head>
    <body>
        <div class="jumbotron">

            <!-- HEADER -->
            <?php include('../app/includes/header.inc.php') ?>
            <!-- END HEADER -->

            <div class="jumbotron-content">
                <h1 class="jumbotron-title">
                    Tell us about your trip
                </h1>
                <a href="index.php?module=books&action=cover">Start to write here</a>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="diaries">
            <div class="u-wrapper">
                <h2 class="diaries-title">Search adventures written by travellers like you</h2>
                <form action="landing.html">
                    <input type="text" placeholder="Costa rica" />
                    <button type="submit">GO</button>
                </form>
                <h3 class="diaries-title">Or discover our best trip books</h3>
                <ul class="grid">
                    <li class="column-third">
                        <div class="diary">
                            <div class="diary-preview">
                                <img src="public/img/diaries/vietnam.jpg" alt="In the discover of Vietnam" />
                                <div class="diary-more">
                                    <span class="diary-button">Discover this diary</span>
                                </div>
                            </div>
                            <div class="diary-meta">
                                <h3 class="diary-name">
                                    Discovering Vietnam
                                </h3>
                                <p class="diary-description">
                                    An incredible adventure that I recommend to all.
                                </p>
                                <span>Discover this diary > </span>
                            </div>
                            <a href="landing.html">Discover this diary</a>
                        </div>
                    </li>
                    <li class="column-third">
                        <div class="diary">
                            <div class="diary-preview">
                                <img src="public/img/diaries/russia.jpg" alt="In the discover of Vietnam" />
                                <div class="diary-more">
                                    <span class="diary-button">Discover this diary</span>
                                </div>
                            </div>
                            <div class="diary-meta">
                                <h3 class="diary-name">
                                    New trip in Russia
                                </h3>
                                <p class="diary-description">
                                    Wide open spaces to be discovered.
                                </p>
                                <span>Discover this diary > </span>
                            </div>
                            <a href="landing.html">Discover this diary</a>
                        </div>
                    </li>
                    <li class="column-third">
                        <div class="diary">
                            <div class="diary-preview">
                                <img src="public/img/diaries/cascade.jpg" alt="In the discover of Vietnam" />
                                <div class="diary-more">
                                    <span class="diary-button">Discover this diary</span>
                                </div>
                            </div>
                            <div class="diary-meta">
                                <h3 class="diary-name">
                                    Amazonian forest
                                </h3>
                                <p class="diary-description">
                                    An incredible circuit into the wild.
                                </p>
                                <span>Discover this diary > </span>
                            </div>
                            <a href="landing.html">Discover this diary</a>
                        </div>
                    </li>
                    <li class="column-third">
                        <div class="diary">
                            <div class="diary-preview">
                                <img src="public/img/diaries/lake.jpg" alt="In the discover of Vietnam" />
                                <div class="diary-more">
                                    <span class="diary-button">Discover this diary</span>
                                </div>
                            </div>
                            <div class="diary-meta">
                                <h3 class="diary-name">
                                    Canada book trip
                                </h3>
                                <p class="diary-description">
                                    Beautiful landscapes to discover.
                                </p>
                                <span>Discover this diary > </span>
                            </div>
                            <a href="landing.html">Discover this diary</a>
                        </div>
                    </li>
                    <li class="column-third">
                        <div class="diary">
                            <div class="diary-preview">
                                <img src="public/img/diaries/bridge.jpg" alt="In the discover of Vietnam" />
                                <div class="diary-more">
                                    <span class="diary-button">Discover this diary</span>
                                </div>
                            </div>
                            <div class="diary-meta">
                                
                                <h3 class="diary-name">
                                    2 weeks’ China trip
                                </h3>
                                <p class="diary-description">
                                    Walk through China’s landscapes!
                                </p>
                                <span>Discover this diary > </span>
                            </div>
                            <a href="landing.html">Discover this diary</a>
                        </div>
                    </li>
                    <li class="column-third">
                        <div class="diary">
                            <div class="diary-preview">
                                <img src="public/img/diaries/hills.jpg" alt="In the discover of Vietnam" />
                                <div class="diary-more">
                                    <span class="diary-button">Discover this diary</span>
                                </div>
                            </div>
                            <div class="diary-meta">
                                <h3 class="diary-name">
                                    Take an amazing road trip
                                </h3>
                                <p class="diary-description">
                                    Discover USA’s legendary roads.
                                </p>
                                <span>Discover this diary > </span>
                            </div>
                            <a href="landing.html">Discover this diary</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Begin MailChimp Signup Form -->
        <div id="mc_embed_signup">
            <form action="//discoverit.us9.list-manage.com/subscribe/post?u=0b7fdbd65e51dba7ab2f51fe3&amp;id=c1133545a7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <label for="mce-EMAIL">Travel a little more every week thanks to our newsletter</label>
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;">
                    <input type="text" name="b_0b7fdbd65e51dba7ab2f51fe3_c1133545a7" tabindex="-1" value="">
                </div>
                <div class="clear">
                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>
            </form>
        </div>
        <!--End mc_embed_signup-->

        <div class="description">
            <h2><span>How does it work</span></h2>
            <div class="u-wrapper">
                <ul class="grid">
                    <li class="column-third">
                        <div>
                            <img src="public/img/map.png" alt="Discovert it map">
                        </div>
                        <p>Create your itineraries</p>
                    </li>
                    <li class="column-third">
                        <div>
                            <img src="public/img/location.png" alt="Discovert it location">
                        </div>
                        <p>Check your best location</p>
                    </li>
                    <li class="column-third">
                        <div>
                            <img src="public/img/share.png" alt="Discovert it share">
                        </div>
                        <p>Share it with other</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="profesional">
            <div class="u-wrapper grid grid-vertical">
                <div class="column-half">
                    <img src="public/img/pro-map.png" alt="Profesional space">
                </div>
                <div class="column-half profesional-description">
                    <div>
                        <h4>Discover it allows me to share my restaurant worldwide</h4>
                        <a href="landing.html">Why not me ?</a>
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
        <!-- END SCRIPTS -->

    </body>
</html>