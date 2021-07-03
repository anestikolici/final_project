<?php

include_once 'functions/connections.php';
$connection=connect();


$game=$_SESSION['game'];
if(isset($_SESSION['username']))
{
    $username=$_SESSION['username'];
}


$sql = "SELECT * FROM users;";

$result=mysqli_query($connection, $sql);
echo "<br><label class='commentTitle'>Comments:</label>";
while($row = mysqli_fetch_assoc($result))
{
    $usernameDB=$row['username'];

    $sql2 = "SELECT * FROM $usernameDB;";

    $result2=mysqli_query($connection, $sql2);

    while($row2 = mysqli_fetch_assoc($result2))
    {

        if($row2['game']==$game)
        {
            echo "<div class='showComment' >";
            echo "<tr>";

            echo "<td><label class='username'>".$row2['username'].":</label></td><br>";
            echo "<td><label class='comment'>".$row2['comment']."</label></td><br>";

            echo "</tr>";
            echo "</div><br>";

        }

    }

}



