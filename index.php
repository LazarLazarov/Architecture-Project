<html>
	<head>
		<link rel="shortcut icon" href="icon.ico" >
		<link rel="stylesheet" type="text/css" href="style169.css">
		<link rel="stylesheet" type="text/css" href="style~169.css">
		<link rel="stylesheet" type="text/css" href="style54.css">
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script type="text/javascript" src="script.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script> 
		<link rel="shortcut icon" href="../favicon.ico">
		<!--<link rel="stylesheet" type="text/css" href="css/default.css" />-->
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="src/js/jquery.swipebox.js"></script>
		<link rel="stylesheet" href="src/css/swipebox.css">
		<link rel='stylesheet prefetch' href='http://dimsemenov-static.s3.amazonaws.com/dist/magnific-popup.css'>
		 <style type="text/css">

::-webkit-scrollbar { 
    display: none; 
}

.white-popup {
  position: relative;
  background: #FFF;
  padding: 25px;
  width: auto;
  max-width: 400px;
  margin: 0 auto;
  font-family: "Codelight";
  font-size: 1.2em;
}

.mfp-zoom-in {
  /* start state */
  /* animate in */
  /* animate out */
}
.mfp-zoom-in .mfp-with-anim {
  opacity: 0;
  transition: all 0.2s ease-in-out;
  transform: scale(0.8);
}
.mfp-zoom-in.mfp-bg {
  opacity: 0;
  transition: all 0.3s ease-out;
}
.mfp-zoom-in.mfp-ready .mfp-with-anim {
  opacity: 1;
  transform: scale(1);
}
.mfp-zoom-in.mfp-ready.mfp-bg {
  opacity: 0.8;
}
.mfp-zoom-in.mfp-removing .mfp-with-anim {
  transform: scale(0.8);
  opacity: 0;
}
.mfp-zoom-in.mfp-removing.mfp-bg {
  opacity: 0;
}
  </style>
  <script src="js/prefixfree.min.js"></script>
	<script>
		function initialize() {

        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(42.677056,23.310686),
          zoom: 20,
          scrollwheel: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options);
        var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
  </script>

	</head>
	
		<!--<div class="dim"><div></div></div>-->
		<body>
			<img src="http://i.imgur.com/oG7Pz2e.gif" id="pic">
			<div id="walterwhite"></div>
		<nav id="topnav">
			<div id="beg"></div>
			<a data-scroll data-options="easing: easeInOutQuart" href="index.php#beg"><img id="logo" src="logo.png"></a>
			<ul id="nav">
				<li><a a data-scroll data-options="easing: easeInOutQuart" href="index.php#beg">Home</a></li>
				<li><a data-scroll data-options="easing: easeInOutQuart" href="index.php#pro">Projects</a></li>
				<li><a data-scroll data-options="easing: easeInOutQuart" href="index.php#catex">About us</a></li>
				<li><a data-scroll data-options="easing: easeInOutQuart" href="index.php#contacts">Contacts</a></li>
				<li><a data-scroll data-options="easing: easeInOutQuart" href="indexbg.php">BG</a></li>
			</ul>
		</nav>
		<!--<div id="newest"><p>Newest projects</p></div>-->
		<!--<img src="3hbot.jpg" id="building" >-->
<div id="cbp-fwslider" class="cbp-fwslider">
<ul id="box-container">
				<li>
					<a rel="gallery-1" href="#">
						<img id="pr1" src="images/o1.jpg" alt="image">
					</a>
				</li>
				<li>
					<a rel="gallery-2" href="#">
						<img id="pr2" src="images/b1.jpg" alt="image">
					</a>
				</li>
				<li>
					<a rel="gallery-3" href="#">
						<img id="pr1" src="images/b1.jpg" alt="image">
					</a>
				</li>
				<li>
					<a rel="gallery-4" href="#">
						<img id="pr1" src="images/b1.jpg" alt="image">
					</a>
				</li>
			</ul>
</div>
		<section>
			<div id="ArchDes">Architectural and design agency<hr/></div>
			
		</section>
		<section>
			<ul>
				<li><a href="#">Research &</br> planning</a><hr/></li>
				<li><a href="#">Design & </br> develpoment</a><hr/></li>
				<li><a href="#">Management</a><hr id="pro" /></li>
			</ul>
		</section>
		<!--end page1-->
		<ul id="cat" >
			<li><a href="projects2.php"><img class="cat" src="res.png"></a></li>
			<li><a href=""><img class="cat" src="off2.png"></a></li>
			<li><a href=""><img class="cat" src="hotel.png"></a></li>
			<li><a href=""><img class="cat" src="fac.png"></a></li>
			<li><a href=""><img class="cat" src="int.png"></a></li>
		</ul>
		<ul id="catex">
			<li><a class="catex" href="#">Residential</a></li>
			<li><a class="catex" href="#">Office &</br> public</a></li>
			<li><a class="catex" href="#">Hotels</a></li>
			<li><a class="catex" href="#">Industrial</br> Services</a></li>
			<li><a class="catex" href="#">Interior</a></li>
		</ul>
		<!--end page2-->
		<ul class="circles" id="inline-popups" >
			<li><a href="#test-popup" data-effect="mfp-zoom-in"><img class="circular" src="com.png"></a></li>
			<li><a href="#test-popup2" data-effect="mfp-zoom-in"><img class="circular" src="exp.png"></a></li>
			<li><a href="#test-popup3" data-effect="mfp-zoom-in"><img class="circular" src="teh.png"></a></li>
			<li><a href="#test-popup4" data-effect="mfp-zoom-in"><img class="circular" src="car.png"></a></li>
		</ul>
		<ul id="ctext">
			<li><a class="test" id="modal">Company</a></li>
			<li><a class="test" href="#">Exported</br> Services</a></li>
			<li><a class="test" href="#">Technology</a></li>
			<li><a class="test" href="#">Careers</a></li>
		</ul>
		<!--end page3-->
		<div id="map_canvas"></div>
		<ul id="adress">
			<li><a id="contacts" class="test"></br>Adress</br> 58 Burel Str,</br> 1408
											Sofia,</br> Bulgaria</a></li>
			<li><a class="test" ></br>Tel</br>(+359 2) 953 09 42
										</br>(+359 2) 954 10 93</br>&nbsp</a></li>
			<li><a class="test" ></br>Fax</br>(+359 2) 480 85 49</br></br>&nbsp</a></li>
			<li><a class="test" ></br>E-mail</br>office@vecomplex.com</br></br>&nbsp</a></li>
		</ul>
		<div id="test-popup" class="white-popup mfp-with-anim mfp-hide"><center><b>Company</b></center><br/><b> Vecomplex Ltd. was established in 1996 . 
		We are a private architectural and design agency, created by specialists with thorough knowledge, creativity and experience in
		 building design and project management. </b>
</div>
<div id="test-popup2" class="white-popup mfp-with-anim mfp-hide"><center><b>Exported Services</b></center><br/><b> We worked for a number of foreign and international firms in our country like: DHL International Ltd., ING Bank, Unionbank AG, OMW, Shipyard J.S.C., Sigma capital, Heidelberg cement, Lukoil, bulgarian Construction Company and etc.
 </b>
</div>
<div id="test-popup3" class="white-popup mfp-with-anim mfp-hide"><center><b>Technology</b></center><br/><b>Vecomplex ltd meets the challenge of communicating complex ideas and designs using the most current tools of technology such as Animation Samples, Virtual Reality, 3D Modeling, Exterior and Interior, Photomontage and Multimedia Sample Presentation</b>
</div>
<div id="test-popup4" class="white-popup mfp-with-anim mfp-hide"><center><b>Carriers</b></center><br/><b>
Entry-level architect and interior designer, Allplan knowledge
Design your career at Vecomplex ltd.
If you are interested in joining the Vecomplex team, please forward your CV to job@vecomplex.com</b>
</div>
		<script src="smooth-scroll.js"></script>
		<script>
    
		smoothScroll.init({
			speed: 1000,
			easing: 'easeInOutCubic',
			offset: 0,
			updateURL: false,
			callbackBefore: function ( toggle, anchor ) {},
			callbackAfter: function ( toggle, anchor ) {}
		});
		</script>
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
		<script type="text/javascript">
	$('#modal').on('click', function() {
          new Messi('Vecomplex Ltd. was established in 1996 . 
          	We are a private architectural and design agency, created by specialists with thorough knowledge, 
          	creativity and experience in building design and project management.')}
</script>
		<script src="lib/ios-orientationchange-fix.js"></script>
		<script src="lib/jquery-2.1.0.min.js"></script>
		<script src="src/js/jquery.swipebox.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  		<script src='http://dimsemenov-static.s3.amazonaws.com/dist/jquery.magnific-popup.min.js'></script>
  		<script src="js/index.js"></script>
  		<script src="js/jquery.cbpFWSlider.min.js"></script>


		
	</body>
</html>