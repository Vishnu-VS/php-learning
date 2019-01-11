<?php
    $a=5;
    $b=10;
    for($i=5;$i<10;$i++){
        $a+=5;
        $b+=10;
    }
    echo "a=$a \n b=$b \ni=$i";
    $i=0;
    while($i<5){
        $a++;
        $i++;
    }
    echo "a=$a";
    //foreach implementation
    $array1=array(1,3,4,5,6);//declare array
    foreach($array1 as $value){
        echo "Value is $value";
    }
?>