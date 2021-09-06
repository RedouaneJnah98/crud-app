<?php include "database.php"; ?>

<?php
if (isset($_POST["login"])) {
    $firstname = $_POST["firstname"];
    $password = $_POST["password"];

    $firstname = mysqli_real_escape_string($connection, $firstname);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM users";
    $select_users = mysqli_query($connection, $query);


    while ($row = mysqli_fetch_array($select_users)) {
        $first_name = $row["firstname"];
        $pwd = $row["password"];

        if ($first_name === $firstname && $pwd === $password) {
            $_SESSION["firstname"] = $first_name;
            $_SESSION["password"] = $pwd;

            header("Location: ../admin/home.php");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Document</title>
</head>

<body>
    <section class="container">
        <img src="../images/login-img2.jpg" class="login-img" alt="login-img">

        <article class="login-section">
            <h2 class="title">Login</h2>
            <h4>Login to your account</h4>
            <p class="text">Thank you for get back to us, let's access our the best recommendation for you.</p>

            <!-- form -->
            <form action="" method="post" class="form-login">
                <div class="input-container">
                    <label for="username">Username</label>
                    <input type="text" name="firstname" placeholder="Your Firstname">
                </div>
                <div class="input-container">
                    <label for="password">Pasword</label>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="checkbox-container">
                    <div>
                        <input type="checkbox" name="remember" id="remember-me">
                        <label for="remember-me">Remember me</label>
                    </div>
                    <a href="#">Reset Password?</a>
                </div>
                <input type="submit" name="login" class="signin-btn" value="Sign In">

                <p class="login-p p-link">Don't have an account yet? <a href="../index.php" class="link">Join Us</a></p>
            </form>
            <!-- end of form -->
        </article>
    </section>
</body>

</html>