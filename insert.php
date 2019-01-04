<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "mydb");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $name = mysqli_real_escape_string($link, $_POST['fullname']);
      $branch = mysqli_real_escape_string($link, $_POST['country']);
      $college = mysqli_real_escape_string($link, $_POST['college']);
        $phone = mysqli_real_escape_string($link, $_POST['phoneno']);
        $enrol = mysqli_real_escape_string($link, $_POST['eno']);
    $email_address = mysqli_real_escape_string($link, $_POST['email']);
    $final = mysqli_real_escape_string($link, $_POST['competition']);


    // attempt insert query execution
    $sql = "insert into register (`ENROL`, `COMP_NAME`, `NAME`, `BRANCH`, `COLLEGE NAME`, `PHONE NO`, `EMAIL`) values ('$enrol','$final','$name','$branch','$college','$phone','$email_address')";

    if(mysqli_query($link, $sql))
    {
      echo "<script type='text/javascript' language='JavaScript'>
      alert('REGISTRATION SUCCESFULL');
      </script>";
    } else{
      echo "<script type='text/javascript' language='JavaScript'>
      alert('REGISTRATION NOT SUCCESSFULL');
      </script>";


  }

// code...}
  // close connection
    mysqli_close($link);
?>
