<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

<div class="header">
    <a href="index.php" class="logo">CoolWebGames</a>
    <div class="header-right">
        <a class="active" href="index.php">Home</a>
        <a href="../final_project/loginForm.php">Log In</a>
        <?php

            if(isset($_SESSION['id']))
            {
                echo "<a href='profilepage.php'>Profile</a>";
            }
            else{


            }
        ?>

    </div>
</div>

</body>
</html>
