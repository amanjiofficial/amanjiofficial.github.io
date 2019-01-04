<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "mydb");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
      $hub= mysqli_real_escape_string($link, $_POST['hname']);

      $type=mysqli_real_escape_string($link,$_POST['imp/cyb']);


    $option=mysqli_real_escape_string($link,$_POST['type']);

      $sdate = mysqli_real_escape_string($link, $_POST['startdate']);
      $edate = mysqli_real_escape_string($link, $_POST['enddate']);
        $venue= mysqli_real_escape_string($link, $_POST['venue']);
        $regfees = mysqli_real_escape_string($link, $_POST['regfees']);

        if($option=="workshop")
        {
            $sql_a="insert into workshop(`HUB_NAMES`,`START_DATE`, `END_DATE`, `FEES`, `VENUE`) values ('$hub','$sdate','$edate','$regfees','$venue')";

            if(mysqli_query($link, $sql_a))
            {
              echo "<script type='text/javascript' language='JavaScript'>
              alert('REGISTRATION NOT SUCCESFULL');
              </script>";
            } else{
              echo "<script type='text/javascript' language='JavaScript'>
              alert('REGISTRATION SUCCESSFULL');
              </script>";


          }
}
else
 {

   $sql_b="insert into competition(`START_DATE`, `END_DATE`,`HUB_NAMES`,`TYPE`, `VENUE`,`FEES`) values ($sdate','$edate','$hub','$type','$venue','$regfees')";

   if(mysqli_query($link, $sql_b))
   {
     echo "<script type='text/javascript' language='JavaScript'>
     alert('REGISTRATION NOT SUCCESFULL');
     </script>";
   } else
   {
     echo "<script type='text/javascript' language='JavaScript'>
     alert('REGISTRATION SUCCESSFULL');
     </script>";


 }

}


mysqli_close($link);
?>
