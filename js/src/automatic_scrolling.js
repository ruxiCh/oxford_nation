//**
//Automatic scrolling
//***

var applyNowBtn = $("nav .nav_link.bold");
var contactBar = $(".cta_bar.contact");

var downArrow = $("#main_screen .glyphicon-chevron-down");
var introTextSection = $("#intro_text_section");


applyNowBtn.click(function(e) {
	scrollTo(contactBar, 0);
	e.preventDefault();
});

downArrow.click(function() {
	scrollTo(introTextSection, 50);
});

//Automatic scrolling function

function scrollTo(target, diffIfFixedNav) {
	$("html, body").animate({scrollTop: target.offset().top - diffIfFixedNav}, 1000);
	
}



//When the bottom of the page is reached, make the text from the contact div glow. This also happens when the apply now button is pressed. Remove it when the user scrolls up

$(window).scroll(function(){
	if($(window).scrollTop() + $(window).height() == $(document).height()) {
		//contactBar.addClass('glowy');
	} else {
		 contactBar.removeClass('glowy');
}});


