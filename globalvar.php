<?php
    $somevar=10;
    function additions(){
        GLOBAL $somevar;
        $somevar++;
        print("Somevar is $somevar");
    }
    additions();
?>