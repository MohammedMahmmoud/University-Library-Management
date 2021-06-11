function signvalidation(){

    var username = document.forms["form"]["username"];               
    var email = document.forms["form"]["email"];    
    var password1 = document.forms["form"]["password1"];  
    var password2 =  document.forms["form"]["password2"];  
    
    var status=false;

        if(username.value==""){
            document.getElementById("namechecker").innerHTML="Enter valid name.";
            status=false;
        }
        else{  
            status=true;  
            }  
        if(email.value==""){
            document.getElementById("emailchecker").innerHTML="Enter valid email.";
            status=false;
        }
        else{  
            status=true;  
            }  
        if(password1.value.length<6){
            document.getElementById("passwordchecker1").innerHTML="Enter valid password."
            status=false;
        }
        else if(password1.value.length>20){
            document.getElementById("passwordchecker1").innerHTML="password is long."
            status=false;
        }
        if(password2.value.length<1){
            document.getElementById("passwordchecker2").innerHTML="Enter valid password.";
            status=false;
        }
        else if(password2.value!=password1.value){
            document.getElementById("passwordchecker2").innerHTML="you must enter the same password."
            status=false;
        }
        
        return status;
}

function logvalidation(){
    var email=document.form.email.value;
    var password1=document.form.password.value;

    var status=false;

        if(email.length<1){
            document.getElementById("emailchecker").innerHTML="Enter valid email."
            status=false;
        }
        else{  
            status=true;  
            }  
        if(password1.length<6){
            document.getElementById("passwordchecker1").innerHTML="Enter valid password."
            status=false;
        }
        return status;
}

function getprof() {
    document.getElementById("dropList").classList.toggle("newDropList");
}

function editName()
{
    document.getElementById("input").disabled=false;
}

function editPass()
{
    document.getElementById("input2nd").disabled=false;
    document.getElementById("password").innerHTML="Current password ";    
    document.getElementById("password").style.marginLeft=-52;
    document.getElementById("edit").classList.toggle("enEdit");
}

function getEdit()
{
    var req=new XMLHttpRequest();
    document.getElementById("browser").style.display="none";
    document.getElementById("BDiv").innerHTML="";
    
    req.onreadystatechange=function(){
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            document.getElementById("menu").innerHTML = this.responseText;
        }
    }

    req.open("GET","edit.php",true);
    req.send();
}



function getMess()
{
    var req=new XMLHttpRequest();
    document.getElementById("browser").style.display="none";
    document.getElementById("BDiv").innerHTML="";

    req.onreadystatechange=function(){
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            document.getElementById("menu").innerHTML = this.responseText;
        }
    }

    req.open("GET","message.php",true);
    //$( "#menu" ).load( "student.html div#menu" );
    req.send();
}


function editbookName()
{
    document.getElementById("bookid").disabled=false;
}
function editauthor()
{
    document.getElementById("authorid").disabled=false;
}
function editbookYear()
{
    document.getElementById("yearid").disabled=false;
}
function editcopy()
{
    document.getElementById("copyid").disabled=false;
}
function closeEdit()
{
    document.getElementsByClassName("AdminMenu").classList.toggle("close");
}

function getAddBook()
{
    var req=new XMLHttpRequest();
    document.getElementById("browser").style.display="none";
    document.getElementById("BDiv").innerHTML="";
    
    req.onreadystatechange=function(){
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            document.getElementById("menu").innerHTML = this.responseText;
        }
    }

    req.open("GET","AddBook.html",true);
    req.send();
}

function getEditBook()
{
    /*var req=new XMLHttpRequest();
    
    req.onreadystatechange=function(){
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            document.getElementById("menu").innerHTML = this.responseText;
        }
    }

    req.open("GET","editbooklast.php",true);
    req.send();*/
    location.replace("editbooklast.php");
}


function getBrowse()
{
    document.getElementById("browser").style.display="block";
    document.getElementById("menu").innerHTML="";
}

function closeProf()
{
    document.getElementById("UserProf").classList.toggle("close");   
}

function editPassword()
{
    document.getElementById("passEdit").style.display="none";
    document.getElementById("upPass").style.display="block";
}


function returnbook()
 {
    document.getElementById("browser").style.display="none";
    document.getElementById("BDiv").innerHTML="";
        var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
        document.getElementById("menu").innerHTML=this.responseText;
        }
    };
    xhttp.open("GET","formReturn.html",true);
    xhttp.send();
}

function borrowbook()
{
    document.getElementById("browser").style.display="none";
    document.getElementById("BDiv").innerHTML="";
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
    document.getElementById("menu").innerHTML=this.responseText;
    }
    };
    xhttp.open("GET","formBorrow.html",true);
    xhttp.send();
}
function extendborrow()
{
    document.getElementById("browser").style.display="none";
    document.getElementById("BDiv").innerHTML="";
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
    document.getElementById("menu").innerHTML=this.responseText;
    }
    };
    xhttp.open("GET","formExtend.html",true);
    xhttp.send();
}

function checkAddbookForm(form)
  {
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

  function checkEditbookForm(form)
  {
    var bookname = document.forms["form"]["bookname"];               
    var author = document.forms["form"]["author"];    
    var year = document.forms["form"]["year"];  
    var copies =  document.forms["form"]["copies"];
    var status=false;
    if(bookname.value==""){
        document.getElementById("bookchecker").innerHTML="This field is required."
        status=false;
    }
    else{  
        status=true;  
        } 
    if(author.value==""){
        document.getElementById("auhtorchecker").innerHTML="This field is required."
        status=false;
    }
    else{  
        status=true;  
        } 
    if(year.value.length<1){
        document.getElementById("yearchecker").innerHTML="This field is required."
        status=false;
    }
    if(copies.value.length<1){
        document.getElementById("numberofbookschecker").innerHTML="This field is required."
        status=false;
     }
     return status;
  }

  function checkborrowForm(form)
  {
    var bookname = document.forms["form"]["bookname"];               
    var author = document.forms["form"]["author"];    
    var status=true;
    if(bookname.value==""){
        document.getElementById("bookchecker").innerHTML="This field is required."
        status=false;
    }
    
    if(author.value==""){
        document.getElementById("auhtorchecker").innerHTML="This field is required."
        status=false;
    }
     
     return status;
  }

  function searchForm(form)
  {
    var bookname = document.forms["form"]["bookname2"];               
    var author = document.forms["form"]["author2"];    
    var status=true;
    if(bookname.value==""){
        document.getElementById("bookchecker").innerHTML="This field is required."
        status=false;
    }
    
    if(author.value==""){
        document.getElementById("auhtorchecker").innerHTML="This field is required."
        status=false;
    }
     
     return status;
  }

  function updateform1(form)
  {
    var username = document.forms["form"]["username"];               
    var email = document.forms["form"]["email"];    
    var status=true;
    if(username.value==""){
        document.getElementById("namechecker").innerHTML="This field is required."
        status=false;
    }
    
    if(email.value==""){
        document.getElementById("emailchecker").innerHTML="This field is required."
        status=false;
    }
     
     return status;
  }

  function getbrowseallbooks(){
    var req=new XMLHttpRequest();
    document.getElementById("browser").style.display="none";
    //document.getElementById("BDiv").innerHTML="";
    req.onreadystatechange=function(){
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            document.getElementById("BDiv").innerHTML = this.responseText;
        }
    }

    req.open("GET","BrowsingAllBooks.php",true);
    req.send();

  }
  function browseform(form)
  {
    var value = document.forms["form"]["value"];               
        
    var status=true;
    if(value.value==""){
        document.getElementById("browsechecker").innerHTML="This field is required.";
        status=false;
    } 
     return status;
  }
  