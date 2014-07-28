<html>
	<head>
		<?php include_once('Includes'.DIRECTORY_SEPARATOR.'connect.php'); ?>
		<link rel="stylesheet" type="text/css" href="style_projects.css">
		<link rel="stylesheet" type="text/css" href="slider.css">
		<script type="text/javascript">
			function clickFunction() {
				var sublist = document.getElementById("subList");
				if (sublist.style.display == "none") {
					sublist.style.display = "inline-block";
					var iArr = document.getElementsByName("sub");
  					for (var i = 0; i < iArr.length; i++) {
  						iArr[i].style.display = "inline-block";
  					}
				}
				else {
					sublist.style.display = "none";
				}
			}
		</script>
		<?php 
			$currentCat = $_GET['cat'];
			echo '<style>';
			echo '#subList li:nth-of-type('.$currentCat.') a {';
			echo 'color:#cc3366;';
			echo 'font-weight:bold;}';
			echo '</style>';
		?>


	</head>
	<body>
		<nav>
			<div id="beg"></div>
				<a data-scroll data-options="easing: easeInOutQuart" href="index.php#beg"><img id="logo" src="logo.png"></a>			<ul id="nav">
				<li><a a data-scroll data-options="easing: easeInOutQuart" href="index.html">Home</a></li>
				<li onclick="clickFunction()">Projects
					<ul id="subList">
						<li name="sub"><a href="residential.html">Residential</a></li>
						<li name="sub"><a href="residential.html">Academic</a></li>
						<li name="sub"><a href="residential.html">Office & public</a></li>
						<li name="sub"><a href="residential.html">Banks</a></li>
						<li name="sub"><a href="residential.html">Hotels</a></li>
						<li name="sub"><a href="residential.html">Industrial</a></li>
						<li name="sub"><a href="residential.html">Interior</a></li>
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
					<!--<h1>Welcome to <?php echo $cat_name[0]; ?> category  </h1>-->
				</div>
				<!--<div id = "CatContent">
					<?php /*
						$distinct = mysqli_fetch_array($projects);
						$counter = 0;
						$current = $distinct[$counter];
						// Image selection:
						/*foreach($projects as $current) {
						$img = mysqli_query($db,"SELECT * FROM pictures WHERE picture_project =". $current["id"]);
						$img_info = mysqli_fetch_array($img);
						echo "<div>";
						echo "<a id=\"link\" href=\"project.php?id=". $current['id']."&category=". $cat_name[0] . "\"> <strong> " . $current["project_name"] . " </strong> </br>";
					
						echo " <img id=\"small_thumb\" src = \"project_images/thumb/".$img_info[0].".png\" /> </br>";
						//echo "<p> $img_info[2] </p>";
						//echo "<p> " . substr($current["project_description"], 0, 256) . "... <i> click to see more </i> </p> </br>  </a>";
						echo " </a> 

						</div>";	
					}*/
					?>
				</div>-->
				
			</div>
			     <div id="slideshow-wrap">
        <input type="radio" id="button-1" name="controls" checked="checked"/>
        <label for="button-1"></label>
        <input type="radio" id="button-2" name="controls"/>
        <label for="button-2"></label>
        <input type="radio" id="button-3" name="controls"/>
        <label for="button-3"></label>
        <input type="radio" id="button-4" name="controls"/>
        <label for="button-4"></label>
        <input type="radio" id="button-5" name="controls"/>
        <label for="button-5"></label>
        <label for="button-1" class="arrows" id="arrow-1"><img src="project_images\arrows\right.png"></label>
        <label for="button-2" class="arrows" id="arrow-2"><img src="project_images\arrows\right.png"></label>
        <label for="button-3" class="arrows" id="arrow-3"><img src="project_images\arrows\right.png"></label>
        <label for="button-4" class="arrows" id="arrow-4"><img src="project_images\arrows\right.png"></label>
        <label for="button-5" class="arrows" id="arrow-5"><img src="project_images\arrows\right.png"></label>
        <div id="slideshow-inner">
            <ul>
                <li id="slide1">
                    <img src="project_images\thumb\1.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-1"/>
                        <label for="show-description-1" class="show-description-label">v</label>
                        <div class="description-text">
                            <h2>Flower power</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
                <li id="slide2">
                    <img src="project_images\thumb\2.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-2"/>
                        <label for="show-description-2" class="show-description-label">v</label>
                        <div class="description-text">
                            <h2>Golden sunset</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
                <li id="slide3">
                    <img src="http://cssdeck.com/uploads/media/items/0/00kih8g.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-3"/>
                        <label for="show-description-3" class="show-description-label">v</label>
                        <div class="description-text">
                            <h2>Flower power again</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
                <li id="slide4">
                    <img src="http://cssdeck.com/uploads/media/items/2/2rT2vdx.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-4"/>
                        <label for="show-description-4" class="show-description-label">v</label>
                        <div class="description-text">
                            <h2>Stormy coast</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
                <li id="slide5">
                    <img src="http://cssdeck.com/uploads/media/items/8/8k3N3EL.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-5"/>
                        <label for="show-description-5" class="show-description-label">v</label>
                        <div class="description-text">
                            <h2>Splash!</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
		
