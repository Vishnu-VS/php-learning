<?php
        $target_dir="uploads/";
        $target_file=$target_dir.basename($_FILES["fileToUpload"]["name"]);
        $uploadOk=1;
        $imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        //CHECK IF IMAGE FILE IS ACTUAL IMAGE OR FAKE IMAGE
        if(isset($_POST["submit"])){
            $check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check!==false){
                echo "File is an image -".$check["mime"].".";//mime-types of a file eg.'jpeg'->'image/jpeg'
                $uploadOk=1;
            }else{
                echo"File is not an image";
                $uploadOk=0;
            }
        }
        //check if file already exists
        if(file_exists($target_file)){
            echo"Sorry,file already exists";
            $uploadOk=0;
        }
        //check file size and limit >500kb
        if($_FILES["fileToUpload"]["size"]>500000){
            echo "Sorry,your file is too large.";
            $uploadOk=0;
        }
        //check file type (only image files)
        if($imageFileType!="jpg"&&$imageFileType!="png"&&$imageFileType!="jpeg"&&$imageFileType!="gif"){
            echo "Sorry,only jpg,jpeg,png,and gif files are allowed.";
            $uploadOk=0;
        }
        if($uploadOk==0){
            echo "Sorry your file was not uploaded";
        }
        //if everything is ok try to upload file
        else{
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    ?>