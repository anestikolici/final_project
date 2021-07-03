<?php

function connect()
{
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "finalproject";

    return $connection = mysqli_connect($servername, $dbUsername, $dbPassword, $dbname);
}
