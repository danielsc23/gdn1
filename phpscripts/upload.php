<?php
session_start();
require_once("functions.php");
require_once("imagecrud.php");


//if (!Func::isAdmin()) {
  //  Func::redirect("login.php");
//}

//$target_dir = "../imgupload/";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//$uploadOk = 1;
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
    //$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    //if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        //$uploadOk = 1;
    //} else {
       // echo "File is not an image.";
        //$uploadOk = 0;
   // }
//}

// Check file size
//if ($_FILES["fileToUpload"]["size"] > 500000) {
    //echo "Sorry, your file is too large.";
    //$uploadOk = 0;
//}
// Allow certain file formats
//if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//&& $imageFileType != "gif" ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //$uploadOk = 0;
//}
// Check if $uploadOk is set to 0 by an error
//if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
//} else {
    //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //$position = $_POST["position"];
        //$filename = basename($_FILES["fileToUpload"]["name"]);
        //$img = new Imagecrud();
        //$img->setImagePathByPosition($filename, $position);
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    //} else {
        //echo "Sorry, there was an error uploading your file.";
    //}
//}
//sleep(3);
//Func::redirect("../admin.php");

$currentDir = getcwd();
$uploadDirectory = "\..\imgupload";
$errors = [];
$fileExtensions =['jpeg','jpg','png'];

$fileName = $_FILES['fileToUpload']['name'];
$fileSize = $_FILES['fileToUpload']['size'];
$fileTmpName = $_FILES['fileToUpload']['tmp_name'];
$fileType = $_FILES['fileToUpload']['type'];
$ext = pathinfo($fileName, PATHINFO_EXTENSION);
//$fileExtension = explode('.',$fileName)[1];

echo $ext;
$uploadPath = $currentDir . $uploadDirectory .'\\'. basename($fileName);

if(isset($_POST['submit'])){
    
    if(!in_array($ext, $fileExtensions)){
       $errors[] = "This file is not allowed please upload a JPEG or PNG file";
       $_SESSION['wrongext'] = true;
        // echo "The file" .basename($fileName) . " has been uploaded";
        header("Location: ../Admin/pages/update/adminguy.php");
    }
    if($fileSize > 2000000){
        $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB.";
        $_SESSION['largefile'] = true;
        // echo "The file" .basename($fileName) . " has been uploaded";
        header("Location: ../Admin/pages/update/adminguy.php");
    }
    if(empty($errors)){
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
        $position = $_POST["position"];
        $fileName = basename($_FILES["fileToUpload"]["name"]);
        $img = new Imagecrud();
        $img->setImagePathByPosition($fileName, $position);

        if($didUpload){
            $_SESSION['didupload'] = true;
           // echo "The file" .basename($fileName) . " has been uploaded";
           header("Location: ../Admin/pages/update/adminguy.php");
        }else{
            $_SESSION['didupload'] = false;
            header("Location: ../Admin/pages/update/adminguy.php");
        }
    }else{
        foreach($errors as $error){
            echo $error . "These are the errors" . "\n";
        }
    }
}

?>