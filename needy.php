<html>
<head>
<style>
.error {color: #FF0000;}

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
p{
  color:white;
}
</style>

</head>
<body bgcolor="black">
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr =$phoneno= "";
$name = $email = $gender = $comment =  $phoneErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/[a-zA-Z1-9]+/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["phoneno"])) {
    $nameErr = "Contact no. is required";
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }



  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<center><h1>Fill form to take help from NGO:</h1></center>
<p><center><span class="error">* required field</span></center></p>
<center>
<form method="post" action="NEEDYCHECK.php">
  <p>Name: </p><input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <p>E-mail:</p> <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <p>Contact Number: </p><input type="text" name="phoneno" value="<?php echo $phoneno;?>">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>

  <p>Requirment:</p> <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>

  <p>Gender:</p>
<p>  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other</p>
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  <p>NGO List :</p>
  <br>
            <select name="ngoval">
  <option value="HAI">HELP AGE INDIA</option>
  <option value="FMCH">FMCH INDIA</option>
  <option value="HCFI">HCFI</option>
</select>
<br><br>
 <input type="submit" name="submit" value="Submit">

</form>
</center>


</body>
</html>
