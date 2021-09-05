<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "crud_app";

$connection = mysqli_connect($host, $user, $password, $db_name);
// $connection = mysqli_connect("localhost", "root", "", "crud_app");

if (!$connection) {
    echo "failed to connect to database";
}