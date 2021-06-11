<div>
    <form method="post" action="">
    <input name="value" placeholder="search" id="searchvalue" ><br><br>
    <input type="submit" name="submit" value="search">
</form>
<?php

$servername="localhost";
    $username="root";
    $password="";
    $databaseName="library";

    $connection=new mysqli($servername,$username,$password,$databaseName);
    
if(isset($_POST["submit"])){
    $bookname=$_POST['value'];

    $mysql="SELECT * FROM book WHERE bookname='$bookname'";

    $result = $connection -> query($mysql);

    if ($result->num_rows > 0) {
    
        while($row = $result->fetch_assoc()) {
        
           echo "<span>BookName: " .$row["bookname"]." Author Name: ".$row["author"]. "Publication Year: ".$row["publicationyear"]."</span>";
        } 
        $bool=true;
    } else {
        echo "0 results";
    }
}
$connection->close();
?>
</div>

