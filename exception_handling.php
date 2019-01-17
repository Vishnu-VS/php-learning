<?php
    /*function checkNum($number){
        if($number>1){
            throw new Exception("Value must be 1 or below");
        }
        return true;
    }*/
    class customException extends Exception{
        public function errorMessage(){
            //err msg
            $errorMsg='Error on line '.$this->getLine().'in '.$this->getFile().' :<b>'.$this->getMessage().'</b> is not valid E-Mail address';
            return $errorMsg;
        }
    }
    //trigger exception in a try block
    $email="someone@example...com";
    try{
        //checkNum(2);
        //If the exception is thrown the following line will not be shown
        //echo "This line shows when there is no exception";
        if(filter_var($email,FILTER_VALIDATE_EMAIL)===FALSE){
            throw new customException($email);
        }
    }

    //catch block
    catch(customException $e){
        echo $e->errorMessage();
    }
    //checknum(3);
?>