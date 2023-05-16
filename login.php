<?php

require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Account.php"); 
require_once("includes/classes/Constants.php");

$account = new Account($con);

if (isset($_POST["submitButton"])) {
    
       
        $username = formSanitizer::sanitizeFormUsername($_POST["username"]);
        $password = formSanitizer::sanitizeFormPassword($_POST["password"]);

        $success = $account->login($username, $password);

        if($success) {
            $_SESSION["userLoggedIn"] = $username;
            header("Location: index.php"); 
        }
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
                <h3>Sign In</h3>
                <span>to continue watching Netflix</span >
            </div>

            <form method="POST">

                <?php echo $account->getError(Constants::$loginFailed); ?>
                <input type="text" name="username" placeholder="Username" required>

                <input type="password" name="password" placeholder="Password" required>

                <input type="submit" name="submitButton" value="Submit">

            </form>

            <a href="register.php" class="signInMessage">Need an account? Sign up now.</a>

        </div>

    </div>
</body>

</html>