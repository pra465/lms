function validateForm1(){
    
    var x = document.forms["myForm"]["name"].value;
    if(x==""){
        alert("name must be filled");
        return false;
    }
    if(x.length<=7)
    {
        alert("last name required");
        return false;
    }
    var y= document.forms["myForm"]["mobno"].value;
    if(y==""){
        alert("mobno required");
        return false;
    }
    var c= document.forms["myForm"]["compname"].value;
    if(c==""){
        alert("company name required");
        return false;
    }
    var d= document.forms["myForm"]["email"].value;
    if(d==""){
        alert("email required");
        return false;

    }
    var e= document.forms["myForm"]["pass"].value;
    if(e==""){
        alert("password required");
        return false;
    }


}