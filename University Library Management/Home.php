<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="main.css">
    </head>
    <style>
        input
        {
            width: 250px;
            height: 30px;
            border-radius: 4px;
            font-size: larger;
            border:0;
            box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
            background-color: rgb(90, 90, 90);
            border-color: rgb(90, 90, 90);
            color: #f2f2f2;
        }  
    </style>
    <body class="homebody">
        <?php
            if(isset($_COOKIE['userName']) && isset($_COOKIE['password'])){
                $connection=new mysqli("localhost","root","","library");
                $Email=$_COOKIE["userName"];
                $pass=$_COOKIE["password"];

                $result = $connection->query("SELECT * from users where email='$Email' and pass='$pass' ");
                if($row=$result->fetch_assoc()){
                    $info = array("username"=>$row['username'], "password"=>$row['pass'], "email"=>$row['email'],"role"=>$row['role'],'id'=>$row['Id']);

                    if($row['role']=="admin"){
                        session_start();
                        $_SESSION['row'] = $info;
                        header("Location:admin.php");
                        exit();
                    }
                    else{
                        session_start();
                        $_SESSION['row'] = $info;
                        header("Location:student.php");
                        exit();
                    }
                }
            }
            
        ?>
        <div id="homediv">
            <br>
            <h2>Welcome to Cairo University Library</h2>
            <form class="homeform">
                </br>
                </br>
                <input type="button" class="bu" value="Log in" onclick="window.location.href='log.html';"/>
                </br>
                </br>
                <input type="button" class="bu" value="Sign in" onclick="window.location.href='Sign.php';"/>
            </form>
        </div>
        
    </body>
</html> 