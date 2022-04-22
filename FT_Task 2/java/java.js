
function validfname(){
    var fname = document.getElementById("fname").value;
    if(fname.length < 3){
        document.getElementById("fnm").innerHTML = "Invalid Frist Name!!";
        return false;
    }
    else{
        document.getElementById("fnm").innerHTML = "";
        return true;
    }
}

function validlname(){
    var fname = document.getElementById("lname").value;
    if(fname.length < 3){
        document.getElementById("lnm").innerHTML = "Invalid last Name!!";
        return false;
    }
    else{
        document.getElementById("lnm").innerHTML = "";
        return true;
    }
   
}

function validage(){
    var age = document.getElementById("age").value;
    if(age < 12){
        document.getElementById("am").innerHTML = "Invalid Age!!";
        return false;
    }
    else{
        document.getElementById("am").innerHTML = "";
        return true;
    }
   
}

function validemail(){
    var email = document.getElementById("email").value;

    if(email.value.match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      )){
        document.getElementById("em").innerHTML = "";
        return true;
    }
    else{
        document.getElementById("em").innerHTML = "Invalid Email!!";
        return false;
    }
    
    
}

function validpassword(){
    var pass = document.getElementById("Password").value;
    if(pass.length < 6){
        document.getElementById("pm").innerHTML = "Invalid Password!!";
        return false;
    }
    else{
        document.getElementById("pm").innerHTML = "";
        return true;
    }
   
}


function regValid(){
        
    return validfname();
    return validlname();
    return validage();
    return validemail();
    return validpassword();

}