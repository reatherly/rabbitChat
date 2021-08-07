//Any thing that is between two / (e.g. /mail/) is a variable that must be changed to math your Myaql Table. 

<!DOCTYPE html>
<?php
$con = Mysqli_connect("", "", "", "");
if (Mysqli_connect_errno()) {
  echo "Failed to connect to DB. Please check your connection info." . Mysqli_connect_errno;
  // Only if there is an error.
}
//Declaring Variable for Register form
$fname = "";
$lname = "";
$em = "";
$emc = "";
$pass = "";
$passc = "";
$date = "";
$error_array = "";

if(isset($_POST['register_button'])) {

  // To handle the registration form
}
  // First Name Values
  $fname = strip_tags($_POST['reg_fname']);
  $fname = str_replace(' ', '', $fname);
  $fname = ucfirst(strtolower($fname));

  // Last Name Values
  $lname = strip_tags($_POST['reg_lname']);
  $lname = str_replace(' ', '', $lname);
  $lname = ucfirst(strtolower($lname));

  // Registration Email Values
  $em  = strip_tags($_POST['reg_email']);
  $em = str_replace(' ', '', $em);

  // Confirm Registration Email Values
  $emc = strip_tags($_POST['reg_emailc']);
  $emc = str_replace(' ', '', $emc);

  // Registrsation Password Values
  $pass = strip_tags($_POST['reg_pass']);

  // Registration Password Confirmation Values
  $passc = strip_tags($_POST['reg_passc']);

  // Registration Date define_syslog_variables
  $date = date("m-d-Y");


  if ($em == $emc) {
}
  else {
    echo "Emails MUST match!";
  }

  if ( ($em = filter_var($em, FILTER_VALIDATE_EMAIL)) === false ) {
     echo "Invalid format";
  }

$e_check =  mysqli_query($con, "SELECT /email/ FROM /users/ WHERE email='$em'");

$num_rows = mysqli_num_rows($e_check);

if(num_rows > 0){
  echo "Email has already been registered.";
}







?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="register.php" method="post">
      <input type="text" name="reg_fname" placeholder="First Name" required>
      <br>
      <input type="text" name="reg_lname" placeholder="Last Name" required>
      <br>
      <input type="email" name="reg_email" placeholder="Email" required>
      <br>
      <input type="email" name="reg_emailc" placeholder="Confirm Email" required>
      <br>
      <input type="password" name="reg_pass" placeholder="Password" required>
      <br>
      <input type="password" name="reg_passc" placeholder="Please confirm Password" required>
      <br>
      <input type="submit" name="register_button" value="Register">
    </form>

  </body>
</html>
