/** *************Init JS*********************
	
    TABLE OF CONTENTS
	---------------------------
	1. Preloader
	2. Ready Function
	   a) Auto height for the home page
	   b) Smooth Scroll
	   c) 3d gallery
	   d) Vimeo Video
	   e) Schedule Accordian
	   f) Speaker Slider
	   g) Animation
	   h) Registration Form
	   i) Subscribe
	   j) Nice Scroll
	   h) Placeholder for ie9
	3.Landing Slider Js


/*************************************/

"use strict";

/*************************************/
/* Preloader */
/**************************************/
jQuery(window).load(function() {
        // will first fade out the loading animation
	jQuery(".status").fadeOut();
        // will fade out the whole DIV that covers the website.
	jQuery(".preloader").delay(100).fadeOut("slow");
	jQuery("body").css('overflow-y','visible');

});

/*************************************/
/* Ready Function */
/**************************************/
	
jQuery( document ).ready(function( $ ) {
	$.noConflict();
	
	/*** Auto height function ***/
	var setElementHeight = function () {
		var height = $(window).height();
		$('.autoheight').css('min-height', (height));
		
	};

	$(window).on("resize", function () {
		setElementHeight();
	}).resize();
	
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
	
	/*** 3D Gallery *********/
	new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
	new CBPFWTabs( document.getElementById( 'tabs-ui' ) );
	
	/********Vimeo Video*****************/
	$('.venobox').venobox({
		numeratio: true,
		infinigall: true,
		border: '20px'
	});
	$('.venoboxvid').venobox({
		bgcolor: '#000'
	});
	$('.venoboxframe').venobox({
		border: '6px'
	});
	$('.venoboxinline').venobox({
		framewidth: '300px',
		frameheight: '250px',
		border: '6px',
		bgcolor: '#f46f00'
	});
	$('.venoboxajax').venobox({
		border: '30px;',
		frameheight: '220px'
	});	
		
		
	/*******Schedule Accordion *************/
	
	$('.accordion .item .heading').click(function() {		
	var a = $(this).closest('.item');
	var b = $(a).hasClass('open');
	var c = $(a).closest('.accordion').find('.open');
		
	if(b != true) {
		$(c).find('.content').slideUp(500);
		$(c).removeClass('open');
	}

	$(a).toggleClass('open');
	$(a).find('.content').slideToggle(500);

	});

	$('.nav_slide_button').click(function() {
	$('.pull').slideToggle();
	});	
		
	/******* Speakers Slider *************/
		
	$('#portfolioSlider').flexslider({
		animation: "slide",
		directionNav: false,
		controlNav: true,
		touch: false,
		pauseOnHover: true,

	});

	$('#servicesSlider').flexslider({
		animation: "slide",
		directionNav: false,
		controlNav: true,
		touch: true,
		pauseOnHover: true,

	});

	$('#teamSlider').flexslider({
		animation: "slide",
		directionNav: false,
		controlNav: true,
		touch: true,
		pauseOnHover: true,

	});
	
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
	
	/***************** Animation ******************/
	var wow = new WOW(
	{
	boxClass: 'wow', // animated element css class (default is wow)
	animateClass: 'animated', // animation css class (default is animated)
	offset: 0, // distance to the element when triggering the animation (default is 0)
	mobile: false, // trigger animations on mobile devices (default is true)
	live: true // act on asynchronously loaded content (default is true)
	}
	);
	
	wow.init();
		
		

	
	/*** Overlay close*********/
	$('.md-overlay').click(function(e){
		$("#modal-10").removeClass("md-show");
		$("#modal-11").removeClass("md-show");
	});
		
	/**********Menu Close Logic***************/

	$('.navbar-collapse.in').niceScroll({cursorcolor:"#c8bd9f"});
		$('.nav li a').click(function(){
			$('.navbar-collapse.collapse').toggleClass('in');
	});	
	
	 /******* Nice Scroll *******/

	 $("html").niceScroll({cursorcolor:"#ff1d8d"});
	 
	 /** Placeholder JS call **/
	$('input[type=text], textarea').placeholder();	
	
});

/*************************************/
/* Landing Slider Js */
/**************************************/

	var $slides = $('#slides');

	Hammer($slides[0]).on("swipeleft", function(e) {
	$slides.data('superslides').animate('next');
	});

	Hammer($slides[0]).on("swiperight", function(e) {
	$slides.data('superslides').animate('prev');
	});

	$slides.superslides({
	hashchange: false
	});
	$(".home-bg").swiperight(function() {  
	$slides.data('superslides').animate('prev');		  
	});  
	$(".home-bg").swipeleft(function() {  
	$slides.data('superslides').animate('next'); 
	});  
	$(".landing-text-pos").swiperight(function() {  
	$slides.data('superslides').animate('prev');		  
	});  
	$(".landing-text-pos").swipeleft(function() {  
	$slides.data('superslides').animate('next'); 
	});  

