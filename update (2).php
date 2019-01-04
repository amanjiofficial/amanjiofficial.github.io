<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
var y = document.forms["myForm"]["lname"].value;
var z = document.forms["myForm"]["eno"].value;
var p = document.forms["myForm"]["college"].value;
var q = document.forms["myForm"]["email"].value;
var r = document.forms["myForm"]["phoneno"].value;
var m = document.forms["myForm"]["type"].value;
var n = document.forms["myForm"]["hname"].value;
    if (x == "" ) {
        alert("Name must be filled out");
        return false;
    }
    else if (y == "" ) {
        alert("last name must be filled out");
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
    if (m == "" ) {
        alert("type must be filled out");
        return false;
    }
    if (n == "" ) {
        alert("hub name must be filled out");
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
<h1>UPDATION FORM</h1>
<h3>Fill this form to add events.</h3>
<hr>
<div class="box">
<div class="container">
  <form name="myForm" action="/action_page.php"
onsubmit="return validateForm()" method="post">
    <label for="hname"><h3>Hub Name</h3></label>
    <input type="text" id="fname" name="hubname" placeholder="Hub name..">

    <label for="fname"><h3>Event Name</h3></label>
    <input type="text" id="fname" name="eventname" placeholder="Event name..">

    <label for="Type"><h3>Type*</h3></label>
    <select id="type" name="type">
      <option value="competition">Competition</option>
      <option value="workshop">Workshop</option>
    </select><br>

    <label for="lname"><h3>Start Date</h3></label>
    <input type="text" id="Sdate" name="startdate" placeholder="Start date.."><br>

    <label for="eno"><h3>End Date</h3></label>
    <input type="text" id="Edate" name="enddate" placeholder="End date.."><br>

    <label for="eno"><h3>Venue</h3></label>
    <input type="text" id="Venue" name="venue" placeholder="Venue.."><br>

    <label for="email"><h3>Registration Fees</h3></label>
    <input type="text" id="rfees" name="regfees" placeholder="Registration fees.."><br>

    <label for="description" name="desc"><h3>Description</h3></label>
    <textarea rows="4" cols="50"> </textarea>

<br>
    <input type="submit" value="Submit">
  </form>
</div>
</div>
</center>
</body>
</html>
