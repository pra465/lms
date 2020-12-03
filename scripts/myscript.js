function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Email must be filled out");
    return false;
  }
  var y = document.forms["myForm"]["pass"].value;
  var z=y.length;
  if(y == ""){
      alert("Password must be filled");
      return false;
  }
  if(z<6){
    alert("password must be more than 6");
    return false;
  }

}