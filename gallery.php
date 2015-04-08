<?php 	include("inc/header.php"); 
		include("inc/folders.php");
?>
<div id="gallery_container">
	<?php foreach($folders as $folder) {
		echo '<div class="gallery_folders">';
		echo '<a href="' . $folder["location"] . '">';
		echo '<img src="' . $folder["image"] . '"class="gallery_images">';
		echo '</a>';
		echo '<p class="gallery_titles">' . $folder["name"] . '</p>';
		echo '</div>';
	} ?>
</div>
<?php include("inc/footer.php"); ?>