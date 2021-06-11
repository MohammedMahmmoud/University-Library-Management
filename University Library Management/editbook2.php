<?php
include 'Server.php';

$bookname2=$_POST['bookname2'];
$author2=$_POST['author2'];

$mysql="SELECT *FROM book WHERE bookname='$bookname2' AND author='$author2'";
$result = $connection->query($mysql);

if($row=$result->fetch_assoc()){
    $info = array("id"=>$row['ISBN'],"author"=>$row['author'],"publicationyear"=>$row['publicationyear'],"bookname"=>$row['bookname'],"copies"=>$row['copies']);
    session_start();
    $_SESSION['book']=$info ;
}

$connection->close();
//session_start();
//$info=$_SESSION['book'];
?>

