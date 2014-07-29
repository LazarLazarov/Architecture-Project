<html>
	<head>
	<link rel="shortcut icon" href="icon.ico" >
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script> 
<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<?php //header('Content-type: text/html; charset=utf-8'); ?>
		<link rel="stylesheet" type="text/css" href="style_project.css">
	</head>
<?php  include ("includes/navigation.php"); ?>
<?php include_once('Includes'.DIRECTORY_SEPARATOR.'connect.php'); ?>
<?php
						// Database queries:
						$project = mysqli_query($db,"SELECT id, project_name, project_description,  project_category FROM projects WHERE id=". $_GET['id'] );
						$project_array = mysqli_fetch_array($project);

?>
		<!--<div id="ProjectContainer"> 
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
			</div>-->
<div id="cbp-fwslider" class="cbp-fwslider">
    <ul>
        <li><a href="#"><img src="3.jpg" alt="img01"/></a></li>
        <li><a href="#"><img src="2.jpg" alt="img02"/></a></li>
        <li><a href="#"><img src="1.jpg" alt="img03"/></a></li>
        <li><a href="#"><img src="4.jpg" alt="img04"/></a></li>
        <li><a href="#"><img src="5.jpg" alt="img05"/></a></li>
    </ul>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.cbpFWSlider.min.js"></script>
		<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpFWSlider( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 500,
					// default transition easing
					easing : 'ease'
				}
				- destroy:
				$( selector ).cbpFWSlider( 'destroy' );
				*/

				$( '#cbp-fwslider' ).cbpFWSlider();

			} );
		</script>