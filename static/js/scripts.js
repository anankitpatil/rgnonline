$(document).ready(function(){
	//Fade in header
	$('.video-background .text-over-video').animate({opacity: 1}, 3000);
	$('.video-background video').animate({opacity: 0.33}, 12000);
	//Navigate on scroll
	$(window).scroll(function(){
		if ($(this).scrollTop() >= $('.container.home').offset().top){
            $('.navbar').addClass('on');
        } else {
            $('.navbar').removeClass('on');
        }
	});
	//Scroll arrow
	$('.text-over-video .glyphicon').click(function(){
		$('html, body').animate({scrollTop: ($('.container h1').offset().top - 96)}, 600);	
	});
});