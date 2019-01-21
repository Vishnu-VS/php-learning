<?php
    $servername="localhost";
    $username="username";
    $password="password";

    //create connection
    $conn=new mysqli($servername,$username,$password);

    //check connection
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    echo "Connected succesfully";

    //create database
    $sql="CREATE DATABASE myDB";
    if($conn->query($sql)===TRUE){
        echo "Database created succesfully";
    }else{
        echo "Error creating database ".$conn->error;
    }
    $conn->close();
?>