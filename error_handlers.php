<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Error Handlers</title>
  </head>
  <body>
<h2>Signup</h2>
<form action="includes/error_up.php" method="POST">
  <?php
    if(isset($_GET['first'])) {
      $first = $_GET['first'];
      echo '<input type="text" name="first" placeholder="First Name" value="'.$first.'">';
    }
    else {
      echo '<input type="text" name="first" placeholder="First Name">';
    }

    echo "<br>";


    if(isset($_GET['last'])) {
      $last = $_GET['last'];
      echo '<input type="text" name="last" placeholder="Last Name" value="'.$last.'">';
    }
    else {
      echo '<input type="text" name="last" placeholder="Last Name">';
    }
    echo "<br>";

   ?>
  <input type="text" name="email" placeholder="E-mail"> <br>
 <?php

 if(isset($_GET['uid'])) {
   $uid = $_GET['uid'];
   echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'">';
 }
 else {
   echo '<input type="text" name="uid" placeholder="Username">';
 }
 echo "<br>";

  ?>

  <input type="password" name="pwd" placeholder="Password"> <br>
  <button type="submit" name="submit">Sign Up</button>
</form>

<?php

/*  $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if (strpos($fullUrl, "signup=empty") == true) {
    echo "<p>You did not fill in all fields!</p>";
    exit();
  }
  elseif (strpos($fullUrl, "signup=char") == true) {
    echo "<p>You used invalid characters!</p>";
    exit();
  }
  elseif (strpos($fullUrl, "signup=email") == true) {
    echo "<p>You used an invalid e-mail!</p>";
    exit();
  }
  elseif (strpos($fullUrl, "signup=success") == true) {
    echo "<p>You have been signed up!</p>";
    exit();
  }
  */

 if (!isset($_GET['signup'])) {
   exit();
 }
 else {
   $signupCheck = $_GET['signup'];

   if ($signupCheck == "empty") {
     echo "<p>You did not fill in all fields!</p>";
     exit();
   }
   elseif ($signupCheck == "char") {
     echo "<p>You used invalid characters!</p>";
     exit();
   }
   elseif ($signupCheck == "email") {
     echo "<p>You used an invalid e-mail!</p>";
     exit();
   }
   elseif ($signupCheck == "success") {
     echo "<p>You have been signed up!</p>";
     exit();
   }
 }


 ?>

  </body>
</html>
