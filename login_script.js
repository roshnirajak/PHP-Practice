function login(){
    var uname= document.getElementById('uname').value;
    var pwd = document.getElementById('pwd').value;
    var error= document.getElementById('error');

    if(uname=="" || pwd==""){
        error.innerHTML="Fill the form";
        return false;
    }
    if(pwd.length>8 && uname.length>8){
        return true;
    }
}