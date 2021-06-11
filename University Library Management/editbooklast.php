
<div class="left-side">
<link rel="stylesheet" href="main.css"></div>
<div>

    <form class="edit" method="POST" name="form" onsubmit="return searchForm(this);">    
        <input type="txt" placeholder="Book name" name="bookname2">
        <br><span id="bookchecker"></span><br><br>

        <input type="txt" placeholder="Author name" name="author2">
        <br><span id="auhtorchecker"></span><br><br>
            
        <button type="submit" name="s" class="Sea">search</button>
    </form> </div>
<div><?php
    $row=$info = array("id"=>NULL,"author"=>NULL,"publicationyear"=>NULL,"bookname"=>NULL,"copies"=>NULL);
    if(isset($_POST["s"])){
        include 'editbook2.php';
        unset($row);
        $row=$_SESSION['book'];
    }?>

    <form action="editbook.php" method="POST" class="edit" id="editNd" name="form" onsubmit="return checkEditbookForm(this);">
            
        <input name="bookname" value="<?php echo $row['bookname']?>" type="text" id="use">
        <br><span id="bookchecker"></span><br><br>
        
        <input name="author" value="<?php echo $row['author']?>" type="text">
        <br><span id="auhtorchecker"></span><br><br>
                   
        <input name="year" value="<?php echo $row['publicationyear']?>" type="text" id="use">
        <br><span id="yearchecker"></span><br><br>
            
        <input name="numberofbooks" value="<?php echo $row['copies']?>" type="text" id="use">
        <br><span id="copies"></span><br><br>
        
            
        <input  name="submit" id="submit" type="submit" value="Save Book">
    </form></div>

</div>
<div class="right-side">
<link rel="stylesheet" href="main.css">
</div>
<script src="Script.js"></script>