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

	$('.navbar-collapse.in').niceScroll({cursorcolor:"#c8bd9f"});
		$('.nav li a').click(function(){
			$('.navbar-collapse.collapse').toggleClass('in');
	});	
/***********************************/
/*Nice Scroll*/
/**********************************/
	 $("html").niceScroll();

/***********************************/
/*Placeholder JS call*/
/**********************************/	 
	$('input[type=text], textarea').placeholder();	


/***********************************/
/*Contact Us JS*/
/**********************************/	
	
	$("#submit_btn").click(function() 
	{ 
			
	    var filter = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		
		var e = document.getElementById("field_1");
		var user_type = e.options[e.selectedIndex].text;
		
		/*var e1 = document.getElementById("field_2");
		var registration_purpose = e1.options[e1.selectedIndex].text;
		
		var e2 = document.getElementById("field_3");
		var event_time = e2.options[e2.selectedIndex].text;*/
		
		var person_name = document.getElementById("name").value;
		var user_email = document.getElementById("email1").value;
		
		var proceed = true;
		
		
		if(person_name == ""){ 
            var error1 = '<div class="enter-name col-lg-3 align-center"> Enter the name </div>';
			jQuery("#result").hide().html(error1).fadeIn(500);
			proceed = false;
			return false;
        }
		
        if(user_email== ""){
			var error2 = '<div class="enter-email col-lg-3 align-center"> Enter the email </div>';
			jQuery("#result").hide().html(error2).fadeIn(500);
            proceed = false;
			
		}
		else if(!filter.test(user_email)) {
			var invalid = '<div class="invalid-email col-lg-3 align-center"> Invalid Email </div>';
			jQuery("#result").hide().html(invalid).fadeIn(500);
            proceed = false;
			
        }
	
		if (proceed) //everything looks good! proceed...
		{
			
			//data to be sent to server
			var post_data = {
				'userName': person_name,
				'userType': user_type,
				'userEmail': user_email,

			}
			
			//Ajax post data to server
			jQuery.post('contact_me.php', post_data, function(response) {
				//load json data from server and output message
				if (response.type == 'error') {
					var output = '<div class="error col-lg-3 align-center">' + response.text + '</div>';
				} else {
					var output = '<div class="success col-lg-3 align-center">' + response.text + '</div>';
					//reset values in all input fields
					
				}
				jQuery("#result").hide().html(output).fadeIn(500);
				
			}, 'json');
		}

		return false;
	 
	});
	
	/** Overlay close **/
	$('.md-overlay').click(function(e){
		$("#terms_conditions").removeClass("md-show");
		$("#modal-11").removeClass("md-show");
    });
    
    /**********Menu Close Logic***************/

	$('.navbar-collapse.in').niceScroll({cursorcolor:"#c8bd9f"});
    $('.nav li a').click(function(){
        $('.navbar-collapse.collapse').toggleClass('in');
});	

 /******* Nice Scroll *******/

 $("html").niceScroll({cursorcolor:"#ff1d8d"});
 

	
});
