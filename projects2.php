<html>
	<head>
		<link rel="shortcut icon" href="icon.ico" >
		<link rel="stylesheet" type="text/css" href="style_projects2.css">
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<!--<script type="text/javascript" src="script.js"></script>-->
		<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script> 
		<link rel="shortcut icon" href="../favicon.ico">
		<!--<link rel="stylesheet" type="text/css" href="css/default.css" />-->
		<link rel="stylesheet" type="text/css" href="css/component3.css" />
		<script src="js/modernizr.custom.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<script src="lib/jquery-2.0.3.js"></script>
		<script src="src/js/jquery.swipebox.js"></script>
		<link rel="stylesheet" href="src/css/swipebox.css">

	</head>
	
		<!--<div class="dim"><div></div></div>-->
		<body>
			<!--<img src="http://i.imgur.com/oG7Pz2e.gif" id="pic">
			<div id="walterwhite"></div>-->
			<div id="wrapper">
		<nav id="topnav">
			<div id="beg"></div>
			<a data-scroll data-options="easing: easeInOutQuart" href="index.php"><img id="logo" src="logo.png"></a>
			<ul id="nav">
				<li class="nav"><a a data-scroll data-options="easing: easeInOutQuart" href="index.php#beg">Home</a></li>
				<li id="red2"><a data-scroll data-options="easing: easeInOutQuart" href="index.php#pro">Projects</a></li>
				<li class="nav"><a data-scroll data-options="easing: easeInOutQuart" href="index.php#catex">About us</a></li>
				<li class="nav"><a data-scroll data-options="easing: easeInOutQuart" href="index.php#contacts">Contacts</a></li>
				<li class="nav"><a data-scroll data-options="easing: easeInOutQuart" href="indexbg.php">BG</a></li>
			</ul>
			<ul id="mininav">
				<li id="red"><a data-scroll data-options="easing: easeInOutQuart" href="index.php#beg">Residential</a></li>
				
				<li class="mininav"><a data-scroll data-options="easing: easeInOutQuart" href="index.php#catex">Office &
public</a></li>
				
				<li class="mininav"><a data-scroll data-options="easing: easeInOutQuart" href="indexbg.php">Hotels</a></li>
				<li class="mininav"><a data-scroll data-options="easing: easeInOutQuart" href="index.php#beg">Industrial
Services</a></li>
				<li class="mininav"><a data-scroll data-options="easing: easeInOutQuart" href="index.php#pro">Interior</a></li>
			</ul>
		</nav>
		<!--<div id="newest"><p>Newest projects</p></div>-->
		<!--<img src="3hbot.jpg" id="building" >-->
<div id="cbp-fwslider" class="cbp-fwslider">
<ul id="box-container">
				<li>
					<a href="#">
						<img id="pr1" src="images/o1.jpg" alt="image"><p class="namers">Some building</p>
					</a>
				</li>
				<li>
					<a rel="gallery-2" href="#">
						<img id="pr2" src="images/b1.jpg" alt="image"><p class="namers">Second building</p>
					</a>
				</li>
				<li>
					<a rel="gallery-3" href="#">
						<img id="pr3" src="images/b1.jpg" alt="image">
					</a>
				</li>
				<li>
					<a rel="gallery-4" href="#">
						<img id="pr4" src="images/b1.jpg" alt="image">
					</a>
				</li>
			</ul>
    <!--<ul>
        <li><a class="swipebox" href="images/b1.jpg"><img src="images/b1.jpg" alt="img01"/><p class="namers">Balnea Hills 2007</p></a></li>
        <li><a class="swipebox" href="project2.php"><img src="images/p1.jpg" alt="img02"/><p class="namers">Residential Complex Pirin 2007</p></a></li>
        <li><a class="swipebox" href="project3.php"><img src="images/o1.jpg" alt="img03"/><p class="namers">House Botanicheska Gradina 2014</p></a></li>
        <li><a class="swipebox" href="project4.php"><img src="images/b4.jpg" alt="img04"/><p class="namers">House Bulgarevo 2006</p></a></li>
        <li><a class="swipebox" href="project5.php"><img src="images/b5.jpg" alt="img05"/><p class="namers">House Dragalevtsy 2009 </p></a></li>

    </ul>-->
</div>
		<!--<section>
			<div id="ArchDes">Balnea Hills 2007<hr/></div>
			
		</section>
		<section>
			<ul>
				<li><a href="#">Residential complex with shops, swimming pool, SPA and underground garages situated Karpuzitsa, Sofia</a></li>
			
			</ul>
		</section>-->
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
		<script type="text/javascript">
				;( function( $ ) {

			/* Basic Gallery */
			$( '.swipebox' ).swipebox();
			
			/* Video */
			$( '.swipebox-video' ).swipebox();

			/* Dynamic Gallery */
			$( '#pr1' ).click( function( e ) {
				e.preventDefault();
				$.swipebox( [
					{ href : 'images/o1.jpg', title : 'Some building' },
					{ href : 'images/o2.jpg', title : 'Some building' },
					{ href : 'images/o3.jpg', title : 'Some building' },
					{ href : 'images/o4.jpg', title : 'Some building' },
					{ href : 'images/o5.jpg', title : 'Some building' }
				] );
			} );
			$( '#pr2' ).click( function( e ) {
				e.preventDefault();
				$.swipebox( [
					{ href : 'images/b1.jpg', title : 'Second building' },
					{ href : 'images/b2.jpg', title : 'Second building' },
					{ href : 'images/b3.jpg', title : 'Second building' },
					{ href : 'images/b4.jpg', title : 'Second building' },
					{ href : 'images/b5.jpg', title : 'Second building' },
					{ href : 'images/b6.jpg', title : 'Second building' }
				] );
			} );

		} )( jQuery );
		</script>
		<script src="lib/ios-orientationchange-fix.js"></script>
		<script src="lib/jquery-2.1.0.min.js"></script>
		<script src="src/js/jquery.swipebox.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.cbpFWSlider.min.js"></script>

	</body>
</html>