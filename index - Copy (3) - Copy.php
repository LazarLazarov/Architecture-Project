
<html>
<head>
	  <meta charset="UTF-8">
	<link rel='stylesheet prefetch' href='http://dimsemenov-static.s3.amazonaws.com/dist/magnific-popup.css'>
	<title></title>
	<style>
.white-popup {
  position: relative;
  background: #FFF;
  padding: 25px;
  width: auto;
  max-width: 400px;
  margin: 0 auto;
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
</head>
<body>
<ul id="inline-popups">
 <li><a href="#test-popup" data-effect="mfp-zoom-in">Zoom</a></li>	
 </ul>
<div id="test-popup" class="white-popup mfp-with-anim mfp-hide">You may put any HTML here. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He who searches for meaning here will be sorely disappointed.</div>

	<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  	<script src='http://dimsemenov-static.s3.amazonaws.com/dist/jquery.magnific-popup.min.js'></script>
  	<script src="js/index.js"></script>

</ul>
</body>
</html>