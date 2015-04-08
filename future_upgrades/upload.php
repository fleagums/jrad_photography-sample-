<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$target_dir = $_POST["choose_folder"] . "/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

//Check if image file is an actual image or a fake image
if(isset($_POST["submit"])) {
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false) {
		echo "File is an image - " . $check["mime"] . "."; 
		$uploadOk = 1;
	} else {
		echo "File is not an image.";
		$uploadOk = 0;
	}
}
//Check if file already exists
if(file_exists($target_file)) {
	echo "Sorry, file already exists MOOMA!";
	$uploadOk = 0;
}
//Check file size
if($_FILES["fileToUpload"]["size"] > 500000) {
	echo "Sorry MOOMA, your file is too large.";
	$uploadOk = 0;
}
//Allow certain file formats
if($imageFileType !== "jpg" && $imageFileType !== "jpeg" && $imageFileType !== "gif" && $imageFileType !== "png") {
	echo "Sorry, only JPEG, JPG, PNG, & GIF files allowed.";
	$uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


include("inc/folders.php");
$name = basename($_FILES["fileToUpload"]["name"]);
$file = "inc/testFile.php";
    
// String of data to be written
$data = $images[] = array(
 "name" => $name,
 "address" => $target_dir,
 "img" => $target_file,
 );

file_put_contents($file, $data, FILE_APPEND);
    

?>