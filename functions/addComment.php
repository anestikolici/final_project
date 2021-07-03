<?php

if(isset($_POST['comment']))
{
    session_start();
    $comment=$_POST['comment'];

    include_once 'connections.php';
    $connection=connect();

    $userid=$_SESSION['id'];
    $game=$_SESSION['game'];
    $username=$_SESSION['username'];

    $sql = "INSERT INTO $username (userId, comment, username, game) 
        VALUES('$userid','$comment','$username','$game');";

    $result=mysqli_query($connection, $sql);

    header("location: ../index.php");
}


