<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Tik Tak Toe</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>


<?php

session_start();
$_SESSION['game']="tiktak";

if(isset($_SESSION['id']))
{
    include_once 'headerlogout.php';
}
else{
    include_once 'header.php';
}


?>
    <div id="tiktakText">
        <h2>Computer:<span id="computer"></span></h2>
        <h2>User:<span id="user"></span></h2>
        <h2>Result:<span id="result"></span></h2>
    </div>

    <div id="tiktakButtons">
        <button id="rock">Rock</button>
        <button id="paper">Paper</button>
        <button id="scissors">Scissors</button>
    </div>
    <br>
    <br>
    <br>
    <br>

    <script src="games/tiktak.js" charset="utf-8"></script>

<?php

include_once 'showComments.php';

if(isset($_SESSION['id']))
{
    include_once 'insertcomment.php';
}

?>
</body>
</html>

