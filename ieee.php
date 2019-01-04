<!DOCTYPE html>
<html>

<head>
<title>IEEE</title>
<style>
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

body{
	margin: 0px;
	border: 0px;
}
p.ex1 {
	font-size: 55px;
    	padding-left: 10px;
}
p.ex2 {
	padding-top: 30px;
    	padding-left: 230px;
	padding-right: 45px;
	color: white;
	font-size: 20px;
}
h1.ex1 {
	padding-left: 230px;
	color: white;
}
#navbar{
width: 100%;
height: 8%;
background-color: black;
color: white;
top: 0;
 margin: 0;
 padding: 0;
position: fixed;
font-size: 30px;
}
#navbar1{
width: 17%;
height: 100%;
color: white;
top: 0;
 margin: 0;-
 padding: 0;
font-size: 30px;
}


p.box {
      background-color: #181818;
      height: 90%;
      position: absolute;
      top: 5;
      float: center;
      width: 13%;
      border: 5px solid white;
       margin-left: 2px;

}
center.heading {
    position: absolute;
    width: 100px;
    height: 50px;
    top: 75%;
    left: 44%;
    margin-left: -50px; /* margin is -0.5 * dimension */
    margin-top: -25px;
	font-size: 100px;
    font-family: "Luminari", fantasy;
	color: white;
}
center.centerx{

font-size: 40px;
 background-color: #FFCC33;
}
li{
color: white;
font-size: 25px
}
div.gallery {
    margin: 10px;
    border: 10px solid #000000;
    float: left;
    width: 330px;
    height: 250px;
}

div.gallery:hover {
    border: 10px solid #777;
}



div.gallery img {
    width: 100%;
    height: 100%;
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


.footer{
       position: absolute;
       text-align: left;
       bottom: 0px;
	color: white;
	font-size:25px;
	background-color: #181818;
      height: 21%;
      float: center;
      width: 13%;
      border: 5px solid white;
       margin-left: 2px;

   }
section{
width: 100%;
height: 120%;

}
h1.heading{
color: white;
 font-family: Lucida, sans-serif;
font-weight: 100;
font-size: 70px;
}
p.foot{
font-size: 30px;
color: white;
}

input[type=submit] {
    background-color: black;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

</style>
</head>
<body background="gallery1.png">
<section id="home">
<nav>
<center>
<div id="navbar">

<a href="webpg.php" ><button class="buttonx button4" style="float:left; font-size : 30px; font-weight: 300">&nbsp &larr;</button></a>
<a href="#home" ><button class="buttonx button4">&nbsp Home </button></a>
<a href="#events" ><button class="buttonx button4">&nbsp Events &nbsp</button></a>
<a href="#Coordinators" ><button class="buttonx button4">&nbsp Coordinators &nbsp</button></a>
<a href="#gallery" ><button class="buttonx button4">&nbsp  Gallery &nbsp</button></a>
<a href="#achievement" ><button class="buttonx button4">&nbsp  Achievements  &nbsp</button></a>
</div>
</center>
</nav>
<div >
  <img class="mySlides" src="55.jpg"  height="430" width="85%" style="float:right">
  <img class="mySlides" src="11.jpg"  height="430" width="85%" style="float:right">
  <img class="mySlides" src="44.jpg" height="430" width="85%" style="float:right">
  <img class="mySlides" src="33.jpg" height="430" width="85%" style="float:right">
</div>

<div id="navbar1">
<h1><p class="ex1"><img src="ieee.jpg" height=170 width=195 align="left"></img></p></h1>
<br>
</div>
</br><h1 class="ex1">IEEE STUDENT BRANCH JIIT, NOIDA</h1>
<p class="ex2">IEEE Foundation, a philanthropic partner with IEEE, supports the IEEE core purpose of fostering technological innovation and excellence for the benefit of humanity. To fulfill this role, the IEEE Foundation relies on donations to fund new and innovative programs that support educational, humanitarian, historical preservation, and peer recognition programs of IEEE.
Working together on the daily requires each individual to let the greater good of the team's work surface above their own ego.So here are a few benefits of joining IEEE-SB :- <br>
1. Get to work with the IEEE team and learn team spirit.<br>
2. Improve your technical and professional skills. <br>
3. An addition to your resume building. <br>
4. Creditworthy volunteers will be rewarded with a certificate from IEEE. <br>
5. Develop management and leadership skills for your career.<br>

 For more details, please visit http://www.ieeejiit.com

</p>
<div class="footer">
<p><center>Need help?</center>
<br>
Contact Us
<br>
ieeejiit@gmail.com
</p>
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</section>


<section id="events">
<h1 class="heading"><center>EVENTS</center></h1>
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
  $sql_a="Select START_DATE,END_DATE,VENUE,WORKS_NAME,DESCRIPTION from workshop where HUB_NAMES='IEEE Student Branch JIIT'";
  $result=$conn->query($sql_a);
  if($result->num_rows>0)
  {
      #output each row
      while ($row=$result->fetch_assoc())
      {

        echo  "*"."<font size=+3 align=left>".$row["WORKS_NAME"] ."</font>". "<br>".$row["DESCRIPTION"]."<br>" . "DATE :  " . $row["START_DATE"] . " - " . $row["END_DATE"] . "<br>" . "VENUE : " .$row["VENUE"] . "<br>" ."<br>"."</font>";
      }     // code...

  }

  $sql_ba="Select START_DATE,END_DATE,VENUE,COMP_NAME,DESCRIPTION from competition
   where HUB_NAMES='IEEE Student Branch JIIT'";
  $results=$conn->query($sql_ba);
  if($results->num_rows>0)
  {
      #output each row
      while ($rows=$results->fetch_assoc())
      {

        echo  "*"."<font size=+3 align=left>".$rows["COMP_NAME"] ."</font>". "<br>".$rows["DESCRIPTION"]."<br>" . "DATE :  " . $rows["START_DATE"] . " - " . $rows["END_DATE"] . "<br>" . "VENUE : " .$rows["VENUE"] . "<br>" ."<br>"."</font>";
      }     // code...

  }

  $conn->close();
  ?>
</span>
</p>
<form action="registerucr.php">
<center><input type="submit" value="Register"></center>
</form>
</section>

<section id="Coordinators">
<h1 class="heading"><center>COORDINATORS</center></h1>
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

  $sql_b= "Select DESIGNATION,NAME from student S , coordinator C where HUB_NAMES='IEEE Student Branch JIIT' and S.ENROL=C.ENROL";
  $result=$conn->query($sql_b);
  if($result->num_rows>0)
  {
      #output each row
      while ($row=$result->fetch_assoc())
      {
        echo  "<center class='color'>"."•"."<font size=+3 align=left color='white'>".$row["NAME"] ." - ".$row["DESIGNATION"]."</font>". "</center>". "<br>";
      }     // code...

  }

  $conn->close();
  ?>
  </span></p>
  <hr>
</section>





<section id="gallery">
<h1 class="heading"><center>GALLERY</center></h1>
<hr>
<div class="gallery">
  <a target="_blank" href="111.jpg">
    <img src="111.jpg" alt="5Terre" width="600" height="400">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="222.jpg">
    <img src="222.jpg" alt="Forest" width="600" height="400">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="333.jpg">
    <img src="333.jpg" alt="Northern Lights" width="600" height="400">
  </a>

</div>

<div class="gallery">
  <a target="_blank" href="666.jpg">
    <img src="666.jpg" alt="Mountains" width="600" height="400">
  </a>
</div>
<div class="gallery">
  <a target="_blank" href="777.jpg">
    <img src="777.jpg" alt="5Terre" width="600" height="400">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="444.jpg">
    <img src="444.jpg" alt="Forest" width="600" height="400">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="555.jpg">
    <img src="555.jpg" alt="Northern Lights" width="600" height="400">
  </a>

</div>

<div class="gallery">
  <a target="_blank" href="888.jpg">
    <img src="888.jpg" alt="Mountains" width="600" height="400">
  </a>
</div>
</section>



<section id="achievement">
<h1 class="heading"><center>ACHIEVEMENTS</center></h1>
<hr>
<p><center class="centerx">&#9733; 2018 Achievements &#9733;</center></p>
<ul>
<li>TRICOTHON
<ol>
<li>Team-Screenagers
<li>Team-codemonks
</ol>
<br>
<li>VERILOG
<ol>
<li>Team-PlayToWin
<li>Team-KillShot
</ol>
<br>
</ul>
<br>
<br>
<p><center class="centerx">&#9733; 2017 Achievements &#9733;</center></p>
<ul>
<li>BOB'S BUILD-A-THON
<ol>
<li>Team-SarTarji
<li>Team-Dollar
<li>Team-Sher e Brutus
</ol>
<br>
<li>FIFO-LIFO
<ol>
<li>Team-bits_please
<li>Team-lifo_fifo
<li>Team-codio.h
</ol>
<br>
<li>HERTZ
<ol>
<li>varnit,anubhav,kaushal
<li>rahul,shubham,pawan
<li>sahib,devanshi,shubham
<li>Tarundeep Singh
</ol>
</ul>
</section>
<p class="foot"><b>CONTACT</b></p>
<hr>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.000944530171!2d77.3698669149142!3d28.629733790958745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce551491b3ce7%3A0x7335d9fcfd4d9db0!2sJAYPEE+INSTITUTE+OF+INFORMATION+TECHNOLOGY!5e0!3m2!1sen!2sin!4v1541842112311" width="500" height="200" frameborder="0" style="float: right" allowfullscreen></iframe>
<p class="foot">&#9993; Email: ieeesbjiit@gmail.com</p>
<p class="foot">&#9743; Phone: 9582090775 (ROHAN KHURANA)</p>
</body>
</html>
