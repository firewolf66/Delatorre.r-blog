<?php
require_once(__DIR__ . "/../model/config.php");
require_once (__DIR__ . "/../controller/login-verify.php");

if (!authenticateUser()) {
    header("Location: " . $path . "index.php");
    die();
}
?>
<nav>

    <li>< href="<?php echo $path . "post.php" ?>">Blog Post Form</a></li>

</nav>
