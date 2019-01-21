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
    $sql="INSERT INTO MyGuests (firstname,lastname,email)
    VALUES ('Jane','Doe','jane@example.com');";//each statement seperated by semicolon except last one

    $sql.="INSERT INTO MyGuests (firstname,lastname,email)
    VALUES ('Jamie','Doe','jamie@example.com')";
    
    $conn->multi_query($sql);
    
    $last_id=$conn->insert_id;
    echo $last_id;
    $conn->close();
?>