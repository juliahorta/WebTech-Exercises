function validate(){

  if(document.getElementById("inputPassword3").value == document.getElementById("confirmpassword").value){
    return true;
  } else {
    window.alert("Different passwords");
    return false;
  }
}
