<?php  include ("includes/head.php"); ?>
<?php  include ("includes/navigation.php"); ?>
<?php include_once('Includes'.DIRECTORY_SEPARATOR.'connect.php'); ?>
<?php
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
						foreach($projects as $current){
							echo "<strong> Name: " . $current["project_name"] . " </strong> </br>";
							
							// TO DO image query + image description????? 
							print('<img src = '  . ' "project_images/1.png" ' . " />");
							echo "<p> " . $current["project_description"] . " </p> </br> <hr/>";
						}
					
					?>
				</div>
			</div>
			
		
