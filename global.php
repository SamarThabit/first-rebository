

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
       <?php
$x=5; // global scope
$y=10; // global scope

function myTest()
{
global $x,$y;
$y=$x+$y;
} 

myTest(); // run function
echo $y; // output the new value for variable $y
?>
        <br>
        <a href="variables.php"> variable main </a>

    </body>
</html>
