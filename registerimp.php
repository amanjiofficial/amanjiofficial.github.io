<!DOCTYPE html>
<html>
<head>
<script>
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
  <form name="myForm" action="insert.php"
onsubmit="return validateForm()" method="post">
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
<h3> Competition: </h3>
<select id="competition" name="competition">
<option value="">Select competition</option>
<option value="CODE-A-THON">CODE-A-THON</option>
<option value="EL-ASSESINO">EL-ASSESINO</option>
<option value="TREASURE HUNT">TREASURE HUNT</option>
<option value="ROBO-HOME">ROBO-HOME</option>
</select>
<br>
    <input type="submit" value="Submit">
  </form>
</div>
</div>
</center>
</body>
</html>
