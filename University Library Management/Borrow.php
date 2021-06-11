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
$email=$info['email'];
$date= date("Y/m/d");
$nextday = date("Y/m/d", strtotime("$date +$day day"));
$mysql="SELECT * FROM  book
WHERE bookname='$bookname' AND author='$auhtor'";
$result = $connection -> query($mysql);

if($row = $result->fetch_assoc()){

    if($row['borrowed']<=$row['copies']){


        $insert="INSERT INTO borrow(bookname,auhtor,day,borrowEmail,date,startdate)
        VALUES('$bookname','$auhtor','$day','$email','$nextday','$date')";
        $update="UPDATE book 
        SET borrowed=borrowed+1
        WHERE bookname='$bookname' AND author='$auhtor'";

        $stmt = mysqli_prepare($connection,$insert);

        mysqli_stmt_execute($stmt);
        $check = mysqli_stmt_affected_rows($stmt);
        if($check==1){
            echo"<script>
            alert('Operation succeded');
            window.location = 'student.php';
            </script>";
        }
    }
    else{
        echo"<script>
            alert('Operation Failed.no valid copies');
            window.location = 'student.php';
            </script>";
    }
}
else{
    echo"<script>
            alert('Operation Failed.Book does not exist');
            window.location = 'student.php';
            </script>";
}

$connection->close();
?>