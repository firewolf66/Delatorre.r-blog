<!-- This links the websites like bootstrap or css to be compatible with my website'
     also themes.-->
<link type="text/css" rel="stylesheet href" href="css/bootstrap-theme.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="custom-style.css">
<link rel="shortcut icon" href="http://studionumberone.com/images/2011/09/NIKE-SOCCER-520x394.jpg">
<!-- This gives my website a title.-->
<title>Ramon-Blog</title>
<!-- This lets my nav tabs a name.-->
<ul class="nav nav-tabs">
    <li role="presentation" ><a href="index.php">Home</a></li>
    <li role="presentation" class="active"><a href="login.php">Login</a></li>
    <li role="presentation" ><a href="register.php">Register</a></li>

</ul>
<?php
require_once(__DIR__ . "/view/header.php");

require_once(__DIR__ . "/view/login-form.php");

require_once(__DIR__ . "/view/footer.php");
