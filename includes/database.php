<?php
$host = "localhost";
$user = "root";
$db_password = "";
$db_name = "login_app";

$connection = mysqli_connect($host, $user, $db_password, $db_name);

if (!$connection) {
    echo "failed to connect to database";
}