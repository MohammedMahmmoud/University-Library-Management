

<!DOCTYPE html>
<html>
<head>
    <title>Insert Image in MySql using PHP</title>
</head>
<body>




<form name="form1" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td><input type="submit" name="submit2" value="display"></td>
</tr>
</table>
</form>
<?php
$servername="localhost";
$username="root";
$password="";
$databaseName="library";
$con=new mysqli($servername,$username,$password,$databaseName);


if(isset($_POST["submit2"]))
{
    $res=mysqli_query($con,"select cover from book");
   echo "<table>";
   echo "<tr>";
   
   while($row=mysqli_fetch_array($res))
   {
   echo "<td>"; 
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['cover'] ).'" height="200" width="200"/>';
   echo "<br>";
   ?><a href="delete.php?id=<?php echo $row["id"]; ?>"></a> <?php
   echo "</td>";
   } 
   echo "</tr>";
   
   echo "</table>";
   //$check=$check-1;
  }
?>
</body>
</html>