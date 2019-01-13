<?php
    //echo readfile("webdictionary.txt");
    $myfile=fopen("webdictionary.txt","r") or die("Unable to open file!");
    //echo fread($myfile,filesize("webdictionary.txt"));
    while(!feof($myfile)){
        echo fgetc($myfile);
    }
    fclose($myfile);
    $myfile=fopen("testfile.txt","a");
    $txt="John Doe\n";
    fwrite($myfile,$txt);
    fclose($myfile);
?>