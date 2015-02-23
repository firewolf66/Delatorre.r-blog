<?php
require_once(__DIR__ . "/../model/config.php");
require_once (__DIR__ . "/../controller/login-verify.php");

if (!authenticateUser()) {
    header("Location: " . $path . "index.php");
    die();
}
?>

<nav>
    <ul class="nav nav-pills">
        <li><a type="button" class="btn btn-default navbar-btn" href="<?php echo $path . "post.php" ?>">Blog Post Form</a></li>
    </ul>
</nav>
