function register(){
    var name = document.getElementById('name').value;
    var uname= document.getElementById('uname').value;
    var email = document.getElementById('email').value;
    var mob = document.getElementById('mob').value;
    var dob = document.getElementById('dob').value;
    var pwd = document.getElementById('pwd').value;
    var con_pwd = document.getElementById('con_pwd').value;
    var error= document.getElementById('error');

    if(name=="" || uname=="" || email=="" || mob=="" || dob=="" || pwd=="" || con_pwd==""){
        error.innerHTML="Fill the form";
        return false;
    }
    if(uname.length<8){
        error.innerHTML="Username should have more than 8 letters";
        return false;
    }  
    if(mob.length!=10){
        error.innerHTML="Mobile Number should have 10 digits";
        return false;
    }
    if(pwd!=con_pwd){
        error.innerHTML="Passwords don't match";
        return false;
    }
    if(uname.length>8 || pwd==con_pwd || mob.length==10){
        return true;
    }   
    console.log("failed");
    return false;
}