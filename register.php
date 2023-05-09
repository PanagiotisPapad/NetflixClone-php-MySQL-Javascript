<?php

require_once("includes/classes/FormSanitizer.php");
require_once("includes/config.php");

    if (isset($_POST["submitButton"])) {
    
        $firstName = formSanitizer::sanitizeFormString($_POST["firstName"]);
        $lastName = formSanitizer::sanitizeFormString($_POST["lastName"]);
        $username = formSanitizer::sanitizeFormUsername($_POST["username"]);
        $email = formSanitizer::sanitizeFormEmail($_POST["email"]);
        $email2 = formSanitizer::sanitizeFormEmail($_POST["email2"]);
        $password = formSanitizer::sanitizeFormPassword($_POST["password"]);
        $password2 = formSanitizer::sanitizeFormPassword($_POST["password2"]);

    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Welcome to Netflix</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
</head>

<body>
    <div class="signInContainer">

        <div class="column">

            <div class="header">
                <img src="assets/images/netflixlogo.png" title="Logo" alt="netflix logo">
                <h3>Sign Up</h3>
                <span>to continue to Netflix</span >
            </div>

            <form method="POST">

                <input type="text" name="firstName" placeholder="First name" required>

                <input type="text" name="lastName" placeholder="Last name" required>

                <input type="text" name="username" placeholder="Username" required>

                <input type="email" name="email" placeholder="Email" required>

                <input type="email" name="email2" placeholder="Confirm email" required>

                <input type="text" name="firstName" placeholder="First name" required>

                <input type="password" name="password" placeholder="Password" required>

                <input type="password" name="password2" placeholder="Confirm password" required>

                <input type="submit" name="submitButton" value="Submit">

            </form>

            <a href="login.php" class="signInMessage">Already have an account? Sign in here.</a>

        </div>

    </div>
</body>

</html>