<?php
    $servername="localhost";
    $username="root";
    $password="";
    $databaseName="library";

    $connection=new mysqli($servername,$username,$password,$databaseName);
    session_start();

    $isbn=$_SESSION['value'];

    $mysql="SELECT * FROM book WHERE ISBN='$isbn'";

    $result = $connection -> query($mysql);

    if ($result->num_rows > 0) {
    
        while($row = $result->fetch_assoc()) {
        
           echo "<span>BookName: " .$row["bookname"]." Author Name: ".$row["author"]. "Publication Year: ".$row["publicationyear"]."</span>";
        } 
        $bool=true;
    } else {
        echo "0 results";
    }
$connection->close();
?>
    