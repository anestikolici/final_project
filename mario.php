<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Super Mario</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<?php

session_start();

$_SESSION['game']="mario";

if(isset($_SESSION['id']))
{
    include_once 'headerlogout.php';
}
else{
    include_once 'header.php';
}


?>

<body>
<br><label style="margin-left: 20%"></label>

<script src="https://kaboomjs.com/lib/0.5.1/kaboom.js" charset="utf-8"></script>
<script src="games/mario.js" charset="utf-8"></script>


<?php

include_once 'showComments.php';

if(isset($_SESSION['id']))
{
    include_once 'insertcomment.php';
}

?>

</body>
</html>

