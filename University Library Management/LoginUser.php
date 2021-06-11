<?php

$servername="localhost";
$username="root";
$password="";
$databaseName="library";

$connection=new mysqli($servername,$username,$password,$databaseName);

$password2=$_POST['password'];
$email=$_POST['email'];

$mysql="SELECT * FROM  users WHERE pass='$password2' and email='$email'";
$result = $connection->query($mysql);


if($row=$result->fetch_assoc()){
    $info = array("username"=>$row['username'], "password"=>$row['pass'], "email"=>$row['email'],"role"=>$row['role'],'id'=>$row['Id']);

    setcookie('userName',$email,time()+(3600*24),'/',);
    setcookie('password',$password2,time()+(3600*24),'/',);

    if($row['role']=="admin"){
        session_start();
        $_SESSION['row'] = $info;
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
else{
    echo"Failed";
}
$connection->close();

?>





