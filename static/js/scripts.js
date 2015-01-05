$(document).ready(function(){
	//Fade in header
	$('.video-background .text-over-video').animate({opacity: 1}, 3000);
	$('.video-background video').animate({opacity: 0.33}, 12000);
	//Navigate on scroll
	$(window).scroll(function(){
		if ($(this).scrollTop() >= $('.container.home,.container.about,.container.nursery,.container.orangeries,.container.landscapes,.container.driveways,.container.visit').offset().top){
            $('.navbar').addClass('on');
        } else {
            $('.navbar').removeClass('on');
        }
	});
	//Scroll arrow
	$('.text-over-video .glyphicon').click(function(){
		$('html, body').animate({scrollTop: ($('.container h1').offset().top - 96)}, 600);	
	});
	//Visit us Map
	if($('.visit').length) {	
		$('.navbar').addClass('black');
		var myLatlng = new google.maps.LatLng(53.071994, -2.458096);
		var mapOptions = {
			zoom: 15,
			center: myLatlng,
			scrollwheel: false,
			navigationControl: false,
			mapTypeControl: false,
			scaleControl: false,
			panControl: false,
			zoomControlOptions: {
				style: google.maps.ZoomControlStyle.LARGE,
				position: google.maps.ControlPosition.LEFT_BOTTOM
			},
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
		var marker = new google.maps.Marker({
		  	position: myLatlng,
		  	map: map
	  	});
		var infowindow = new google.maps.InfoWindow({
			content: '<div style="width:120px;font-size:15px">Rope Garden Nursery,<br />Gresty Lane,<br />Crewe, Cheshire<br /><strong>CW2 5DD</strong></div>'
		});
		infowindow.open(map,marker);
	}
});