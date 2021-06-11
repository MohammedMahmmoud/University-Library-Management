<html>
    <head>
        <title>Sign Up page</title>
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
    <script >
        
    </script>
    <body class="homebody">
        <div id="signdiv">
            <br>
            <h2>Welcome to Cairo University Library</h2>
            <form name="form" action="SignUser.php" method="POST" onsubmit="return signvalidation()">
                <input name="username" placeholder="username" type="text" id="username">
                <br><span id="namechecker"></span><br><br>

                <input name="email" placeholder="e-mail" type="email" id="email" autocomplete="onautocomplete">
                <br><span id="emailchecker"></span><br><br>
            
                <input name="password1" placeholder="password" type="password" id="pwd" >
                <br><span id="passwordchecker1"></span><br><br>
            
                <input name="password2" type="password" placeholder="Confirm Password "  id="pwd2">
                <br><span id="passwordchecker2"></span><br><br>

                <select name="role" id="option">
                    <option value="admin">Admin</option>
                    <option value="student">Student</option>
                </select><br><br>
                
                <input  name="submit" id="submit" type="submit" value="Submit Now">
            </form>
    </div>
    <script src="Script.js"></script> 
    </body>
</html>