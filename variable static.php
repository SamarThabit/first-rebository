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

 function myTest()
 {
static $x=0;
 echo $x;
 $x++;
 }

 myTest();
 myTest();
 myTest();

 ?> 

    </body>
</html>
