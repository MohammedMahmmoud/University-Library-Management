<?php

$servername="localhost";
$username="root";
$password="";
$databaseName="library";

$connection=new mysqli($servername,$username,$password,$databaseName);


$username=$_POST['username'];
$password=$_POST['password1'];
$email=$_POST['email'];
$role=$_POST['role'];

$mysql="INSERT INTO users(username,pass,email,role) VALUES('$username','$password','$email','$role')";

$sql="SELECT * FROM  users WHERE pass='$password' and email='$email'";

$result = $connection->query($sql);
$row=$result->fetch_assoc();



$info = array("username"=>$username, "password"=>$password, "email"=>$email,"role"=>$role,'id'=>$row['Id']);


if($connection->query($mysql) === TRUE){
    if($role=="admin"){
        session_start();
        $_SESSION['row'] = $info;
        //echo $info['id'];
        header("Location:admin.php");
        exit();
    }
    else{
        session_start();
        $_SESSION['row'] = $info;
        header("Location:student.php");
        exit();
    }
}

$connection->close();

?>