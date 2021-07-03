<?php

function emptyInput($username,$password)
{
    $result=true;
    if(empty($username) || empty($password))
    {
        $result=true;
    }

    else{
        $result=false;
    }

    return $result;
}


function createUser($connection,$username, $password){

    $sql="INSERT INTO users (username, upassword) VALUES('$username', '$password');";

    $result=mysqli_query($connection, $sql);


    $sql = "SELECT username, upassword , usersId FROM users;";

    $result=mysqli_query($connection, $sql);

    while($row = mysqli_fetch_assoc($result))
    {
        $checkUs=$row["username"];
        $checkPass=$row["upassword"];
        $id=$row["usersId"];

        if($username==$checkUs && $password== $checkPass)
        {
            session_start();
            $_SESSION['id']=$id;
            $_SESSION['username']=$row['username'];


            $sqlPfp="INSERT INTO pfp(usersId,status) VALUES ('$id', 1)";
            mysqli_query($connection,$sqlPfp);

            $sqlComment="CREATE TABLE $username (
                              id int(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                              userId int(10) NOT NULL,
                              comment varchar(200) NOT NULL,
                              username varchar(50) NOT NULL,
                              game varchar(50) NOT NULL
                            )";
            mysqli_query($connection,$sqlComment);

            header("location: ../final_project/profilepage.php");

            exit();
        }

    }

    exit();

}

function loginUser($connection, $username, $password)
{


    $sql = "SELECT username, upassword , usersId FROM users;";

    $result=mysqli_query($connection, $sql);

    while($row = mysqli_fetch_assoc($result))
    {
        $checkUs=$row["username"];
        $checkPass=$row["upassword"];
        $id=$row["usersId"];

        if($username==$checkUs && $password== $checkPass)
        {
            session_start();
            $_SESSION['id']=$id;
            $_SESSION['username']=$row['username'];

            header("location: ../final_project/profilepage.php");

            exit();
        }

    }

    exit();



}