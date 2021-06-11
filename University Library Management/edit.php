<?php 
    session_start();
    $row = $_SESSION['row'];
?>
<form action="Edituser.php" method="POST" id="UserProf" name="form" onsubmit="return updateform1(this);">
    <label>user name</label> 
    <input name="username" value="<?php echo $row['username']?>" type="text" id="use">
    <br>
    <span id="namechecker"></span><br><br>
    <label>e-mail</label> 
    <input name="email" value="<?php echo $row['email']?>" type="email" id="email" autocomplete="onautocomplete">
    <br>
    <span id="emailchecker"></span><br><br>

    <div id="passEdit" class="passClass">
        <label>password</label> 
        <input name="password" value="<?php echo $row['password']?>" type="password" id="password" disabled >   
        <button type="button" class="passE" onclick="editPassword()">edit</button>  
    </div>
    
    <div id="upPass" style="display: none">
        <label>current password</label>  
        <input name="CurPass"  type="password"><br><br>
        <label>new password</label>  
        <input name="newPass"  type="password"><br><br>
        <label>confirm new password</label>  
        <input name="conPass"  type="password">  
    </div>
    <br><br>
            
    <button  name="submit" id="submit" type="submit">Submit Now</button>
    <button type="button" onclick="closeProf()">cancel</button>
    
</form>
<script src="Script.js"></script>

        