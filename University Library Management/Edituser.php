<?php

$servername="localhost";
$username="root";
$password="";
$databaseName="library";

$connection=new mysqli($servername,$username,$password,$databaseName);

session_start();
$info = $_SESSION['row'];
$id=$info['id'];
$username=$_POST['username'];
//$password=$_POST['password'];
$email=$_POST['email'];

echo $id;
$mysql="UPDATE users SET username='$username' , email='$email' WHERE Id='$id'";

if (mysqli_query($connection, $mysql)) {
    echo "Record updated successfully";
    $info['username']="$username";
    $info['email']="$email";
    $_SESSION['row'] = $info;
} else {
    echo "can't update";
}

$curpass=$_POST['CurPass'];
$newPass=$_POST['newPass'];
$conpass=$_POST["conPass"];

if($curpass==$info['password'] && $newPass==$conpass)    
{
    $mysql="UPDATE users SET pass='$newPass' WHERE Id='$id'";

    if (mysqli_query($connection, $mysql)) {
    echo "Record updated successfully";
    $info['password']="$newPass";
    $_SESSION['row'] = $info;
    } 
    else {
    echo "can't update";
}
}
else
{
    if($curpass!=$info['password'])
        echo "<html><br>the password is not correct<br></html>";
    if($newPass!=$conpass)
        echo "both new passwords must be the same";
}
if($info['role']=="admin"){
    header("Location:admin.php");
}else{
    header("Location:student.php");
}
$connection->close();

  ?>
