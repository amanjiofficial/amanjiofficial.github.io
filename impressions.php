<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.center {
    position: absolute;
    width: 100px;
    height: 50px;
    top: 80%;
    left: 44%;
    margin-left: -50px; /* margin is -0.5 * dimension */
    margin-top: -25px;
	font-size: 100px;
    font-family: "Luminari", fantasy;
	color: white;
}
p.footer{

font-size: 25px;
color: white;
}
.bg {
            width: 100%;
            height: 100%;
            max-height: 100%;
            margin: 0;
            padding: 0;
            background-image: url('impressionbg.jpg');
            background-size:100% 100%;
            background-repeat: no-repeat;
        }
.buttonx {
    border: none;
    padding: 10px 50px;
    text-align: center;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button4 {
    background-color: black;
    color: white;
    border: 0px solid #555555;
}

.button4:hover {
    background-color: #555555;
    color: white;
}
.buttony {
    padding: 10px 50px;
    text-align: center;
    display: inline-block;
    background-color: black;
    color: white;
   font-size: 18px;
    margin: 15px 2px;
	line-height: 150%;
}
#navbar{
width: 100%;
height: 8%;
background-color: black;
color: white;
top: 0;
position: fixed;
font-size: 30px;
}
section{
width: 100%;
height: 120%;

}
h1{
color: white;
 font-family: Lucida, sans-serif;
font-weight: 100;
font-size: 70px;
}
h2{
color: white;
 font-family: Lucida, sans-serif;
font-weight: 100;
font-size: 40px;
float: center;
}
div.gallery {
    margin: 25px;
    border: 10px solid #ccc;
    float: left;
    width: 420px;
    height: 300px;
}


input[type=submit] {
    background-color: white;
    color: black;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.descriptionevents
 {
   font-family: "Seaweed Script";
   color: #fff;
   text-align:left;
   font-size: 25px;
   position: relative;
   margin:5;
}

div.gallery:hover {
    border: 10px solid #777;
}

div.gallery img {
    width: 100%;
    height: 100%;
}
a{
color: white;}
</style>

</head>
<body bgcolor="black">
<section id="home">
<div class="bg">
</div>
<center>
<div id="navbar">
<a href="webpg.php" ><button class="buttonx button4" style="float:left; font-size : 30px; font-weight: 300">&nbsp &larr;</button></a>
<a href="#home" ><button class="buttonx button4">&nbsp Home </button></a>
<a href="#events" ><button class="buttonx button4">&nbsp Events &nbsp</button></a>
<a href="#gallery" ><button class="buttonx button4">&nbsp  Gallery &nbsp</button></a>
</div>
</center>
<div class="center"><b>Impressions'19</b></div>
</section>
<section id="events">
<h1><center>EVENTS</center></h1>
<hr>


<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fjiit.impressions%2Fvideos%2F1476285479154721%2F&show_text=0&width=560" width="450" height="315" style="float: right" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>


<p class="descriptionevents"><span>
<?php

echo "<br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mydb";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$sql_a="Select VENUE,START_DATE,END_DATE,COMP_NAME,DESCRIPTION from competition where TYPE='IMPRESSIONS'";
$result=$conn->query($sql_a);
if($result->num_rows>0)
{
    #output each row
    while ($row=$result->fetch_assoc())
    {

      echo  "•	"."<font size=+3 align=left>".$row["COMP_NAME"] ."</font>". "<br>".$row["DESCRIPTION"]."<br>"."DATE :  ".$row["START_DATE"]." - ".$row["END_DATE"]."<br>"."VENUE : ".$row["VENUE"]."<br>"."<br>"."</font>";
    }     // code...

}
$conn->close();
?>
<form action="registerimp.php">
<center><input type="submit" value="Register"></center>
</form>
</section>


<section id="gallery">
<h1><center>GALLERY</center></h1>
<hr>
<div class="gallery">
  <a target="_blank" href="im1.jpg">
    <img src="im1.jpg" alt="5Terre" width="700" height="450">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="im2.jpg">
    <img src="im2.jpg" alt="Forest" width="700" height="450">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="im3.jpg">
    <img src="im3.jpg" alt="Northern Lights" width="700" height="450">
  </a>

</div>

<div class="gallery">
  <a target="_blank" href="im4.jpg">
    <img src="im4.jpg" alt="Mountains" width="600" height="400">
  </a>
</div>
<div class="gallery">
  <a target="_blank" href="im5.jpg">
    <img src="im5.jpg" alt="5Terre" width="600" height="400">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="im6.jpg">
    <img src="im6.jpg" alt="Forest" width="600" height="400">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="im7.jpg">
    <img src="im7.jpg" alt="Northern Lights" width="600" height="400">
  </a>

</div>

<div class="gallery">
  <a target="_blank" href="im8.jpg">
    <img src="im8.jpg" alt="Mountains" width="600" height="400">
  </a>
</div>
<div class="gallery">
  <a target="_blank" href="im10.jpg">
    <img src="im10.jpg" alt="Mountains" width="600" height="400">
  </a>
</div>
</section>
<h2>CONTACT</h2>
<hr>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.000944530171!2d77.3698669149142!3d28.629733790958745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce551491b3ce7%3A0x7335d9fcfd4d9db0!2sJAYPEE+INSTITUTE+OF+INFORMATION+TECHNOLOGY!5e0!3m2!1sen!2sin!4v1541842112311" width="500" height="200" frameborder="0" style="float: right" allowfullscreen></iframe>

<p class="footer">&#9993; Email: impressions@gmail.com</p>
<p class="footer">&#9743; Phone: 8587863645 (Rohan Khurana)</p>
<p class="footer"><a href="https://www.facebook.com/jiit.impressions/"><i class="fa fa-facebook-official" style="font-size:35px;color:white"></i>&nbsp</a>Visit our website</p>
</body>
</html>
