<?php
    class customException extends Exception{
        public function errorMessage(){
            $errorMsg=$this->getMessage().'is not a valid E-Mail address.';
            return $errorMsg;
        }
    }
    $email="someone@example.com";
    try{
        try{
            if(strpos($email,"example")!== FALSE){
                throw new Exception($email);
            }
        }
        catch(Exception $e){
            throw new customException($email);
        }
    }
    catch(customException $e){
        echo $e->errorMessage();
    }
?>