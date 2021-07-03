
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
</head>
<body>

<?php

session_start();
$_SESSION['game']="quiz";


if(isset($_SESSION['id']))
{
    include_once 'headerlogout.php';
}
else{
    include_once 'header.php';
}


?>


<div id="quiz"></div>
<div id="score"></div>

<script src="games/quiz.js" charset="utf-8"></script>

<?php

include_once 'showComments.php';

if(isset($_SESSION['id']))
{
    include_once 'insertcomment.php';
}

?>

</body>
</html>