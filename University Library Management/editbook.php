<?php

$servername="localhost";
$username="root";
$password="";
$databaseName="library";

$connection=new mysqli($servername,$username,$password,$databaseName);

session_start();
$info = $_SESSION['book'];

$id=$info['id'];

$bookname=$_POST['bookname'];
$author=$_POST['author'];
$year=$_POST['year'];
$copies=$_POST['numberofbooks'];

$mysql="UPDATE book SET bookname='$bookname' , author='$author' , publicationyear='$year' , copies='$copies'
WHERE ISBN='$id'";

$sql="SELECT * FROM book WHERE bookname='$bookname' AND  author='$author'";
$result = $connection->query($sql);

if ($row=$result->fetch_assoc() && $connection->query($mysql) === TRUE) {
    echo"<script>
            alert('Operation succeded');
            window.location = 'admin.php';
            </script>";
} else {
    echo"<script>
            alert('Operation succeded');
            window.location = 'admin.php';
            </script>";
}

$connection->close();
?>