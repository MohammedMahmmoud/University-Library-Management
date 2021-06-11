<?php

$servername="localhost";
$username="root";
$password="";
$databaseName="library";

$connection=new mysqli($servername,$username,$password,$databaseName);



/*$mysql="INSERT INTO book(cover) VALUES('$imagefile')";

if($connection->query($mysql) === TRUE){
    echo"Saved succesfully";
    //header("");
}*/

//$imagefile=$_FILES["image"]["name"];



$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = "INSERT INTO book(cover) VALUES('$imgContent')"; 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 

/*$result = $db->query("SELECT cover FROM book ORDER BY uploaded DESC"); 


if($result->num_rows > 0){ 
    <div class="gallery"> 
         while($row = $result->fetch_assoc()){ 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); " /> 
        }
    </div> 
 }else{ 
    <p class="status error">Image(s) not found...</p> 
 } */

 $sql ="SELECT cover FROM book ORDER BY uploaded DESC";
 $result = $connection -> query($sql);
 if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo base64_encode($row['cover']);
        /*<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['cover']); ?>" /> */
        }
    }else{
        //<p class="status error">Image(s) not found...</p> 
        echo "image not found";
    }


$connection->close();

/*<?php
        $servername="localhost";
        $username="root";
        $password="";
        $databaseName="library";
        
        $connection=new mysqli($servername,$username,$password,$databaseName);
        
        $result ="SELECT cover FROM book ORDER BY uploaded DESC"; 
        ?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['cover']); ?>" /> 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>*/

/*<html>
    <head>
        <title>book</title>
    </head>
    <body>
        <h1> Welcome to University Library Management System </h1>
        <form action="imageserver.php" method="POST" enctype="multipart/form-data">
            <label>Select Image File:</label>
            <input type="file" name="image">
            <input type="submit" name="submit" value="Upload">
        </form>
        
    </body>
</html>*/


//Working//
/*
<?php
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);

    $servername="localhost";
    $username="root";
    $password="";
    $databaseName="library";

    $con=new mysqli($servername,$username,$password,$databaseName);
    //$con = mysqli_connect('localhost','root','','admin') or die('Unable To connect');
    $sql = "insert into book (cover) values(?)";

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $msg = 'Image Successfullly UPloaded';
    }else{
        $msg = 'Error uploading image';
    }
    mysqli_close($con);
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image" />
    <button>Upload</button>
</form>*/

?>


