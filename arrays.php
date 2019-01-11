<?php
    $array1=array(1,2,3,4,5);
    foreach($array1 as $val){
        echo "Value is $val\n";
    }
    //another method of creating array
    $array1[0]="num";//old array variable
    $array1[1]="2";
    $array1[2]=3;
    foreach($array1 as $val1){
        echo "Value is $val1"; 
    }
    //associative arrays
    $salaries['mohammed']="1000";
    $salaries["krish"]='500';
    $salaries['zen']=650;
    echo "Salary of mohammed ".$salaries['mohammed'];
    echo "Salary of krish is ".$salaries['krish'];
    echo "Salary of zen is ".$salaries['zen'];
    //multidimensional arrays
    $multi=array(
        "mohammed"=>array(
            "physics"=>23,
            "chemistry"=>35,
            "biology"=>20
        ),
        "krish"=>array(
            "physics"=>25,
            "biology"=>50,
            "maths"=>25
        )
        );
    echo "marks of mohammed".$multi["mohammed"]["physics"]."\n";
    echo "marks of krish".$multi["krish"]["maths"]."\n";
?>