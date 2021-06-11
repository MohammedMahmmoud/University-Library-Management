<?php 
    session_start();
    $info = $_SESSION['row'];
?>
<div>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $databaseName="library";
        
        $connection=new mysqli($servername,$username,$password,$databaseName);

        $date= date("Y/m/d");
        $nextday = date("Y/m/d", strtotime("$date +1 day"));
        $email=$info['email'];
        $sql="SELECT * FROM borrow WHERE  (date='$nextday' or date='$date') AND borrowEmail='$email' ";
        $result = $connection->query($sql);
        ?>
        <?php
            if ($result->num_rows > 0) {
        ?>
        <?php while($row = $result->fetch_assoc()) { ?>
            <p>You must return <?php echo $row['bookname'] ?>
            written by <?php echo $row['auhtor'] ?>
            before<?php echo $row['date'] ?></p>
            <br>
            <br>
            <?php 
                $bookname=$row['bookname'];
                $author=$row['auhtor'];
                $date=$row['date'];
                $message="You must return .$bookname. written by .$author. before .$date";
                $message=wordwrap($message,100);
                mail($email,"Returnung book",$message);?>
            <?php }  ?>
            <?php } else{ echo"No messages";} $connection->close();?>
</div>