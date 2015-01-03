<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Discover it - Write a story</title>
        <meta name="description" content="Organize your travel from the others feedbacks.">
        <link rel="stylesheet" href="public/css/story.css">
    </head>
    <body>
        <!-- HEADER -->
        <?php include('../app/includes/header.inc.php') ?>
        <!-- END HEADER -->

        <!-- CONTENT -->
        <div class="cover-container">
            <ul class="cover-nav">
                <li>
                    <a href="#">
                        <span>
                            <img src="public/img/icons/house.svg" alt="Home page"/>
                        </span>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>
                            <img src="public/img/icons/user.svg" alt="Home page"/>
                        </span>
                        My account
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <span>
                            <img src="public/img/icons/journal.svg" alt="Home page"/>
                        </span>
                        Travel journal
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>
                            <img src="public/img/icons/pin.svg" alt="Home page"/>
                        </span>
                        My routes
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>
                            <img src="public/img/icons/star.svg" alt="Home page"/>
                        </span>
                        Best journals
                    </a>
                </li>
            </ul>
            <form action="#" class="grid">
                <div class="column-twothirds journal-container">
                    <h1>Let's the journey begin</h1>
                    <ul class="breadcrumb">
                        <li>
                            <span>1</span> Start by your cover
                        </li>
                        <li>
                            <span>2</span> Create a memorie
                        </li>
                        <li class="active">
                            <span>3</span> Recount your story
                        </li>
                    </ul>
                    <div class="form-div">
                        <textarea placeholder="Write your story"></textarea>
                        <label>Your story</label>
                    </div>
                    <div class="list-item">
                        <ul>
                            <li>
                                <img src="public/img/preview.jpg" class="filePreview" alt="Preview image form empty">
                                <input type="file" class="addFile"/>
                            </li>
                            <li>
                                <img src="public/img/preview.jpg" class="filePreview" alt="Preview image form empty">
                                <input type="file" class="addFile"/>
                            </li>
                            <li>
                                <img src="public/img/preview.jpg" class="filePreview" alt="Preview image form empty">
                                <input type="file" class="addFile"/>
                            </li>
                            <li>
                                <img src="public/img/preview.jpg" class="filePreview" alt="Preview image form empty">
                                <input type="file" class="addFile"/>
                            </li>
                            <li>
                                <img src="public/img/preview.jpg" class="filePreview" alt="Preview image form empty">
                                <input type="file" class="addFile"/>
                            </li>
                            <li>
                                <img src="public/img/preview.jpg" class="filePreview" alt="Preview image form empty">
                                <input type="file" class="addFile"/>
                            </li>
                            <li>
                                <img src="public/img/preview.jpg" class="filePreview" alt="Preview image form empty">
                                <input type="file" class="addFile"/>
                            </li>
                            <li>
                                <img src="public/img/preview.jpg" class="filePreview" alt="Preview image form empty">
                                <input type="file" class="addFile"/>
                            </li>
                        </ul>
                    </div>
                    <input type="submit" value="Validate my memorie"/>
                </div>
                <div class="column-third">
                    <h2>Informations</h2>
                    <div>
                        <img src="public/img/preview.jpg" alt="Preview image"/>
                    </div>
                    <div class="form-div">
                        <input type="text" placeholder="Date of arrival"/>
                        <label>Date of arrival</label>
                    </div>
                    <div class="form-div">
                        <input type="text" placeholder="Stop date"/>
                        <label>Stop date</label>
                    </div>
                    <div class="googleMap"></div>
                </div>
            </form>
        </div>
        <!-- END CONTENT -->

        <!-- FOOTER -->
        <?php include('../app/includes/footer.inc.php') ?>
        <!-- END FOOTER -->

        <!-- SCRIPTS -->
        <?php include('../app/includes/blockScript.php') ?>
        <script src="public/js/story-script.js"></script>
        <!-- END SCRIPTS -->
    </body>
</html>