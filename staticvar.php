<?php
    function incr(){
        static $var=1;
        $var++;
        echo "$var\n";
    }
    incr();
    incr();
    incr();
?>