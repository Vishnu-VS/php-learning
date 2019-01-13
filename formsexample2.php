<html>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
            name:<input type="text" name="name"><br><br>
            email:<input type="text" name="email"><br><br>
            website:<input type="text" name="website"><br><br>
            comment:<textarea name="comment" rows="5" cols="40"></textarea><br><br>
            Gender: 
            <input type="radio" name="gender" value="female">female
            <input type="radio" name="gender" value="male">male
            <br><br><br>
            <input type="submit">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $name=$_REQUEST['fname'];
                if(empty($name)){
                    echo "Name is empty";
                }
                else{
                    echo $name;
                }
            }
        ?>
    </body>
</html>