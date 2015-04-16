<?php
include('inc/header.php');
?>
<body>

	<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
	Select folder:
    <select name="choose_folder">
    	<?php foreach((glob("img/*", GLOB_ONLYDIR)) as $key => $directory){
    		echo '<option value="' . $directory . '" name="' . $directory . '">' . $directory . '</option>';
    	}
		?>
	</select>
    <input type="submit" value="Upload Image" name="submit">
</form>

<script type='text/javascript' src='https://fineartamerica.com/widgetshoppingcart/widgetscripts.php'></script>
<iframe id='pixelsshoppingcartiframe' src='https://fineartamerica.com/widgetshoppingcart/artwork.html?memberidtype=artistid&memberid=238162&domainid=0&showheader=0&height=600&autoheight=true' style='display: inline-block; width: 100%; height: 820px; border: none; overflow: hidden;'></iframe>

<?php
include('inc/footer.php');
?>

