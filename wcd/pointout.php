<?php	
	header("Content-type: image/png");
	
	$image = imagecreatefrompng("yontaku.png");

	$col_ellipse = imagecolorallocate($image, 255, 0, 0);

	imageellipse($image, $_GET["x"], $_GET["y"], 10, 10, $col_ellipse);
	
	imagepng($image);
	imagedestroy($image);
?>