<html>
	<head>
		<link rel="shortcut icon" href="icon.ico" >
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<!--<script type="text/javascript" src="script.js"></script>-->
		<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script> 
		<link rel="shortcut icon" href="../favicon.ico">
		<!--<link rel="stylesheet" type="text/css" href="css/default.css" />-->
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<script>
		function initialize() {

        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(42.677056,23.310686),
          zoom: 14,
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
			<!--<img src="http://i.imgur.com/oG7Pz2e.gif" id="pic">
			<div id="walterwhite"></div>-->
			<div id="wrapper">
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
    <ul>
        <li><a href="#"><img src="3.jpg" alt="img01"/></a></li>
        <li><a href="#"><img src="2.jpg" alt="img02"/></a></li>
        <li><a href="#"><img src="1.jpg" alt="img03"/></a></li>
        <li><a href="#"><img src="4.jpg" alt="img04"/></a></li>
        <li><a href="#"><img src="5.jpg" alt="img05"/></a></li>
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
			<li><img class="cat" src="res.png"></li>
			<li><img class="cat" src="aca.png"></li>
			<li><img class="cat" src="off2.png"></li>
			<li><img class="cat" src="bank2.png"></li>
			<li><img class="cat" src="hotel.png"></li>
			<li><img class="cat" src="fac.png"></li>
			<li><img class="cat" src="int.png"></li>
		</ul>
		<ul id="catex">
			<li><a class="catex" href="#">Residential</a></li>
			<li><a class="catex" href="#">Academic</br> Services</a></li>
			<li><a class="catex" href="#">Office &</br> public</a></li>
			<li><a class="catex" href="#">Banks</a></li>
			<li><a class="catex" href="#">Hotels</a></li>
			<li><a class="catex" href="#">Industrial</br> Services</a></li>
			<li><a class="catex" href="#">Interior</a></li>
		</ul>
		<!--end page2-->
		<ul id="circles" >
			<li><img class="circular" src="com.png"></li>
			<li><img class="circular" src="exp.png"></li>
			<li><img class="circular" src="teh.png"></li>
			<li><img class="circular" src="car.png"></li>
		</ul>
		<ul id="ctext">
			<li><a class="test" href="#">Company</a></li>
			<li><a class="test" href="#">Exported</br> Services</a></li>
			<li><a class="test" href="#">Technology</a></li>
			<li><a class="test" href="#">Careers</a></li>
		</ul>
		<!--end page3-->
		<div id="map_canvas"></div>
		<ul id="adress">
			<li><a id="contacts" class="test" href="#"></br>Adress</br> 58 Burel Str,</br> 1408
											Sofia,</br> Bulgaria</a></li>
			<li><a class="test" href="#"></br>Tel</br>(+359 2) 953 09 42
										</br>(+359 2) 954 10 93</br>&nbsp</a></li>
			<li><a class="test" href="#"></br>Fax</br>(+359 2) 480 85 49</br></br>&nbsp</a></li>
			<li><a class="test" href="#"></br>E-mail</br>office@vecomplex.com</br></br>&nbsp</a></li>
		</ul>
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