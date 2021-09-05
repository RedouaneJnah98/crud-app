<?php
if (isset($_POST["login"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $password = $_POST["password"];

    $firstname = mysqli_real_escape_string($connection, $firstname);
    $lastname = mysqli_real_escape_string($connection, $lastname);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM users";
    $select_users = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($select_users)) {
        $first_name = $row["firstname"];
        $last_name = $row["lastname"];
        $pwd = $row["password"];

        if ($first_name === $firstname && $last_name === $lastname && $pwd === $password) {
            $_SESSION["firstname"] = $first_name;
            $_SESSION["lastname"] = $last_name;
            $_SESSION["password"] = $pwd;

            header("Location: ../admin/home.php");
        }
    }
}