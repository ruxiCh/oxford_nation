//***
//Testimonial carousel for the mobile version
//***

var activeItem = $("#testimonial_section .testimonial.active");
var activeControl = $("#testimonial_section .marker.active");
var activeDataTarget = parseInt(activeControl.attr("data-target"));
var numberOfElements = 4;
var isAnimating = false;
var nextDataTarget = "";

$("#testimonial_section .marker").click(function(){
    if(isAnimating === false) {
        nextDataTarget = parseInt($(this).attr("data-target"));
        navigateCarousel($("#testimonial_section .testimonial[data-target='" + nextDataTarget + "']"), $(this), 0.5);
    }
});

$("#testimonial_section .controls .glyphicon").click(function(){
    if(isAnimating === false) {
        if ($(this).hasClass("glyphicon-chevron-left")) {
            if (activeDataTarget !== 1) {
                nextDataTarget = activeDataTarget - 1;
            } else {
                nextDataTarget = numberOfElements;
            }
        } else {
            if (activeDataTarget !== numberOfElements) {
                nextDataTarget = activeDataTarget + 1;
            } else {
                nextDataTarget = 1;
            }
        }
        ;
        navigateCarousel($("#testimonial_section .testimonial[data-target='" + nextDataTarget + "']"), $("#testimonial_section .marker[data-target='" + nextDataTarget + "']"), 0.5);
    }
});

//navigateCarousel function

var navigateCarousel = function(nextActiveItem, nextActiveControl, animDuration ) {

        var paddingArray = ["44%", "113%", "69%", "58%"];

        activeControl.removeClass("active");
        nextActiveControl.addClass("active");
        activeControl = nextActiveControl;
        isAnimating = true;

        TweenMax.to(activeItem, animDuration, {
            opacity: 0,
            onComplete: function () {
                activeItem.css("display", "none");
                nextActiveItem.css("display", "block");
                TweenMax.to(nextActiveItem, animDuration, {
                    opacity: 1,
                    onComplete: function () {
                        activeItem.removeClass("active");
                        nextActiveItem.addClass("active");
                        activeItem = nextActiveItem;
                        activeDataTarget = nextDataTarget;
                        isAnimating = false;
                    }
                });
            }
        });
        changePadding($("#testimonial_section .testimonial_container"), nextDataTarget, paddingArray);


};

//modify the padding of a container with absolutely positioned items so that the newly appeared item fit

var changePadding = function(container, newItemDataTarget, paddingArray) {
    container.css("padding-top", paddingArray[newItemDataTarget - 1]);
};
