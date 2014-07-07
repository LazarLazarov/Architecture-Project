<html>
	<head>
		<?php include_once('Includes'.DIRECTORY_SEPARATOR.'connect.php'); ?>
		<link rel="stylesheet" type="text/css" href="style_projects.css">
	</head>
	<body>
		<nav>
			<div id="beg"></div>
			<a data-scroll data-options="easing: easeInOutQuart" href="index.php#beg"><img id="logo" src="logo.png"></a>
			<ul id="nav">
				<li><a a data-scroll data-options="easing: easeInOutQuart" href="index.html">Home</a></li>
				<li><a href="projects...">Projects</a>
					<ul id="subList">
						<li><a href="residential.html">Residential</a></li>
						<li><a href="residential.html">Academic</a></li>
						<li><a href="residential.html">Office and </br> public</a></li>
						<li><a href="residential.html">Banks</a></li>
						<li><a href="residential.html">Hotels</a></li>
						<li><a href="residential.html">Industrial</a></li>
						<li><a href="residential.html">Interior</a></li>
					</ul>
				</li>
				<li><a data-scroll data-options="easing: easeInOutQuart" href="index.html#names">About us</a></li>
				<li><a data-scroll data-options="easing: easeInOutQuart" href="index.html#contacts">Contacts</a></li>
			</ul>
		</nav>

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
							echo "<div>";
							echo "<a href=\"project.php?id=". $current['id']."&category=". $cat_name[0] . "\"> <strong> Name: " . $current["project_name"] . " </strong> </br>";
							
							
							echo " <img src = \"project_images/thumb/$img_info[0].png\" /> </br>";
							echo "<code> $img_info[2] </code>";
							echo "<p> " . substr($current["project_description"], 0, 256) . "... <i> click to see more </i> </p> </br> <hr/> </a>";
							echo " </a> </div>";
						}
					
					?>
				</div>
			</div>
			
		
