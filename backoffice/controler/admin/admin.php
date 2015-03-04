<?php

include_once("../app/model/contact/select_comment.model.php");

$comments = show_comments($connect);

include_once("view/admin/admin.php");