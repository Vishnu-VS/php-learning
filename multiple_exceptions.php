<?php
    class customException extends Exception{
        public function errorMsg(){
            $errorMessage='Error on line '.$this->getLine().' in'.$this->getFile().': <b>'.$this->getMessage().'</b> is not valid email address.';
            return $errorMessage;
        }
    }
    $email="someone@example.com";
    try{
        if(filter_var($email,FILTER_VALIDATE_EMAIL)===FALSE){
            throw new customException($email);
        }
        if(strpos($email,"example")!==FALSE){
            throw new Exception("$email is an example email");
        }
    }
    catch(customException $e){
        echo $e->errorMsg();
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
?>