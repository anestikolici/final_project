<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register</title>

</head>
<body>

<?php

include_once 'header.php';
?>



<div class="register_box">

    <form action ="registerForm.php" class="RegisterForm" method="post">
        <div class="form-group">
        <label>Username: </label>
        <input type="text" name="Username"/>

        <label>Password: </label>
        <input type="password" name="Password"/>
        </div>
        <br>
        <input type="submit" name="Register" class="button" value="Register"/>

        <div class="goToLogin">
            <input  class="button" type="button" value="Already have an account? Log In here" name="go to log in" onclick="location.href='loginForm.php'">
        </div>

    </form>

</div>


<?php

if(isset($_POST["Register"])) {

    $username = $_POST["Username"];
    $password = $_POST["Password"];


    include_once 'functions/connections.php';
    $connection=connect();

    require_once 'functions/functions.php';

    if (emptyInput($username, $password) !== false) {
        exit();
    }


    createUser($connection, $username, $password);


}
?>

</body>
</html>