<link rel="shortcut icon" href="http://studionumberone.com/images/2011/09/NIKE-SOCCER-520x394.jpg">

<?php
require_once (__DIR__ . "/controller/login-verify.php");

require_once (__DIR__ . "/view/header.php");

if (authenticateUser()) {
    require_once(__DIR__ . "/view/navigation.php");
}

require_once (__DIR__ . "/controller/create-db.php");

require_once (__DIR__ . "/view/footer.php");

require_once (__DIR__ . "/controller/read-posts.php");
?>