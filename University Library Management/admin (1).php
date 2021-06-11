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
            $info = $_SESSION['row'];
        ?>
        <div class="navbar">
            <div class="user" onclick="getprof()">
                <a href="#">
                    <div class="pic"><img src="DSC_0036.JPG"></div>
                    <div id="dropList" class="dropList">
                        <a href="#" onclick="getEdit()">update information</a><br>
                        <a href="#" onclick="getMess()">messages</a><br>
                        <form method="post">
                        <button  name="logOut" class="logout">
                            log out</button></form>
                    </div>
                    <div class="name"><?php echo $info['username']; ?></div>
                </a>
            </div>
            <div class="welcome">Welcome to University Library</div>
            <div class="search">
                <form action="" method="POST">
                    <input name="search" type="text" placeholder="Search">
                    <button type="submit" name="submit2"><i class="fa fa-search"></i></button>
                </form>
            </div>

        </div> 
        <form class="adminMenu">
         <input type="button" onclick="getAddBook();" value="Add Book"><br><br>
         
         <input type="button" onclick="getEditBook();" value="Edit Book"><br><br>
         
         <input type="button"  value="Broswe Book" onclick="getBrowse()"><br><br>

         <input type="button" onclick="getMess();" value="Messages">
        </form>
        
        <div>
            <?php
            //echo"in admin";
                if(isset($_POST["submit2"])){
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
        </div>
        <div id="menu"></div>
        <div id="editInfo"></div>
        <div id="message"></div>
        <div id="AdminMenu" class="Ad"></div>
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

