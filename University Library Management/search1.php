<?php
    $servername="localhost";
    $username="root";
    $password="";
    $databaseName="library";

    $connection=new mysqli($servername,$username,$password,$databaseName);

$value = $_POST['value'];
if(isset($_POST["button1"])){
    $mysql="SELECT * FROM book WHERE bookname='$value'";
}
else if(isset($_POST["button2"])){
  $mysql="SELECT * FROM book WHERE author='$value'";
}
else if(isset($_POST["button3"])){
  $mysql="SELECT * FROM book WHERE publicationyear='$value'";
}
else if(isset($_POST["button4"])){
  $mysql="SELECT * FROM book WHERE ISBN='$value'";
}
//echo "value:  ".$value;
  $result = $connection -> query($mysql);
  $_SESSION['query']=$mysql;
  $_SESSION['con']=true;
  //header("Location:../student.php");
    if ($result->num_rows > 0) {
    
        while($row = $result->fetch_assoc()) {
        
           echo "<span>BookName: " .$row["bookname"]." Author Name: ".$row["author"]. "Publication Year: ".$row["publicationyear"]."</span>";
        } 
    } else {
        echo "0 results";
    }
$connection->close();
?>
