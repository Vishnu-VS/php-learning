<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="myDB";

    //create connection
    $conn=new mysqli($servername,$username,$password,$dbname);

    //check connection
    if($conn->connect_error){
        die("Unsuccesful connection:Connection failed: ".$conn->connect_error);
    }

    //prepare and bind
    $stmt=$conn->prepare("INSERT INTO MyGuests (firstname,lastname,email) VALUES (?,?,?)");
    $stmt->bind_param("sss",$firstname,$lastname,$email);

    //set parameters and execute
    $firstname="Johnnie";
    $lastname="doe";
    $email="john@example.com";
    $stmt->execute();

    echo "new records created succesfully";

    $stmt->close();
    $conn->close();
?>