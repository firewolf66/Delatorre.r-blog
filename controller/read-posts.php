<link type="text/css" rel="stylesheet" href="controller/post.css">
<?php

require_once(__DIR__ . "/../model/config.php");

$query = "SELECT * FROM posts";
$result = $_SESSION["connection"]->query($query);

if ($result) {

    while ($row = mysqli_fetch_array($result)) {

        echo "<div class='post'>";
        echo "<h1>" . $row['title'] . "</h1>";
        echo "<br />";
        echo "<h2 >" . $row['post'] . "</h2>";
        echo "<br/>";
        echo "</div>";
    }
}