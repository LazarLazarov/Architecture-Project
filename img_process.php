<?php
class image{
	// The Thumbnail function takes 3 parameters:
	// Param 1 : source image location and name (must be a .png image)
	// Param 2 : thumbnail image location and name
	// Param 3 : if true max H and max W will be set to 400 px ELSE to 200 px
	
	public static function thumbnail($file_name, $output_file_name, $large){
		
		$large ? $max_width = 400 : $max_width = 200;
		
		$image = imagecreatefrompng($file_name);
		$ratio = imagesy($image) / imagesx($image);
		if ($ratio >= 1){
			$output = imagecreatetruecolor($max_width/ $ratio, $max_width);
			imagecopyresampled($output, $image, 0, 0, 0, 0, $max_width/ $ratio, $max_width , imagesx($image), imagesy($image));
		}
		else {
			$output = imagecreatetruecolor($max_width, $max_width* $ratio);
			imagecopyresampled($output, $image, 0, 0, 0, 0, $max_width, $max_width* $ratio , imagesx($image), imagesy($image));
		}
		imagepng($output, $output_file_name , 9);
		return true;
		
	}
	
}

image::thumbnail("project_images/5.png", "project_images/thumb/5.png", false);
echo "successful";
?>