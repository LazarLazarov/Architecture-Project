<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<?php //header('Content-type: text/html; charset=utf-8'); ?>
		<link rel="stylesheet" type="text/css" href="style_projects.css">
	</head>
<?php  include ("includes/navigation.php"); ?>
<?php include_once('Includes'.DIRECTORY_SEPARATOR.'connect.php'); ?>
<?php
						// Database queries:
						$project = mysqli_query($db,"SELECT id, project_name, project_description,  project_category FROM projects WHERE id=". $_GET['id'] );
						$project_array = mysqli_fetch_array($project);

?>
		<div id="ProjectContainer"> 
		<?php echo "<h1><a href=\"projects.php?cat=". $project_array["project_category"] ."\"> ".  $_GET['category']  . "</a></h1>"?>
				<div id = "ProjectName">
					<h2> <?php echo $project_array["project_name"]; ?> </h2><hr/>
				</div>
				<div id = "">
					<?php 
						//image select:
						$img = mysqli_query($db,"SELECT  picture_name, picture_description FROM pictures WHERE picture_project=". $project_array["id"] );
						foreach ($img as $current){
							echo " <img src = \"project_images/" . $current["picture_name"] . ".png\" /> </br>";
							echo $current["picture_description"] . "</br>";
						}
						
						echo "<p>" . $project_array["project_description"] . "</p>";
					?>
				</div>
			</div>