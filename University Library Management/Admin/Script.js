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
    
    req.onreadystatechange=function(){
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            document.getElementById("editInfo").innerHTML = this.responseText;
        }
    }

    req.open("GET","edit.html",true);
    req.send();
}

function getMess()
{
    var req=new XMLHttpRequest();
    
    req.onreadystatechange=function(){
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            document.getElementById("message").innerHTML = this.responseText;
        }
    }

    req.open("GET","",true);
    req.send();
}