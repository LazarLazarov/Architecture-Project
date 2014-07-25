window.onload = function() {
	var pic = document.getElementById('pic');
	var content = document.getElementById('wrapper');
	var white = document.getElementById('walterwhite');
	setTimeout(function(){
		for (var i = 1; i < 100; i += 1) { // change the += 1 for different smoothness
    		(function(i) { 
		        setTimeout(function() {
		            pic.style.opacity = (100 - i) * 0.01;
        		}, i * 10);
			})(i);
		}
	}, 2200);
	setTimeout(function(){
		for (var i = 1; i < 100; i += 1) { // change the += 1 for different smoothness
    		(function(i) { 
		        setTimeout(function() {
		            white.style.opacity = ( 100 - i ) * 0.01;
        		}, i * 10);
			})(i);
		}
	}, 2200);
	setTimeout(function(){
		/*document.body.style.background = '#ECF0F1';*/
		white.style.display = 'none';
		pic.style.display = 'none';
		content.style.display = 'block';
	},3200);
	setTimeout(function(){
		content.style.display = 'block';
	},1200);
}
//gif
//2sec load
//fade-out
//page