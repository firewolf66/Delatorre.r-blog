<!-- This makes a drawing show up in the top of the tab.-->
<link rel="shortcut icon" href="https://lh5.ggpht.com/wanKXi4CYO2my9zCOr5R4Jq_9UCLInMpfzFsQIKaw21MP8Fhlc-MT8_liPyS9dK9XWJS=w300">

<!-- This makes the links show up in the nav bar on the top of the blog.-->
<ul class="nav nav-tabs">
    <li role="presentation" class="active"><a href="index.php">Home</a></li>
    <li role="presentation" ><a href="login.php">Login</a></li>
    <li role="presentation" ><a href="register.php">Register</a></li>
    <li role="presentation" ><a href="controller/logout-user.php">Logout</a></li>
</ul>

<!-- This contains the jumbotron.-->
<div class="container"><!-- the container class is to make the jumbotron a different shape -->
    <div class="jumbotron">
        <!-- This makes a text show up on the jumbotron.-->
        <h1>"Haterz Make Me Famouz"</h1>

        <p>......</p> <!-- these periods are to make the jumbotron bigger so that it will show the whole nike sign-->

    </div>
</div>
</div>


<?php
require_once (__DIR__ . "/controller/login-verify.php");
//this is where all the files are kind of linked in a way to make index.php recieve information from other php files
require_once (__DIR__ . "/view/header.php");

if (authenticateUser()) {
    require_once(__DIR__ . "/view/navigation.php");
}

require_once (__DIR__ . "/controller/create-db.php");

require_once (__DIR__ . "/view/footer.php");

require_once (__DIR__ . "/controller/read-posts.php");
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>