<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Log In</title>

</head>

<body>

<?php

include_once 'header.php';
?>



<div class="login_box">

    <form action ="loginForm.php" class="LoginForm" method="post" enctype='multipart/form-data'>
        <div class="form-group">
            <label>Username: </label>
            <input type="text" name="Username"/>
        </div>
        <div class="form-group">
            <label>Password: </label>
            <input type="password" name="Password"/>
        </div>
        <br>
        <input type="submit" name="Login" class="button" value="Log In"/>
        <div class="goToRegister">
            <input  class="button" type="button" value="No account? Register Here" name="Go To Register" onclick="location.href='registerForm.php'"/>
        </div>

    </form>

    <?php
    if(isset($_POST["Login"])) {
        $username = $_POST["Username"];
        $password = $_POST["Password"];

        include_once 'functions/connections.php';
        $connection=connect();

        require_once 'functions/functions.php';

        if (emptyInput($username, $password) !== false) {
            exit();
        }

        loginUser($connection, $username, $password);

    }
    ?>

</div>


</body>
</html>