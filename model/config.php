<?php

require_once(__DIR__ . "/database.php");

$path = "/Delatorre.r-blog/";

$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";

$connection = new Database($host, $username, $password, $database);

