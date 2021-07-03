<?php
if(isset($_POST["submit"])){

    session_start();
    $id=$_SESSION['id'];

    $username=$_POST['username'];

    $oldusername = $_SESSION['username'];

    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "finalproject";

    $connection = mysqli_connect($servername, $dbUsername,$dbPassword,$dbname);


    $sql="UPDATE users SET username='$username' WHERE usersId = '$id'";
    $result=mysqli_query($connection, $sql);

    $sqlTableChange="ALTER TABLE $oldusername RENAME TO $username;";
    $resultTable=mysqli_query($connection, $sqlTableChange);


    $_SESSION['username']=$username;

    header("location: ../profilepage.php?success");

}
else{
    echo "error";
}