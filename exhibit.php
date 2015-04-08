<?php
include('inc/header.php'); 
include('inc/images.php');
?>

<div id="exhibit_container">
	 <?php 	foreach($images as $key => $image){ 
	 		   if ($_GET['id'] == $image["id"]) {
	 			echo '<div class="exhibit_exhibit">';
	 			echo '<a href="info.php?index=' . $key . '"><img src="' . $image["img"] . '" class="exhibit_images"></a>';
	 			echo '<p class="image_name">' . $image["name"] . '</p>';
	 			echo '</div>';
	 		};
	 	};
	?>
</div>

<?php include('inc/footer.php'); ?>