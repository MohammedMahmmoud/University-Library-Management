<html>
    <head>
        <title>add book</title>
    </head>
    <script >
        function signvalidation(){

                var bookname = document.forms["form"]["bookname"];               
                var author = document.forms["form"]["auhtor"];    
                var year = document.forms["form"]["year"];  
                var copies =  document.forms["form"]["numberofbooks"];  

                var status=false;

                    if(bookname.value==""){
                        document.getElementById("bookchecker").innerHTML="This field is required.";
                        status=false;
                    }
                    else{  
                        status=true;  
                        }  
                    if(author.value==""){
                        document.getElementById("auhtorchecker").innerHTML="This field is required.";
                        status=false;
                    }
                    else{  
                        status=true;  
                        }  
                    if(year.value.length<1){
                        document.getElementById("yearchecker").innerHTML="This field is required.";
                        status=false;
                    }
                    if(copies.value.length<1){
                        document.getElementById("numberofbookschecker").innerHTML="This field is required.";
                        status=false;
                    }
                    return status;
                }
        </script>
    <body class="homebody">
        <div id="signdiv">
            <br>
            <form name="form" action="BookServer.php" method="POST" onsubmit="return signvalidation()">
                <input name="bookname" placeholder="Bookname" type="text" id="bookname">
                <br><span id="bookchecker"></span><br><br>

                <input name="author" placeholder="Auhtor"  id="auhtor">
                <br><span id="auhtorchecker"></span><br><br>
            
                <input name="year" placeholder="Publication year" id="year" >
                <br><span id="yearchecker"></span><br><br>
            
                <input name="numberofbooks" type="Number of copies" placeholder="numberofbooks "  id="numberofbooks">
                <br><span id="numberofbookschecker"></span><br><br>

                
                <input  name="submit" id="submit" type="submit" value="Save Book">
            </form>
    </div>
    </body>
    
</html>