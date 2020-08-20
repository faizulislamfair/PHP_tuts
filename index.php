<!-- Declaring a variable -->

<?php

  $name = "kola";
  echo $name;
  echo "<br>";
  echo "<br>";

?>

<!-- Joining a variable with a string -->

<?php

 $name = "kamranga";
 echo $name." khayte tok!";


?>

 <!-- Array -->
<?php

  echo "<br>";
  echo "<br>";
  $names = array("Duck", "Luck", "Chuck");
  echo $names['1'];
  echo "<br>";
  echo "<br>";

?>

<!--kkcdscds-->

<?php
   $x = 1;
   switch ($x) {
     case 5:
          echo "The answer is 1";
       break;
     case "number":
          echo "The answer is number";
       break;
     default:
         echo "kola";
      break;
   }

 ?>

<br>
<br>

<!--- Building a calculator ----->

<form>
  <input type="text" name="num1" placeholder="Number 1">
  <input type="text" name="num2" placeholder="Number 2">
  <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
  </select>
  <br>
  <br>
  <button type="submit" name="submit" value="submit"> Calculate </button>
</form>
<p>The answer is:</p>
<?php
  if (isset($_GET['submit'])) {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];

    switch ($operator) {
      case "None":
            echo "You need to select a method!";
        break;
      case "Add":
            echo $result1 + $result2;
        break;
      case "Subtract":
            echo $result1 - $result2;
        break;
      case "Multiply":
            echo $result1 * $result2;
        break;
      case "Divide":
            echo $result1 / $result2;
        break;

    }
  }

?>


 <!--Scheduled Message Programming-->

<br>
<br>
<?php


   $dayofWeek = date("w");

   switch ($dayofWeek) {
     case 1:
       echo "It is Monday!";
       break;
       case 2:
         echo "It is Tuesday!";
         break;
         case 3:
           echo "It is Wednesday!";
           break;
           case 4:
             echo "It is Thursday!";
             break;
             case 5:
               echo "It is Friday!";
               break;
               case 6:
                 echo "It is Saturday!";
                 break;
                 case 0:
                   echo "It is Sunday!";
                   break;


   }



 ?>


<!--- Fetching with while loop ---->

<br>
<br>

<?php

 $x = 1;
 while ($x <= 5) {
   echo "You're stuck in my head<br>";
   $x++;
 }


 ?>


<!--- Foreach Loop --->

<br>
<br>


<?php

$array = array("Saquib", "Rafi", "Noman", "Shizan", "Kahaf", "Ruddro", "Turag");

foreach ($array as $loopdata) {
   echo "My name is " .$loopdata. "<br>";
}

 ?>

<!--- Displaying elements through array --->

<br><br>
<?php

 $array = array("Daniel", "Jane", "Jacob", "John", "Mariane");
 echo $array[2];

 ?>

<!--- Printing out functions --->

<br><br>

 <?php

function kola() {
  $f = 1010101010;
  echo $f;
}

kola();

  ?>


 <!--- Creating Customized Functions --->

 <br>
 <br>

<?php
 function sweet($x) {
   $sugar = $x * 0.50;
   echo "Here is 50% of what you wrote: ".$sugar ;
 }

 $x = 100;
 sweet($x);

 echo "<br>";
 echo "<br>";


 $a = 10;
sweet($a);

 ?>


 <!--- Including Documents --->

<br><br>

<?php

include "header.php";

 ?>

 <section>
   <div class="content">
     <h1>You there?</h1>
   </div>
 </section>


<!--- Super Globals --->

<!---
$GLOBALS
$_POST
$_GET
$_COOKIE
$_SESSION
--->

<br><br>


<!--- $GLOBALS --->

<?php

$x = 5;

function something() {
  $y = 10;
  echo $GLOBALS['x'];
}

something();

 ?>



<!--- GET --->

<br><br>


<form method="GET"> <!--- GET is seen on URL --->
  <input type="hidden" name="name" value="Faizul">
  <button type="submit">PRESS ME!</button>
</form>


<?php

echo $_GET['name'];

 ?>

<!--- POST --->

<br><br>

<form method="post">
  <input type="hidden" name="name" value="Saquib">
  <button type="submit">PRESS ME!</button>
</form>

<?php

echo $_POST['name'];

 ?>

 <!---
 $_COOKIE
 $_SESSION variable
 --->

 <?php

setcookie("name", "Daniel", time() + 86400);

$_SESSION['name'] = "12";

  ?>

<br><br>


<!--- Starting a session variable --->

<?php

  session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="contact.php">CONTACT</a></li>
    </ul>



<?php

$_SESSION['username'] = "faizulislam";
echo $_SESSION['username'];

echo "<br><br>";

if (!isset($_SESSION['username'])) {
    echo "You are not logged in!";
} else {
  echo "You are logged in!";
}

?>

  </body>
</html>
