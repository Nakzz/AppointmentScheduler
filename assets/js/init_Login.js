/** *************Init JS*********************
	
    TABLE OF CONTENTS
	---------------------------
/*******************************/
	/**Nice Scroll**/
	/**Placeholder JS call**/
	/**Subscribe JS**/
	/**Contact Us JS**/
/*******************************/

"use strict";


	
jQuery( document ).ready(function( $ ) {
	$.noConflict();
    
    var setElementHeight = function () {
		var height = $(window).height();
		$('.autoheight').css('min-height', (height));
		
    };
    
    $(window).on("resize", function () {
		setElementHeight();
	}).resize();

    
	/* Overlay */
	if (Modernizr.touch) {
	// show the close overlay button
	$(".close-overlay").removeClass("hidden");
	// handle the adding of hover class when clicked
	$(".img").click(function(e){
		if (!$(this).hasClass("hover")) {
			$(this).addClass("hover");
		}
	});
	// handle the closing of the overlay
	$(".close-overlay").click(function(e){
		e.preventDefault();
		e.stopPropagation();
		if ($(this).closest(".img").hasClass("hover")) {
			$(this).closest(".img").removeClass("hover");
		}
	});
	} else {
		// handle the mouseenter functionality
		$(".img").mouseenter(function(){
			$(this).addClass("hover");
		})
		// handle the mouseleave functionality
		.mouseleave(function(){
			$(this).removeClass("hover");
		});
	}
    
    	/*******Smooth scroll***********/
	var height=$(".navbar.navbar-default").height();
	var scroll = $(window).scrollTop();
	if (scroll > height) {
		$(".header-hide").addClass("scroll-header");
	}
	
	smoothScroll.init({
		speed: 1000,
		easing: 'easeInOutCubic',
		offset: height,
		updateURL: false,
		callbackBefore: function ( toggle, anchor ) {},
		callbackAfter: function ( toggle, anchor ) {},
	});
	
	$(window).scroll(function() {
		var height = $(window).height();
		var scroll = $(window).scrollTop();
		if (scroll) {
			$(".header-hide").addClass("scroll-header");
		} else {
			 $(".header-hide").removeClass("scroll-header");
		}
	
	});
	
	/** Menu Close Logic **/

	// $('.navbar-collapse.in').niceScroll({cursorcolor:"#c8bd9f"});
	// 	$('.nav li a').click(function(){
	// 		$('.navbar-collapse.collapse').toggleClass('in');
	// });	
/***********************************/
/*Nice Scroll*/
/**********************************/
	//  $("html").niceScroll();

/***********************************/
/*Placeholder JS call*/
/**********************************/	 
	$('input[type=text], textarea').placeholder();	



    
    /**********Menu Close Logic***************/

// 	$('.navbar-collapse.in').niceScroll({cursorcolor:"#c8bd9f"});
//     $('.nav li a').click(function(){
//         $('.navbar-collapse.collapse').toggleClass('in');
// });	

 /******* Nice Scroll *******/

//  $("html").niceScroll({cursorcolor:"#ff1d8d"});
 

	
});

