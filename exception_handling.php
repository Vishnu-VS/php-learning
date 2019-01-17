<?php
    function checkNum($number){
        if($number>1){
            throw new Exception("Value must be 1 or below");
        }
        return true;
    }

    //trigger exception in a try block
    try{
        checkNum(2);
        //If the exception is thrown the following line will not be shown
        echo "This line shows when there is no exception";
    }

    //catch block
    catch(Exception $e){
        echo 'Message: '.$e->getMessage();
    }
    //checknum(3);
?>