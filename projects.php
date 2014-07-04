<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style_projects.css">
	</head>
<?php  include ("includes/navigation.php"); ?>
<?php include_once('Includes'.DIRECTORY_SEPARATOR.'connect.php'); ?>
<?php
						// Database queries:
						$projects = mysqli_query($db,"SELECT * FROM projects WHERE project_category =". $_GET['cat']);
						$result = mysqli_query($db,"SELECT name FROM categories WHERE id =". $_GET['cat']);
						$cat_name = mysqli_fetch_array($result);

?>
		
			<div id="CatContainer"> 
				<div id = "CatName">
					<h1>Welcome to <?php echo $cat_name[0]; ?> category  </h1><hr/>
				</div>
				<div id = "CatContent">
					<?php 

						
						//Visualization
						foreach($projects as $current){
							// Image selection:
							$img = mysqli_query($db,"SELECT * FROM pictures WHERE picture_project =". $current["id"]);
							$img_info = mysqli_fetch_array($img);
							echo "<a href=\"project.php?id=". $current['id']."&category=". $cat_name[0] . "\"> <strong> Name: " . $current["project_name"] . " </strong></a> </br>";
							
							
							echo " <img src = \"project_images/$img_info[0].png\" /> </br>";
							echo "<code> $img_info[2] </code>";
							echo "<p> " . $current["project_description"] . " </p> </br> <hr/>";
						}
					
					?>
				</div>
			</div>
			
		
