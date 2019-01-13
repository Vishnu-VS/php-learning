<html>
    <body>
        <?php
            //define error variables
            $nameerr=$emailerr=$websiteerr=$gendererr=$commenterr="";
            //define old variables also because they will be used for keeping the values in the form
            $name=$email=$website=$gender=$comment=""; 
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(empty($_POST["name"])){
                    $nameerr="Name is required";
                }
                else{
                    $name=test_input($_POST["name"]);
                    //check name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                        $nameerr = "Only letters and white space allowed"; 
                    }
                }
                if(empty($_POST["email"])){
                    $emailerr="Email is required";
                    
                }
                else{
                    $email=test_input($_POST["email"]);
                    // check if e-mail address is well-formed
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailerr = "Invalid email format"; 
                    }
                }
                if(empty($_POST["website"])){
                    $website="";
                }
                else{
                    $website=test_input($_POST["website"]);
                    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                        $websiteerr = "Invalid URL"; 
                    }
                }
                if(empty($_POST["comment"])){
                    $comment="";
                }
                else{
                    $comment=test_input($_POST["comment"]);
                }
                if(empty($_POST["gender"])){
                    $gendererr="Gender is required";
                }
                else{
                    $gender=test_input($_POST["gender"]);
                }
            }
            function test_input($data){
                $data=trim($data);
                $data=stripslashes($data);
                $data=htmlspecialchars($data);
                return $data;
            }  
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
            name:<input type="text" name="name" value="<?php echo $name;?>">
            <span class="error">*<?php echo $nameerr;?></span>
            <br><br>

            email:<input type="text" name="email" value="<?php echo $email;?>">
            <span class="error">*<?php echo $emailerr;?></span>
            <br><br>
            
            website:<input type="text" name="website" value="<?php echo $website;?>">
            <span class="error"><?php echo $websiteerr;?></span>
            <br><br>

            comment:<textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
            <br><br>

            Gender: 
            <input type="radio" name="gender" <?php if(isset($gender)&&$gender=="female")echo "checked";?> value="female">female
            <input type="radio" name="gender" <?php if(isset($gender)&&$gender=="male")echo "checked";?> value="male">male
            <span class="error">*<?php echo $gendererr;?></span>
            <br><br><br>
            <input type="submit" name="submit" value="Submit">
        </form> 
        
    </body>
</html>