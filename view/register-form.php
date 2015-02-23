<link type="text/css" rel="stylesheet href" href="css/bootstrap-theme.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="custom-style.css">
<link rel="shortcut icon" href="http://studionumberone.com/images/2011/09/NIKE-SOCCER-520x394.jpg">
<?php
require_once(__DIR__ . "/../model/config.php");
?>
<ul class="nav nav-tabs">
    <li role="presentation" ><a href="index.php">Home</a></li>
    <li role="presentation" ><a href="login.php">Login</a></li>
    <li role="presentation" class="active"><a href="register.php">Register</a></li>     
</ul>

<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">

    <div>
        <label for="email">Email: </label>
        <input type="text" name="email" />    

    </div>

    <div>
        <label for="username">Username: </label>
        <input type="text" name="username" />
    </div>

    <div>
        <label for="password">Password: </label>
        <input type="password" name="password" />
    </div>

    <div>
        <button type="submit">Submit</button>
    </div>

</form>

