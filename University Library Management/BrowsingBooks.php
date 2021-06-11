<?php


$servername="localhost";
$username="root";
$password="";
$databaseName="library";

$connection=new mysqli($servername,$username,$password,$databaseName);

$search=$_POST['search'];

$mysql="SELECT * FROM book
WHERE author='$search' or bookname='$search' or publicationyear='$search'";

$result = $connection -> query($mysql);
$row = $result -> fetch_assoc();


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo"BookName: " .$row["bookname"]." Author Name: ".$row["author"]. "Publication Year: ".$row["publicationyear"];
    }
  } else {
    echo "0 results";
  }
$connection->close();
?>

<!--<div>
   <?php/*
        include 'Server.php';
        session_start();
        $search = $_SESSION['search'];
        echo $search;
        //$search=$_POST['search'];
        $mysql="SELECT * FROM book
        WHERE author='$search' or bookname='$search' or publicationyear='$search'";

        $result = $connection -> query($mysql);
        ?>
        <?php
            if ($result->num_rows > 0) {
            ?>
            <?php while($row = $result->fetch_assoc()) { ?>
                <p>Book Name: <?php echo $row['bookname'] ?><br>
                Author: <?php echo $row['auhtor'] ?><br>
                Publication Year: <?php echo $row['date'] ?></p>
                <br>
                <br>
                <?php }  ?>
            <?php } else{ echo"Doesn't Exist";}*/ ?>
</div>-->