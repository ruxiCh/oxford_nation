//Vars

var contactForm = $('#contact-form');
var applyNow = $('.nav:last-child');

//Smooth scrolling function

function smoothScroll(target) {
	$('body').animate({scrollTop: $(target).offset().top}, 'slow');
	return false;
	
}

//Activate smooth scrolling to the contact div when the apply now button is pressed

applyNow.click(function() {
	 smoothScroll('#contact-form');

});

//When the bottom of the page is reached, make the text from the contact div glow. This also happens when the apply now button is pressed. Remove it when the user scrolls up

$(window).scroll(function(){
	if($(window).scrollTop() + $(window).height() == $(document).height()) {
		contactForm.addClass('glowy');
	} else {
		 contactForm.removeClass('glowy');
}});


