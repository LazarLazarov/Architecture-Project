<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<!--<script type="text/javascript" src="script.js"></script>-->
		<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script> 
	<script>
		function initialize() {

        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(42.677056,23.310686),
          zoom: 19,
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
			<nav>
			<div id="beg"></div>
			<a data-scroll data-options="easing: easeInOutQuart" href="index.php#beg"><img id="logo" src="logo.png"></a>
			<ul id="nav">
				<li><a a data-scroll data-options="easing: easeInOutQuart" href="index.php#beg">Home</a></li>
				<li><a data-scroll data-options="easing: easeInOutQuart" href="index.php#categories">Projects</a></li>
				<li><a data-scroll data-options="easing: easeInOutQuart" href="index.php#names">About us</a></li>
				<li><a data-scroll data-options="easing: easeInOutQuart" href="index.php#contacts">Contacts</a></li>
			</ul>
		</nav>
		<img src="3hbot.jpg" id="building" >
		<section>
			<div id="ArchDes">Architectural and design agency<hr/></div>
			
		</section>
		<section>
			<ul>
				<li><a href="#">Research &</br> planning</a><hr/></li>
				<li><a href="#">Design & </br> develpoment</a><hr/></li>
				<li><a href="#">Management</a><hr/></li>
			</ul>
		</section>
		<!--end page1-->
		<ul id="categories">
			<li><div class="grow pic"><a class="test" href="projects.php?cat=1"><img class="project"  src="Projects1.jpg"></a></div></li>
			<li><div class="grow pic"><a class="test" href="projects.php?cat=2"><img class="project" src="Projects2.jpg"></a></div></li>
			<li><div class="grow pic"><a class="test" href="projects.php?cat=3"><img class="project"  id="ProjectsSc" src="Projects3.jpg"></a></div></li>
			<li><div class="grow pic"><a class="test" href="projects.php?cat=4"><img class="project" src="Projects4.jpg"></a></div></li>
			<li><div class="grow pic"><a class="test" href="projects.php?cat=5"><img class="project" src="Projects5.jpg"></a></div></li>
			<li><div class="grow pic"><a class="test" href="projects.php?cat=6"><img class="project" src="Projects6.jpg"></a></div></li>
			<li><div class="grow pic"><a class="test" href="projects.php?cat=7"><img class="project" src="Projects7.jpg"></a></div></li>
		</ul>
		<ul id="names">
			<li><a class="test" href="#">Residential</a></li>
			<li><a class="test" href="#">Academic</a></li>
			<li><a class="test" href="#">Office &</br> public</a></li>
			<li><a class="test" href="#">Banks</a></li>
			<li><a class="test" href="#">Hotels</a></li>
			<li><a class="test" href="#">Industrial</a></li>
			<li><a class="test" href="#">Interior</a></li>
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
	</body>
</html>