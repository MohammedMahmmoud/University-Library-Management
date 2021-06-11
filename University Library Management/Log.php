<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="main.css">
    </head>
    <style>
        input{ 
            border:0;
            border-bottom:1px solid black;
            color:#fff;
            background:transparent;
            font-size:16px;
            }
        input:focus{ 
            border:none;	
            outline:none;
            background:transparent;
            border-bottom:1px solid #a52a2a;	
        }
        span{
            text-align: left;
            border-style: hidden;
            color: rgb(168, 18, 18);
            font-size: 12px;
        }
    </style>
    <body class="homebody">
        <div id="homediv">
            <br>
            <h2>Welcome to Cairo University Library</h2>
            <form name="form" method="POST" action="LoginUser.php" onsubmit="return logvalidation()">
                <br>
                <input name="email" id="name" placeholder="email" type="email" autocomplete="onautocomplete"/>
                <br>
                <br>
                <span id="emailchecker"></span>
                <br>
                <br>
                <input type="password" name="password" id="pass" placeholder="Password"/>
                <br>
                <br>
                <span id="passwordchecker1"></span>
                <br>
                <br>
                <input type="submit" class="bu" value="Log in"/>
            </form>
        </div>
        <script src="Script.js"></script> 
    </body>
</html>