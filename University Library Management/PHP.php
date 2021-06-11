<?php


$servername="localhost";
$username="root";
$password="";
$databaseName="library";

$connection=new mysqli($servername,$username,$password,$databaseName);

$password2=$_POST['password'];
$email=$_POST['email'];

$password2=mysql_real_escape_string($password2);
$email=mysql_real_escape_string($email);

$mysql="SELECT * FROM  users WHERE pass='$password2' and email='$email'";

//$mysql="SELECT * FROM  users WHERE pass='$password2' and email='$email'";


 //or die("failed in query".mysql_error());

 //$row['pass']=$mysql['pass'];
//$row=mysql_fetch_array($mysql);
if($mysql['pass']==$password2 && $mysql['email']==$email){
//if($row['pass']==$password2 && $row['email']==$email){
    echo"login Succesfully";
}
else{
    echo"Failed";
}

?>

