<?php
$servername="localhost";
$username="root";
$password="";
$databaseName="library";

$connection=new mysqli($servername,$username,$password,$databaseName);


$mysql="SELECT * FROM book";


$result = $connection -> query($mysql);


if ($result->num_rows > 0) {

    echo'<table style=" color:white; width:500px; text-align:left;">
        <tr>
          <th>Book Name</th>
          <th>Author Name</th>
          <th>Publication Year</th>
          <th>ISBN</th>
        </tr>';
    while($row = $result->fetch_assoc()) {
        echo'<tr>
            <td>'.$row["bookname"].'</td>
            <td>'.$row["author"].'</td>
            <td>'.$row["publicationyear"].'</td>
            <td>'.$row["ISBN"].'</td>
            </tr>';
       //echo "<div>BookName: " .$row["bookname"]."  Author Name: ".$row["author"]. "   Publication Year: ".$row["publicationyear"]."</div>";
    } 
} else {
    echo "0 results";
}

$connection->close();
?>