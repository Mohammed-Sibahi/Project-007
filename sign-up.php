<?php

include_once 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" action="includes/sign-up.inc.php" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Full Name"/>
                            </div>

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="uid" id="username" placeholder="Your User Name"/>
                            </div>

                            
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pwd" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="pwdrepeat" id="re_pass" placeholder="Repeat Your Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signup" class="form-submit" value="Sign up"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="sign-in.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
<?php

if (isset($_GET["error"])) {

if ($_GET["error"] == "emptyinput") {
    echo "<p>Fill in all the fields!</p>";
}

else if ($_GET["error"] == "invalidUid") {
    echo "<p>Choose a proper user name!</p>";
}

else if ($_GET["error"] == "invalidemail") {
    echo "<p>Choose a proper Email!</p>";
}

else if ($_GET["error"] == "passwordsdonotmatch") {
    echo "<p>Passowrds do not match!</p>";
}

else if ($_GET["error"] == "stmtfailed") {
    echo "<p>Something went wrong! Try again, please.</p>";
}

else if ($_GET["error"] == "usernametaken") {
    echo "<p>User name already taken!</p>";
}


else if ($_GET["error"] == "none") {
    echo "<p>You have signed up!</p>";
}

}

?>

        </section>

    </div>
    
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

<?php

include_once 'footer.php';

?>