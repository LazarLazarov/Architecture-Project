<html>
	<head>
		<link rel="shortcut icon" href="icon.ico" >
		<link rel="stylesheet" type="text/css" href="stylebg.css">
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<!--<script type="text/javascript" src="script.js"></script>-->
		<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script> 
		<meta charset="utf-8">
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
				<li><a a data-scroll data-options="easing: easeInOutQuart" href="index.php#beg">Начало</a></li>
				<li><a data-scroll data-options="easing: easeInOutQuart" href="index.php#pro">Проекти</a></li>
				<li><a data-scroll data-options="easing: easeInOutQuart" href="index.php#catex">За нас</a></li>
				<li><a data-scroll data-options="easing: easeInOutQuart" href="index.php#contacts">Контакти</a></li>
				<li><a data-scroll data-options="easing: easeInOutQuart" href="index.php">EN</a></li>

			</ul>
		</nav>
		<img src="3hbot.jpg" id="building" >
		<section>
			<div id="ArchDes">Архитектура и дизайн<hr/></div>
			
		</section>
		<section>
			<ul id="underText">
				<li class="underText"><a href="#">Проучване и</br> планиране</a><hr/></li>
				<li class="underText"><a href="#">Проектиране и </br> развитие</a><hr/></li>
				<li class="underText"><a href="#">Менижмънт</a><hr id="pro" /></li>
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
			<li><a class="catex" href="#">Жилищни сгради</a></li>
			<li><a class="catex" href="#">Училища</a></li>
			<li><a class="catex" href="#">Обществени сгради </a></li>
			<li><a class="catex" href="#">Банки</a></li>
			<li><a class="catex" href="#">Хотели</a></li>
			<li><a class="catex" href="#">Индустриални сгради</a></li>
			<li><a class="catex" href="#">Интериори</a></li>
		</ul>
		<!--end page2-->
		<ul id="circles" >
			<li><img class="circular" src="com.png"></li>
			<li><img class="circular" src="teh.png"></li>
			<li><img class="circular" src="car.png"></li>
		</ul>
		<ul id="ctext">
			<li><a class="test" href="#">Компания</a></li>
			<li><a class="test" href="#">Технология</a></li>
			<li><a class="test" href="#">Кариери</a></li>
		</ul>
		<!--end page3-->
		<div id="map_canvas"></div>
		<ul id="adress">
			<li><a id="contacts" class="test" href="#"></br>Адрес</br> Ул. ”Бурел” № 58,</br> София 1408,</br> България</a></li>
			<li><a class="test" href="#"></br>Тел</br>(+359 2) 953 09 42
										</br>(+359 2) 954 10 93</br>&nbsp</a></li>
			<li><a class="test" href="#"></br>Факс</br>(+359 2) 480 85 49</br></br>&nbsp</a></li>
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