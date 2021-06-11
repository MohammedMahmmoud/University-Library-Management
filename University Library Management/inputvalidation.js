function signvalidation(){
    var username=document.getElementById('username');
    var email=document.getElementById('email');
    var password1=document.getElementById('pwd');
    var password2=document.getElementById('pwd2');
    var status=false;

        if(username.Value.trim()=="" || username.Value.trim()==null){
            document.getElementById("namechecker").innerHTML="Enter valid name."
            alert("aaaaaaaa");

            status=false;
        }
        else{
            status=true;
        }
        if(email.Value.trim()=="" || email.Value.trim()==null){
            document.getElementById("emailchecker").innerHTML="Enter valid email."
            status=false;
        }
        else{
            status=true;
        }
        if(password1.Value.trim()=="" || password1.Value.trim()==null){
            document.getElementById("passwordchecker1").innerHTML="Enter valid password."
            status=false;
        }
        else if(password1<6){
            document.getElementById("passwordchecker1").innerHTML="password is short."
            status=false;
        }
        else if(password1>20){
            document.getElementById("passwordchecker1").innerHTML="password is long."
            status=false;
        }
        else{
            status=true;
        }
        if(password2.Value.trim()==""|| password2.Value.trim()==null){
            document.getElementById("passwordchecker2").innerHTML="Enter valid password."
            status=false;
        }
        else if(password2!=password1){
            document.getElementById("passwordchecker2").innerHTML="you must enter the same password."
            status=false;
        }
        else{
            status=true;
        }
        return status;
}