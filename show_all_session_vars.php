<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
        print_r($_SESSION);//print_r is used to print arrays.
        $_SESSION["favcolor"]="green";
        print("<br><br>");
        print_r($_SESSION);
        session_unset();
        session_destroy();
        print("<br><br>");
        print_r($_SESSION);
        ?>
    </body>
</html>