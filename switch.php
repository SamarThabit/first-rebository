
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
$favcolor="white";
switch ($favcolor)
{
case "red":
   echo "Your favorite color is red!";
   break;
case "blue":
   echo "Your favorite color is blue!";
   break;
case "green":
   echo "Your favorite color is green!";
   break;
default:
   echo "Your favorite color is neither red, blue, or green!";
}
?>
        <br>
        <a href="main.php"> back</a>

    </body>
</html>
