
$("document").ready(function($){
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:3,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true
});});



$("document").ready(function($){
    var nav = $('.main-navigation');
	$('.main-navigation').wrap('<div class="nav-placeholder"></div>');
	$('.nav-placeholder').height($('.main-navigation').outerHeight());
    $(window).scroll(function () {
        if ($(this).scrollTop() > 94) {
            nav.addClass("f-nav");
        } else {
            nav.removeClass("f-nav");
        }
    });
});




$(document).ready(function($){
   $("a[href='#top']").click(function() {
  $("html, body").animate({ scrollTop: 0 }, 2000);
  return false;
}); 
});  


$(document).ready(function(){
$('#mc-embedded-subscribe-form').submit(function() {
    if ($.trim($("#mce-EMAIL").val()) === "") {
        $(this).parent().addClass('emailfieldval');
        return false;
    }
	
});}); 



 
	
$(function() {
 
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if ($.trim($("#interest").val()) === "") {
		$("#interest").addClass('errornotice');
		$('#interest').focus(function(){
   return $("#interest").removeClass('errornotice');
});
        return false;
    } /*---validation for interest*/
		
	if ($.trim($("#edulevel").val()) === "") {
		$("#edulevel").addClass('errornotice');
		$('#edulevel').focus(function(){
   return $('#edulevel').removeClass('errornotice');
});
        return false;
    }  /*---validation for education level*/
	
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});
$(".next1").click(function(){
	if ($.trim($("#fname").val()) === "") {
		$("#fname").addClass('errornoticefield');
		$('#fname').focus(function(){
   return $('#fname').removeClass('errornoticefield');
});
        return false;
    }  /*---validation for firstname*/
	if ($.trim($("#lname").val()) === "") {
		$("#lname").addClass('errornoticefield');
		$('#lname').focus(function(){
   return $('#lname').removeClass('errornoticefield');
});
        return false;
    }  /*---validation for lastname*/
	if ($.trim($("#address").val()) === "") {
		$("#address").addClass('errornoticefield');
		$('#address').focus(function(){
   return $('#address').removeClass('errornoticefield');
});
        return false;
    }  /*---validation for address*/
	if ($.trim($("#city").val()) === "") {
		$("#city").addClass('errornoticefield');
		$('#city').focus(function(){
   return $('#city').removeClass('errornoticefield');
});
        return false;
    }  /*---validation for city*/
	if ($.trim($("#state").val()) === "") {
		$("#state").addClass('errornotice');
		$('#state').focus(function(){
   return $('#state').removeClass('errornotice');
});
        return false;
    }  /*---validation for state*/
	if ($.trim($("#zipcode").val()) === "") {
		$("#zipcode").addClass('errornoticefield');
		$('#zipcode').focus(function(){
   return $('#zipcode').removeClass('errornoticefield');
});
        return false;
    }  /*---validation for zipcode*/
	if ($.trim($("#emailaddress").val()) === "") {
		$("#emailaddress").addClass('errornoticefield');
		$('#emailaddress').focus(function(){
   return $('#emailaddress').removeClass('errornoticefield');
});
        return false;
    }  /*---validation for emailaddress*/
	if ($.trim($("#pnumber").val()) === "") {
		$("#pnumber").addClass('errornoticefield');
		$('#pnumber').focus(function(){
   return $('#pnumber').removeClass('errornoticefield');
});
        return false;
    }  /*---validation for pnumber*/
	
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});


$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	
	if ($.trim($("#methodofstudy").val()) === "") {
		$("#methodofstudy").addClass('errornotice');
		$('#methodofstudy').focus(function(){
   return $('#methodofstudy').removeClass('errornotice');
});
        return false;
    }  /*---validation for methodofstudy*/
	if ($.trim($("#gradyear").val()) === "") {
		$("#gradyear").addClass('errornotice');
		$('#gradyear').focus(function(){
   return $('#gradyear').removeClass('errornotice');
});
        return false;
    }  /*---validation for gradyear*/
	if ($.trim($("#startdate").val()) === "") {
		$("#startdate").addClass('errornotice');
		$('#startdate').focus(function(){
   return $('#startdate').removeClass('errornotice');
});
        return false;
    }  /*---validation for startdate*/
})

});
