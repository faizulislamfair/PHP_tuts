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
