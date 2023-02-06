<?php
$target_dir = "Documents/github training/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //name of the file to upload originally
//echo $target_file; //path/filename
$uploadOk = 1; //file will upload
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));  //contain the extension of file in lower case
//echo $imageFileType;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) { 
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]); //take temporary file size
  //echo $check;
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

  //check already exists
  if (file_exists($target_file)) {  //check if file already exixts
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  //check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {  //check the file size is not more than 500kb
    echo "Sorry, your file is too large.";    //500000 is in bytes format
    $uploadOk = 0;
  }

  //Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
}
?>
