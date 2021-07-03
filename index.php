
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Games</title>

</head>

<body>

<?php

session_start();


if(isset($_SESSION['id']))
{
    include_once 'headerlogout.php';
}
else{
    include_once 'header.php';
}


?>
<div id="listgames">

    <ul id="list">
        <li><button onclick="location.href='tiktak.php'"> Play Tic Tak Toe</button> </li>
        <li><button onclick="location.href='mario.php'"> Play Super Mario</button> </li>
        <li><button onclick="location.href='quiz.php'"> Play A Quiz</button> </li>
    </ul>

</div>



</body>
</html>

