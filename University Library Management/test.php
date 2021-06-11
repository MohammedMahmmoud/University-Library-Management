<div>
<?php
include 'Server.php';
$search=$_POST['search'];


$mysql="SELECT * FROM book
WHERE author='$search' or bookname='$search' or publicationyear='$search'";

$result = $connection -> query($mysql);
//$row = $result -> fetch_assoc();




$booknamearr=array();
$authorarr=array();
$yeararr=array();
if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        $booknamearr[]=$row["bookname"];
        $authorarr[]=$row["author"];
        $yeararr[]=$row["publicationyear"];
        //array_push($booknamearr[],$row["bookname"]);

    
        //echo "<div>BookName: " .$row["bookname"]." Author Name: ".$row["author"]. "Publication Year: ".$row["publicationyear"]."</div>";
    }
    session_start();
    $_SESSION['bookname']=$booknamearr;
$_SESSION['author']=$authorarr;
$_SESSION['Publicationyear']=$yeararr;
print_r($booknamearr);
} else {
    echo "0 results";
}
$connection->close();

/*
include 'Server.php';
$search=$_POST['search'];


$mysql="SELECT * FROM book
WHERE author='$search' or bookname='$search' or publicationyear='$search'";

$result = $connection -> query($mysql);
//$row = $result -> fetch_assoc();
$counter=0



$booknamearr=array();
$authorarr=array();
$yeararr=array();
if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        $booknamearr[$counter]=$row["bookname"];
        $authorarr[$counter]=$row["author"];
        $yeararr[$counter]=$row["publicationyear"];
        $counter++;
        //echo "<div>BookName: " .$row["bookname"]." Author Name: ".$row["author"]. "Publication Year: ".$row["publicationyear"]."</div>";
    }
    session_start();
    $_SESSION['bookname']=$booknamearr;
$_SESSION['author']=$authorarr;
$_SESSION['Publicationyear']=$yeararr;

} else {
    echo "0 results";
}
$connection->close();
*/

?>
</div>