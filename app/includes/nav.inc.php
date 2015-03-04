<ul class="cover-nav">
    <li>
        <a href="index.php?module=index&action=index">
            <span>
                <img src="public/img/icons/house.svg" alt="Home page"/>
            </span>
            Home
        </a>
    </li>
    <li>
        <a href="index.php?module=users&action=users&id=<?php $retVal = (isset($_SESSION['User']->USE_ID)) ? $_SESSION['User']->USE_ID : ""; echo($retVal); ?>">
            <span>
                <img src="public/img/icons/user.svg" alt="User page"/>
            </span>
            My account
        </a>
    </li>
    <li class="active">
        <a href="index.php?module=books&action=bookslist">
            <span>
                <img src="public/img/icons/journal.svg" alt="Journal page"/>
            </span>
            Travel journals
        </a>
    </li>
    <li>
        <a href="landing.php">
            <span>
                <img src="public/img/icons/pin.svg" alt="Routes page"/>
            </span>
            My routes
        </a>
    </li>
    <li>
        <a href="landing.php">
            <span>
                <img src="public/img/icons/star.svg" alt="Best journals page"/>
            </span>
            Best journals
        </a>
    </li>
</ul>