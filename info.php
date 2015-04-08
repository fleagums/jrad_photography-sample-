<?php
include('inc/header.php');
include('inc/images.php');
?>

<div>
	<?php 
		
		$key = $_GET['index'];

		foreach($images as $key => $image){ 
	 		   if ($_GET['index'] == $key) {
	 			echo '<div class="exhibit_exhibit">';
	 			echo '<img src="' . $image["img"] . '" class="exhibit_images">';
	 			echo '<p class="image_name">' . $image["name"] . '</p>';
	 			echo '</div>';
	 		};
	 	};

	 ?>
</div>

<?php
include('inc/footer.php'); 
?>





