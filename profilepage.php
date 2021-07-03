
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

<?php

include_once 'headerlogout.php';
?>


<?php

include_once 'functions/connections.php';
$connection=connect();

session_start();


if(isset($_SESSION['id']))
{

    $id=$_SESSION['id'];

    $sqlImg="SELECT * FROM pfp WHERE usersId='$id'";
    $resultImg=mysqli_query($connection,$sqlImg);
    while($rowImg=mysqli_fetch_assoc($resultImg)){
        echo "<div class='alignBox'><div class='imageBox'>";
        echo "<div class='user-profile' id='profilePicture'> ";

        if($rowImg['status']==0){
            echo "<img src='images/profile".$id.".jpg' width='200' height='200'>";
        }
        else{
            echo "<img src='images/pfpdefault.jpg' width='200' height='200'>";
        }

        echo "</div>";
    }


    echo "<form class='updatePicture' action='functions/upload.php' method='post' enctype='multipart/form-data'>
            <input type='file' name='file'/>
            <button type='submit' name='submit'>Upload</button>
        </form>";
    echo "</div><br>";

    echo "<div class='updatePicture' ><form id='userData' action='functions/update.php' method='post' enctype='multipart/form-data'>
            <label>Username: </label>
            <input type='text' name='username' value='".$_SESSION['username']."'/><br>
            
            <button type='submit' name='submit'>Update</button>

        </form></div></div>";


}

?>


</body>
</html>
