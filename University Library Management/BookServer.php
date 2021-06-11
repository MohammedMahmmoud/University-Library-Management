<?php

$servername="localhost";
$username="root";
$password="";
$databaseName="library";

$connection=new mysqli($servername,$username,$password,$databaseName);

$bookname=$_POST['bookname'];
$author=$_POST['author'];
$year=$_POST['year'];
$copies=$_POST['numberofbooks'];



$mysql="INSERT INTO book(bookname,author,publicationyear,copies)
VALUES('$bookname','$author','$year','$copies')";

$sql="SELECT * FROM book WHERE bookname='$bookname' AND author='$author'";
$result = $connection->query($sql);


if($connection->query($mysql) === TRUE){
   echo"<script>
   alert('Operation succeded');
   window.location = 'admin.php';
   </script>";
    
}else{
   echo"<script>
   alert('Operation failed');
   window.location = 'admin.php';
   </script>";
}

$connection->close();


?>
