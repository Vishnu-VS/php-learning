<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            //echo session variables that were set on previous page
            echo "Favourite color is ".$_SESSION["favcolor"]."<br>";
            echo "Favourite animal is ".$_SESSION["favanimal"]."<br>";
        ?>
    </body>
</html>