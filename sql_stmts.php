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

    $sql="DELETE FROM MyGuests WHERE id=3";

    if($conn->query($sql)===TRUE){
        echo "Record deleted succesfully";
    }else{
        echo("Error deleting record".$onn->error);
    }

    $conn->close();
?>