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
$email=$info['email'];

$mysql="SELECT *FROM borrow WHERE bookname='$bookname' AND borrowEmail='$email' AND auhtor='$auhtor'";

$sql="DELETE FROM borrow WHERE bookname='$bookname' AND borrowEmail='$email' AND auhtor='$auhtor'";
$result = $connection->query($mysql);

if ($row=$result->fetch_assoc() && $connection->query($sql) === TRUE) {
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