<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

   //Hashing

   /*echo "test123";
   echo "<br>";
   echo password_hash("test123", PASSWORD_DEFAULT);*/

 //Dehashing

$input = "test123";
$hashedPwdInDb =  password_hash("test123", PASSWORD_DEFAULT);

echo password_verify($input, $hashedPwdInDb);

 ?>

  </body>
</html>
