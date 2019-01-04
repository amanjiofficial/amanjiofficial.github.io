
<!DOCTYPE html>
<html>

<head>
  <body background="gallery.jpg">


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

echo "<font size='+3' align ='center' color='grey'> COMPETITIONS </font>"."<br>";
$sql="SELECT COMP_NAME,START_DATE,END_DATE,DESCRIPTION FROM competition where START_DATE>(SELECT CURDATE())";
$result=$conn->query($sql);
if($result->num_rows>0)
{
    #output each row
    while ($row=$result->fetch_assoc())
    {

      echo  "•	"."<font size=+2 align=left color='white'>".$row["COMP_NAME"] ."</font>". "<br>"."<font color='white'>".$row["DESCRIPTION"]."<br>"."DATE :  ".$row["START_DATE"]." - ".$row["END_DATE"]."<br>"."<br>"."</font>";
    }     // code...

}echo "<hr>"."<font size='+3' align ='center' color='grey'> WORKSHOPS </font>"."<br>";

$sql="SELECT WORKS_NAME,START_DATE,END_DATE,DESCRIPTION FROM workshop where START_DATE>(SELECT CURDATE())";
$result=$conn->query($sql);
if($result->num_rows>0)
{
    #output each row
    while ($row=$result->fetch_assoc())
    {

      echo  "•	"."<font size=+2 align=left color='white'>".$row["WORKS_NAME"] ."</font>". "<br>"."<font color='white'>".$row["DESCRIPTION"]."<br>"."DATE :  ".$row["START_DATE"]." - ".$row["END_DATE"]."<br>"."<br>"."</font>";
    }     // code...

}
echo "<hr>";

$conn->close();
?>
</body>
</head>
</html>
