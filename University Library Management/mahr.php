<!DOCTYPE html>
<html>

    <head>

        <link rel="stylesheet" href="test.css">
        <title>Test</title>

    </head>

    <body>
        <?php 
                $servername="localhost";
                $username="root";
                $password="";
                $databaseName="mahr";
                
                $conn=new mysqli($servername,$username,$password,$databaseName);
            ?>
        <div class="pr">
            <?php 
                $sql="SELECT *FROM user";
                $result = $conn->query($sql);
                ?>

                    <?php
                        if ($result->num_rows > 0) {
                    ?>
                        <?php while($row = $result->fetch_assoc()) { ?>
                            <h3>First Name:<?php echo $row['fname'] ?></h3>
                            <h3>Last Name:<?php echo $row['lname'] ?></h3>
                            <h3>Email:<?php echo $row['email'] ?></h3>
                            <br>
                            <br>
                        <?php }  ?>
                        <?php }  ?>
            

        </div>

    </body>

</html>