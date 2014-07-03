<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script>
function initialize() {

        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(42.677056,23.310686),
          zoom: 19,
          //scrollwheel: false,//
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
		<?php  include ("includes/navigation.php"); ?>
		<img src="building.jpg" >
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
			<li><div class="grow pic"><a class="test" href="projects.php?cat=one"><img class="project"  src="Projects1.jpg"></a></div></li>
			<li><div class="grow pic"><a class="test" href="projects.php?cat=two"><img class="project" src="Projects2.jpg"></a></div></li>
			<li><div class="grow pic"><a class="test" href="projects.php?cat=three"><img class="project"  id="ProjectsSc" src="Projects3.jpg"></a></div></li>
			<li><div class="grow pic"><a class="test" href="projects.php?cat=four"><img class="project" src="Projects4.jpg"></a></div></li>
			<li><div class="grow pic"><a class="test" href="projects.php?cat=five"><img class="project" src="Projects5.jpg"></a></div></li>
			<li><div class="grow pic"><a class="test" href="projects.php?cat=six"><img class="project" src="Projects6.jpg"></a></div></li>
			<li><div class="grow pic"><a class="test" href="projects.php?cat=seven"><img class="project" src="Projects7.jpg"></a></div></li>
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
			<li><img class="circular" src="http://38.media.tumblr.com/439d1e71890241d23addafc9790b7eaf/tumblr_n19uihdOa21s1kvj9o1_500.jpg"></li>
			<li><img class="circular" src="http://38.media.tumblr.com/439d1e71890241d23addafc9790b7eaf/tumblr_n19uihdOa21s1kvj9o1_500.jpg"></li>
			<li><img class="circular" src="http://38.media.tumblr.com/439d1e71890241d23addafc9790b7eaf/tumblr_n19uihdOa21s1kvj9o1_500.jpg"></li>
			<li><img class="circular" src="http://38.media.tumblr.com/439d1e71890241d23addafc9790b7eaf/tumblr_n19uihdOa21s1kvj9o1_500.jpg"></li>
		</ul>
		<ul id="ctext">
			<li><a class="test" href="#">Company</a></li>
			<li><a class="test" href="#">Exported</br> Services</a></li>
			<li><a class="test" href="#">Technology</a></li>
			<li><a class="test" href="#">Carrers</a></li>
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