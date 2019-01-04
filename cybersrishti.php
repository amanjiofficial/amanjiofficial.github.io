<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.heading{
		position: absolute;
		top: 350px;
		left: 370px;
		z-index: 1;
}
.bg {
            width: 100%;
            height: 100%;
            max-height: 100%;
            margin: 0;
            padding: 0;
            background-image: url('BACK1.jpg');
            background-size:100% 100%;
            background-repeat: no-repeat;
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

p.footer{

font-size: 25px;
color: white;
}
h2{
color: white;
 font-family: Lucida, sans-serif;
font-weight: 100;
font-size: 40px;
float: center;
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
div.gallery {
    margin: 15px;
    border: 10px solid #ccc;
    float: left;
    width: 320px;
    height: 250px;
}

div.gallery:hover {
    border: 10px solid #777;
}

div.gallery img {
    width: 100%;
    height: 100%;
}
p.heading
{
background : black;
}
input[type=submit] {
    background-color:grey ;
    color: black;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>

</head>
<body bgcolor="black">
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
<img src="cs.jpg" class="heading">

<section id="events">
<h1><center>EVENTS</center></h1>
<hr>

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
$sql_a="Select VENUE,START_DATE,END_DATE,COMP_NAME,DESCRIPTION from competition where TYPE='CYBER SRISHTI'";
$result=$conn->query($sql_a);
if($result->num_rows>0)
{
		#output each row
		while ($row=$result->fetch_assoc())
		{
			echo  "•	" . "<font size=+3 align=left>" . $row["COMP_NAME"] . "</font>" . "<br>" . $row["DESCRIPTION"] . "<br>" . "DATE :  " . $row["START_DATE"] . " - " . $row["END_DATE"] . "<br>" . "VENUE : " .$row["VENUE"] . "<br>" ."<br>". "</font>";
		}     // code...

}

$conn->close();
?>
<form action="registercyber.php">
<center><input type="submit" value="Register"></center>
</form>


</section>

<section id="gallery">
<h1><center>GALLERY</center></h1>
<hr>
<div class="gallery">
  <a target="_blank" href="1.jpg">
    <img src="1.jpg" alt="5Terre" width="700" height="450">
  </a>

</div>

<div class="gallery">
  <a target="_blank" href="5.jpg">
    <img src="5.jpg" alt="Forest" width="700" height="450">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="2.jpg">
    <img src="2.jpg" alt="Northern Lights" width="700" height="450">
  </a>

</div>

<div class="gallery">
  <a target="_blank" href="7.jpg">
    <img src="7.jpg" alt="Mountains" width="600" height="400">
  </a>
</div>
<div class="gallery">
  <a target="_blank" href="8.jpg">
    <img src="8.jpg" alt="5Terre" width="600" height="400">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="6.jpg">
    <img src="6.jpg" alt="Forest" width="600" height="400">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="3.jpg">
    <img src="3.jpg" alt="Northern Lights" width="600" height="400">
  </a>

</div>

<div class="gallery">
  <a target="_blank" href="4.jpg">
    <img src="4.jpg" alt="Mountains" width="600" height="400">
  </a>
</div>

</section>

<h2>CONTACT</h2>
<hr>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.000944530171!2d77.3698669149142!3d28.629733790958745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce551491b3ce7%3A0x7335d9fcfd4d9db0!2sJAYPEE+INSTITUTE+OF+INFORMATION+TECHNOLOGY!5e0!3m2!1sen!2sin!4v1541842112311" width="500" height="200" frameborder="0" style="float: right" allowfullscreen></iframe>

<p class="footer">&#9993; Email: cybersrishti@gmail.com</p>
<p class="footer">&#9743; Phone: 9654737727 (Naina Gupta)</p>
<p class="footer"><a href="https://www.facebook.com/cybersrishti.jiit/"><i class="fa fa-facebook-official" style="font-size:35px;color:white"></i>&nbsp</a>Visit our website</p>
</body>
</html>
