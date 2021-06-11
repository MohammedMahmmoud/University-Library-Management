<?php

$servername="localhost";
$username="root";
$password="";
$databaseName="library";

$connection=new mysqli($servername,$username,$password,$databaseName);

session_start();
$info = $_SESSION['row'];

$bookname=$_POST['bookname'];
$auhtor=$_POST['author'];
$day=$_POST['day'];
$date= date("Y/m/d");
$nextdate = date("Y/m/d", strtotime("$date +$day day"));
$email=$info['email'];

$sql="SELECT * FROM borrow WHERE bookname='$bookname' AND borrowEmail='$email' AND auhtor='$auhtor'";
$result = $connection->query($sql);

$mysql="UPDATE borrow SET day=day+'$day' ,date='$nextdate'
WHERE bookname='$bookname' AND borrowEmail='$email' AND auhtor='$auhtor'";


if ($row=$result->fetch_assoc() && $connection->query($mysql) === TRUE) {
    echo"<script>
            alert('Operation succeded');
            window.location = 'student.php';
            </script>";
} else {
    echo"<script>
            alert('Operation failed');
            window.location = 'student.php';
            </script>";
}
  
  $connection->close();

  ?>