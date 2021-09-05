<?php include_once "header.php"; ?>

<?php

if (isset($_POST["login"])) {
    $firstname = $_POST["firstname"];
    $last_name = $_POST["lastname"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    $firstname = mysqli_real_escape_string($connection, $firstname);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "INSERT INTO users (firstname, lastname, phone_number, email, password, confirm_password) ";
    $query .= "VALUES ('$firstname', '$last_name', $phone_number, '$email', '$password', '$confirm_password')";

    $create_user = mysqli_query($connection, $query);

    if (!$create_user) {
        die("FAILED QUERY" . mysqli_error($connection));
    }

    header("Location: admin/home.php");
}

?>

<section class="container">
    <img src="./images/login-img.jpg" class="login-img" alt="technology image">

    <article class="login-section">
        <h2 class="title">Register</h2>
        <h4>Manage all your lottery efficiently</h4>
        <p class="text">Let's get you all set up you can verify your personal account and begin setting up your profile.
        </p>

        <!-- form -->
        <form action="includes/login.php" method="post" class="form">

            <div class="form-group">
                <div>
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname">
                </div>
                <div>
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname">
                </div>
            </div>

            <div class="form-group">
                <div>
                    <label for="phone">Phone Number</label>
                    <input type="number" name="phone_number">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email">
                </div>
            </div>

            <div class="form-group">
                <div>
                    <label for="user_password">Password</label>
                    <input type="password" name="password">
                </div>
                <div>
                    <label for="confirmPassword">Confirm Passord</label>
                    <input type="password" name="confirm_password">
                </div>
            </div>

            <button type="submit" name="login" class="btn">Create Account</button>
            <p class="login-p">Already have an account? <a href="includes/login.php" class="login-link">Log in</a> </p>

        </form>
        <!-- end of form -->
    </article>
</section>


</body>

</html>