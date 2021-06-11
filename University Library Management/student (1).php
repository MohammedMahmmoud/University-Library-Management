<html>
    <head>
        <title>University Library</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <?php 
            session_start();
            $row = $_SESSION['row'];
        ?>
        <div class="navbar">
            <div class="user" onclick="getprof()">
                <a href="#">
                    <div class="pic"><img src="DSC_0036.JPG"></div>
                    <div id="dropList" class="dropList">
                        <a href="#" onclick="getEdit()">update information</a><br>
                        <a href="#" onclick="getMess()">messages</a><br>
                        <form method="post">
                        <button name="logOut" onclick="log0ut()" class="logout">
                            log out</button></form>
                    </div>
                    <div class="name"><?php echo $row['username']; ?></div>
                </a>
            </div>
            <div class="welcome">Welcome to University Library</div>
            <div class="search">
                <form action="" method="POST">
                    <input name="search" type="text" placeholder="Search">
                    <button type="submit" name="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div>
        <?php
                if(isset($_POST["submit"])){
                    include 'Server.php';
                    $search=$_POST['search'];


                    $mysql="SELECT * FROM book
                    WHERE author='$search' or bookname='$search' or publicationyear='$search'";

                    $result = $connection -> query($mysql);
                    //$row = $result -> fetch_assoc();

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"BookName: " .$row["bookname"]." Author Name: ".$row["author"]. "Publication Year: ".$row["publicationyear"];
                        }
                    } else {
                        echo "0 results";
                    }
                    $connection->close();
                }
            ?>
        </div>
        <form class="adminMenu">
         <input type="button" onclick="AboutFunction1();" value="Borrow Book"><br><br>
         
         <input type="button" onclick="AboutFunction2();" value="Return Book"><br><br>
         
         <input type="button" onclick="AboutFunction3();" value="Extend borrowing Book"><br><br>

         <input type="button" onclick="getMess();" value="Messages"><br><br>

         <input type="button"  value="Broswe Book" onclick="getBrowse();">
        </form>
        <div id="menu">
            <?php
            include 'Server.php';
            $date= date("Y/m/d");
            $nextday = date("Y/m/d", strtotime("$date +1 day"));
            $email=$row['email'];
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
                    <?php }  ?>
                <?php } else{ echo"No messages";} $connection->close();
            ?>
        </div>
        <?php 
            if (array_key_exists('logOut', $_POST)) {
                setcookie("password","",time()-60,"/"); setcookie("userName","",time()-60,"/");
                unset($_COOKIE['password']); unset($_COOKIE['userName']);
                $myJS = <<<EOT
                <script type='text/javascript'>  window.location.replace("home.php");</script>
                EOT;
                echo($myJS);
                $_SESSION =array();
                session_destroy();
            }
        ?>
        <div id="editInfo"></div>
        <div id="message"></div>
        <div id="browser" class="temp" style="display: none">
            <button class="button1" >browse by book name</button>
            <button class="button2" >browse by book author</button>
            <button class="button3">browse by book released year</button>
            <button class="button4">browse by book isbn</button>
        </div>            
        <div id="BDiv" class="bId"></div>
        <script src="Script.js"></script>
    </body>   
</html>

