<?php

echo "<br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname="hackathon";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error)
{
		die("Connection failed: " . $conn->connect_error);
}
$sql_a="Select INDIVIDUAL,NGO NAME,TAKEN AMOUNT from donations ";
$result=$conn->query($sql_a);
if($result->num_rows>0)
{
		#output each row
		while ($row=$result->fetch_assoc())
		{
			$web=$row["WEBSITE"];
			echo  "<br>"."•	" . "<font size=+3 align=left>" . $row["NAME"] . "</font>" . "<br>" . $row["DESCRIPTION"] . "<br>" . $row["WORK"] ."<br>"."WEBSITE:- " .$row["WEBSITE"] . "<br>" ."</font>";
      echo "<a href='$web'>"."TO KNOW MORE"." </a>";

    }     // code...

}

$conn->close();
?>
