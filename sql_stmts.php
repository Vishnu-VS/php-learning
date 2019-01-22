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

    $sql="UPDATE MyGuests SET lastname='Doe' WHERE id=2";

    if($conn->query($sql)===TRUE){
        echo "Record updated succesfully";
    }else{
        echo("Error updating record".$conn->error);
    }

    $conn->close();
?>