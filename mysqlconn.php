<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="myDB";

    //create connection
    $conn=new mysqli($servername,$username,$password,$dbname);

    //check connection
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    echo "Connected succesfully";

    //create table
    $sql="CREATE TABLE MyGuests(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
        )";

    if($conn->query($sql)===TRUE){
        echo "Table MyGuests created succesfully";
    }else{
        echo "Error creating tables ".$conn->error;
    } 

    $conn->close();
?>