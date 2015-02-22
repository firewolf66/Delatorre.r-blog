<link rel="shortcut icon" href="http://4.kicksonfire.net/wp-content/uploads/2014/09/Nike-Britain.jpg">
        

<link type="text/css" rel="stylesheet href" href="css/bootstrap-theme.css">
<!-- these are the regular links to things like bootstrap and css pages -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="custom-style.css">

   <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="index.php">Home</a></li>
        <li role="presentation" ><a href="login.php">Login</a></li>
        <li role="presentation" ><a href="register.php">Register</a></li>
        <li role="presentation" ><a href="controller/logout-user.php">Logout</a></li>
    </ul>


<div class="container"><!-- the container class is to make the jumbotron a different shape -->
<div class="jumbotron">
  
      <h1>Haterz make me famouz</h1>
     
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