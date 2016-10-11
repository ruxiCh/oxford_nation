//**
//Automatic scrolling
//***

var applyNowBtn = $("nav .nav_link.bold");
var contactBar = $(".cta_bar.contact");

var downArrow = $("#main_screen .glyphicon-chevron-down");
var introTextSection = $("#intro_text_section");

applyNowBtn.click(function(e) {
	e.preventDefault();
	smoothScroll(contactBar, 0);
});

downArrow.click(function() {
	smoothScroll(introTextSection, 50);
});

//Smooth scrolling function

function smoothScroll(target, diffIfFixedNav) {
	$('body').animate({scrollTop: target.offset().top - diffIfFixedNav}, 1000);
	
}



//When the bottom of the page is reached, make the text from the contact div glow. This also happens when the apply now button is pressed. Remove it when the user scrolls up

$(window).scroll(function(){
	if($(window).scrollTop() + $(window).height() == $(document).height()) {
		contactBar.addClass('glowy');
	} else {
		 contactBar.removeClass('glowy');
}});


