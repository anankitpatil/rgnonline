$(document).ready(function(){
	//Fade in header
	$('.video-background .text-over-video').animate({opacity: 1}, 3000);
	$('.video-background video').animate({opacity: 0.33}, 12000);
	//Navigate on scroll
	$(window).scroll(function(){
		if ($(this).scrollTop() >= 711){
            $('.navbar').addClass('on');
        } else {
            $('.navbar').removeClass('on');
        }
	});
});