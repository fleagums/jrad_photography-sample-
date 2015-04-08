<?php
error_reporting(E_ALL);
ini_set('display_errors',1); 

function alpha_numb_index($array, $folder) {
$numb_index = 1; 
if ($array["id"] === $folder["id"]){
    echo $folder["id"] . $numb_index;
    $numb_index++;
} else {
	die;
}
}

include('inc/folders.php');

$images = array();

$images["A1"] = array(
	"id" => "A",
	"address" => "img/ABSTRACTS",
	"name" => "A Little Bit of Color",
	"img" => "img/ABSTRACTS/a_little_bit_of_color.jpg"
);

$images["B1"] = array(
	"id" => "B",
	"name" => "Cancun Iguana",
	"address" => "img/ANIMALS",
	"img" => "img/ANIMALS/cancun_iguana.jpg"
);

alpha_numb_index($images, $folders);


?>