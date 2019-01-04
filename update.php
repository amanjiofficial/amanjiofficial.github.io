<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
    var x = document.forms["myForm"]["eventname"].value;
var y = document.forms["myForm"]["imp/cyb"].value;
var z = document.forms["myForm"]["startdate"].value;
var p = document.forms["myForm"]["enddate"].value;
var q = document.forms["myForm"]["venue"].value;
var r = document.forms["myForm"]["regfees"].value;
var m = document.forms["myForm"]["type"].value;
var n = document.forms["myForm"]["hname"].value;
    if (x == "" ) {
        alert("event Name must be filled out");
        return false;
    }
    else if (y == "" ) {
        alert("impressions/cybersrishti must be filled out");
        return false;
    }
    else if (z == "" ) {
        alert("startdate must be filled out");
        return false;
    }
    else if (p == "" ) {
        alert("enddate must be filled out");
        return false;
    }
    else if (q == "" ) {
        alert("venue must be filled out");
        return false;
    }
    else if (r == "" ) {
        alert("regfees must be filled out");
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
      height: 170%;
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
  <form name="myForm" action="insertdata.php"
onsubmit="return validateForm()" method="post">
    <label for="hname"><h3>Hub Name*</h3></label>
       <select id="hname" name="hname">
	<option value="">Select hub name</option>
      <option value="Microcontroller Based Systems and Robotics Hub">Robotics</option>
      <option value="IEEE Student Branch JIIT">IEEE</option>
    </select><br>

    <label for="eventname"><h3>Event Name*</h3></label>
    <input type="text" id="eventname" name="eventname" placeholder="Event name..">

    <label for="Type"><h3>Type*</h3></label>
    <select id="type" name="type">
      <option value="competition">Competition</option>
      <option value="workshop">Workshop</option>
    </select><br>

    <label for="imp/cyb"><h3>Impression/Cyber Srishti*</h3></label>
    <select id="imp/cyb" name="imp/cyb">
	<option value=""> Select which type</option>
      <option value="IMPRESSIONS">Impressions</option>
      <option value="CYBERSRISHTI">CyberSrishti</option>
	<option value="NEITHER">Neither</option>
    </select><br>

    <label for="startdate"><h3>Start Date*</h3></label>
    <input type="text" id="Sdate" name="startdate" placeholder="Start date.."><br>

    <label for="enddate"><h3>End Date*</h3></label>
    <input type="text" id="Edate" name="enddate" placeholder="End date.."><br>

    <label for="venue"><h3>Venue*</h3></label>
    <input type="text" id="Venue" name="venue" placeholder="Venue.."><br>

    <label for="regfees"><h3>Registration Fees*</h3></label>
    <input type="text" id="regfees" name="regfees" placeholder="Registration fees.."><br>

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
