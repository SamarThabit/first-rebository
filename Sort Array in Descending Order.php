<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
$cars=array("Volvo","BMW","Toyota");
rsort($cars);

$clength=count($cars);
for($x=0;$x<$clength;$x++)
   {
   echo $cars[$x];
   echo "<br>";
   }
echo "<br>";

$numbers=array(4,6,2,22,11);
rsort($numbers);

$arrlength=count($numbers);
for($x=0;$x<$arrlength;$x++)
   {
   echo $numbers[$x];
   echo "<br>";
   } 
   ?>   
<a href="sorting array.php">sorting array</a>
    </body>
</html>
