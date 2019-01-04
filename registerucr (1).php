<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" type="text/javascript">
    function dropdownlist(listindex)
    {
document.myForm.status.options.length = 0;
        switch (listindex)
        {
        case "workshop" :
            document.myForm.status.options[0]=new Option("Select status","");
            document.myForm.status.options[1]=new Option("LFR","lfr");
            break;
        case "competition" :
            document.myForm.status.options[0]=new Option("Select status","");
            document.myForm.status.options[1]=new Option("EL-ASSESINO","el-assesino");
            document.myForm.status.options[2]=new Option("IC3-PROJECT EXHIBITION","ic3project");
	    document.myForm.status.options[3]=new Option("ROBOWARS","robowars");
            break;
        }
        return true;
    }
    function checkEmail()
    {
    var x=document.myform.email.value;
    var atposition=x.indexOf("@");
    var dotposition=x.lastIndexOf(".");
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){
      alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);
      return false;
      }
    }
    function checkPhone() {
            var phone = document.forms["myForm"]["phone"].value;
            var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
                if(phone.value.match(phoneNum)) {
                    return true;
                }
                else {
                    document.getElementById("phone").className = document.getElementById("phone").className + " error";
                    return false;
                }
            }

function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
var z = document.forms["myForm"]["eno"].value;
var p = document.forms["myForm"]["college"].value;
var q = document.forms["myForm"]["email"].value;
var r = document.forms["myForm"]["phoneno"].value;
var y = document.forms["myForm"]["source"].value;
var s = document.forms["myForm"]["status"].value;
    if (x == "" ) {
        alert("Name must be filled out");
        return false;
    }
    else if (z == "" ) {
        alert("enrollment no must be filled out");
        return false;
    }
    else if (p == "" ) {
        alert("college must be filled out");
        return false;
    }
    else if (q == "" ) {
        alert("email must be filled out");
        return false;

    }
    else if (r == "" ) {
        alert("phone no. must be filled out");
        return false;

    }
    else if (y == "" ) {
        alert("tyoe must be filled out");
        return false;
    }
    else if (s == "" ) {
        alert("workshop/competition must be filled out");
        return false;
    }
}

</script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
.box {
      background-color: #181818;
      height: 150%;
      position: absolute;
      top: 5;
      float: center;
      width: 60%;
      border: 5px solid white;
       margin-left: 300px;

}
input[type=text], select, textarea {
    width: 30%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: black;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: grey;
}

.container {
    border-radius: 5px;
    padding: 20px;
}
h1{
color: white;
}
h3{
color:white;
}
</style>
</head>
<body background="gallery.jpg">
<center>
<h1>Register</h1>
<h3>Fill this form to Register for the event</h3>
<hr>
<div class="box">
<div class="container">
  <form name="myForm" action="/action_page.php"
onsubmit="return (validateForm() && checkEmail() && checkPhone())" method="post">
    <label for="fname"><h3>Full Name*</h3></label>
    <input type="text" id="fname" name="fullname" placeholder="Your name..">


    <label for="eno"><h3>Enrollment number*</h3></label>
    <input type="text" id="eno" name="eno" placeholder="Your Enrollment no.."><br>

    <label for="Branch"><h3>Branch</h3></label>
    <select id="branch" name="country">
      <option value="CSE">CSE</option>
      <option value="IT">IT</option>
      <option value="ECE">ECE</option>
    </select><br>


    <label for="college"><h3>College*</h3></label>
    <select id="college" name="college">
      <option value="JIIT sec-62">JIIT Sec-62</option>
      <option value="JIIT sec-128">JIIT Sec-128</option>
    </select><br>

    <label for="email"><h3>Email Id*</h3></label>
    <input type="text" id="email" name="email" placeholder="Your Email Id.."><br>


    <label for="phoneno"><h3>Phone No.*</h3></label>
    <input type="text" id="phoneno" name="phoneno" placeholder="Your Phone No.."><br>
<br>


<h3>Workshop/Competition :</h3>
 <select name="source" id="source" onchange="javascript: dropdownlist(this.options[this.selectedIndex].value);">
 <option value="">Select workshop/competition</option>
 <option value="workshop">workshop</option>
 <option value="competition">competition</option>
 </select>
 <h3>Name of workshop/event :</h3>
<script type="text/javascript" language="JavaScript">
 document.write('<select name="status"><option value="">Select name</option></select>')
 </script>
 <noscript><select name="status" id="status" >
 <option value="">Select name</option>
 </select>
 </noscript>
<br>
    <input type="submit" value="Submit">
  </form>
</div>
</div>
</center>
</body>
</html>
