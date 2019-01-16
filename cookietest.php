<?php
    $cookie_name="user";
    $cookie_value="Harry Potter";
    setcookie($cookie_name, $cookie_value, time()+(86400*30), "/");//86400=1 day
?>
<html>
    <body>
        <?php
            if(!isset($_COOKIE[$cookie_name])){
                echo("the cookie named ".$cookie_name." is not set");
            }else{
                echo("Cookie ".$cookie_name." is set<br>");
                echo("Value is ".$_COOKIE[$cookie_name]);
            }
        ?>
    </body>
</html>