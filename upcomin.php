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


$SQL="SELECT COMP_NAME,START_DATE,END_DATE,DESCRIPTION FROM competition where START_DATE>(SELECT CURDATE())";

$result=$conn->query($sql);
if($result->num_rows>0)
{
    #output each row
    while ($row=$result->fetch_assoc())
    {

      echo  "•	"."<font size=+3 align=left>".$row["COMP_NAME"] ."</font>". "<br>".$row["DESCRIPTION"]."<br>"."DATE :  ".$row["START_DATE"]." - ".$row["END_DATE"]."<br>"."<br>"."</font>";
    }     // code...

}
$conn->close();
?>
