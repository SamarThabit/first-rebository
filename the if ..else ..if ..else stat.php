

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
            $t=date("h");
            if($t<"10")
            {
                echo "have a good morning";
            }
            else {
                if($t<"20")
                {
                    echo "have a good day";

                }
                else {
                    echo "have agood night";
                }
            }


?>
        <br>
         <a href="main if and else.php">back</a>
    </body>
</html>
