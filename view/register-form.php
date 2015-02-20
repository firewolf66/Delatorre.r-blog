<link rel="shortcut icon" href="http://studionumberone.com/images/2011/09/NIKE-SOCCER-520x394.jpg">
<?php
require_once(__DIR__ . "/../model/config.php");
?>

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

