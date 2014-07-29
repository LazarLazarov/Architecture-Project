<html>
	<head>
		<link rel="shortcut icon" href="icon.ico" >
		<link rel="stylesheet" type="text/css" href="style_project1.css">
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<!--<script type="text/javascript" src="script.js"></script>-->
		<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script> 
		<link rel="shortcut icon" href="../favicon.ico">
		<!--<link rel="stylesheet" type="text/css" href="css/default.css" />-->
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	</head>
	
		<!--<div class="dim"><div></div></div>-->
		<body>
			<!--<img src="http://i.imgur.com/oG7Pz2e.gif" id="pic">
			<div id="walterwhite"></div>-->
			<div id="wrapper">
		<nav id="topnav">
			<div id="beg"></div>
			<a data-scroll data-options="easing: easeInOutQuart" href="index.php#beg"><img id="logo" src="logo.png"></a>
			<ul id="nav">
				<li><a a data-scroll data-options="easing: easeInOutQuart" href="index.php#beg">Home</a></li>
				<li><a data-scroll data-options="easing: easeInOutQuart" href="projects2.php">Projects</a></li>
				<li><a data-scroll data-options="easing: easeInOutQuart" href="index.php#catex">About us</a></li>
				<li><a data-scroll data-options="easing: easeInOutQuart" href="index.php#contacts">Contacts</a></li>
				<li><a data-scroll data-options="easing: easeInOutQuart" href="indexbg.php">BG</a></li>
			</ul>
		</nav>
		<!--<div id="newest"><p>Newest projects</p></div>-->
		<!--<img src="3hbot.jpg" id="building" >-->
<div id="cbp-fwslider" class="cbp-fwslider">
    <ul>
        <li><a href="#"><img src="images/o1.jpg" alt="img01"/></a></li>
        <li><a href="#"><img src="images/o2.jpg" alt="img02"/></a></li>
        <li><a href="#"><img src="images/o3.jpg" alt="img03"/></a></li>
        <li><a href="#"><img src="images/o4.jpg" alt="img04"/></a></li>
        <li><a href="#"><img src="images/o5.jpg" alt="img05"/></a></li>
    </ul>
</div>
		<section>
			<div id="ArchDes">House Botanicheska Gradina 2014<hr/></div>
			
		</section>
		<section>
			<ul>
				<li><a href="#">House Botanicheska Gradina is a big building located in Sofia</a></li>
			
			</ul>
		</section>

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
	</body>
</html>