<!DOCTYPE html>
<html>
    <head>
    <title>University Library</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="main.css">
    </head>
    
    <body>
        <?php 
                $servername="localhost";
                $username="root";
                $password="";
                $databaseName="mahr";
                
                $conn=new mysqli($servername,$username,$password,$databaseName);
            ?>
      
    <div>
<form  method="POST">    

            <input type="txt" placeholder="Book name" name="bookname2"><br><br>

            <input type="txt" placeholder="Author name" name="author2"><br><br>
    
            <button type="submit" name="submit"><i class="fa fa-search"></i></button>
        </form> 
</div>
<?php
    
echo"zztyyy";
//include 'editbook2.php';
if(isset($_POST["submit"])){//if($sub){
    echo"zzxxxzz";

   // include('editbook2.php');
include 'editbook2.php';
}
?>

    </body>

</html>


<div>
        <?php 
                $servername="localhost";
                $username="root";
                $password="";
                $databaseName="mahr";
                
                $conn=new mysqli($servername,$username,$password,$databaseName);
        ?>
      
        <?php
            
        echo"mahr";
        if(isset($_POST["submit"])){
            echo"zzxxxzz";
            include 'editbook2.php';
            //session_start();
            $row=$_SESSION['book'];
            ?>

<form action="editbook.php" method="POST">

    <input type="txt" placeholder="Book name" name="bookname2"><br><br>

    <input type="txt" placeholder="Author name" name="author2"><br><br>
            
    <input name="bookname" value="<?php echo $row['bookname']?>" type="text" id="use" placeholder="New Book name"><br><br>
        
    <input name="author" value="<?php echo $row['author']?>" type="text" placeholder="New Author name"><br><br>
                   
    <input name="year" value="<?php echo $row['publicationyear']?>" type="text" id="use" placeholder="New relase year name"><br><br>
            
    <input name="copies" value="<?php echo $row['copies']?>" type="text" id="use" placeholder="Number of copies"><br><br>
        
    <input  name="submit5" id="submit" type="submit" value="Submit Now">
</form>

      <?php  }?>

</div>