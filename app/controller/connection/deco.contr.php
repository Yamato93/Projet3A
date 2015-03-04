<?php
include_once("../app/model/connection/signout.php");

sign_out();

header("location:index.php");
exit();