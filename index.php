<?php include_once "header.php"; ?>

<?php

if (isset($_POST["login"])) {
    echo $_POST["first_name"];
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
        <form action="" method="post" class="form">

            <div class="form-group">
                <div>
                    <label for="firstname">First Name</label>
                    <input type="text" name="first_name">
                </div>
                <div>
                    <label for="lastname">Last Name</label>
                    <input type="text" name="last_name">
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
                    <input type="password" name="user_password">
                </div>
                <div>
                    <label for="confirmPassword">Confirm Passord</label>
                    <input type="password" name="confirm_password">
                </div>
            </div>

            <button type="submit" name="login" class="btn">Create Account</button>
            <p class="login-p">Already have an account? <a href="#" class="login-link">Log in</a> </p>

        </form>
        <!-- end of form -->
    </article>
</section>


</body>

</html>