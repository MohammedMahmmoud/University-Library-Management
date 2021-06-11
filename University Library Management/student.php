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
                        <form method="post">
                            <button name="logOut" onclick="log0ut()" class="logout">log out</button>
                        </form>
                    </div>
                    <div class="name"><?php echo $row['username']; ?></div>
                </a>
            </div>
            <div class="welcome">Welcome to University Library</div>
        </div>
        <div>
        </div>
        <ul class="adminMenu">
         <li><input type="button" onclick="borrowbook();" value="Borrow Book"></li>
         
         <li><input type="button" onclick="returnbook();" value="Return Book"></li>
         
         <li><input type="button" onclick="extendborrow();" value="Extend borrowing Book"></li>

         <li><input type="button" onclick="getMess();" value="Messages"></li>

         <li><input type="button"  value="Broswe Book" onclick="getBrowse();"></li>

         <li><input type="button"  value="Broswe All Books" onclick="getbrowseallbooks();"></li>

        </ul>
        <div id="menu"></div>
        <div id="browser" class="temp" style="display: none">
            <form action="" method="POST" name="form" onsubmit="return browseform(this);">
                <input name="value" placeholder="search" id="searchvalue" >
                <button name="button1" type="submit">browse by book name</button>
                <button name="button2" type="submit">browse by book author</button>
                <button name="button3" type="submit">browse by book released year</button>
                <button name="button4" type="submit">browse by book isbn</button>
                <br><span id="browsechecker"></span>
            </form>
        </div>           
        <div id="BDiv" class="bId">
            <?php 
            if(isset($_POST["button1"]) || isset($_POST["button2"]) ||  isset($_POST["button3"]) || isset($_POST["button4"])){
                   include 'search.php';
            }?>
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
        <script src="Script.js"></script>   
    </body>   
</html>