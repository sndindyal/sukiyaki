$(document).ready(function() {

/* 	$("#para a.load").addClass("active"); */
	redrawDotNav();
	
	/* Scroll event handler */
    $(window).bind('scroll',function(e){    	
    	parallaxScroll();
			redrawDotNav();			
    });
    
	/* Next/prev and para nav btn click handlers */
	$('a.manned-flight').click(function(n){
    	$('html, body').animate({
    		scrollTop:$('#manned-flight').offset().top
    	}, 1000, function() {
	    	parallaxScroll(); // Callback is required for iOS
		});
		/*
$("#para a").removeClass("active");
		$(this).addClass("active");
*/redrawDotNav();
  	n.preventDefault();
	});
   	
   	$('a.frameless-parachute').click(function(n){
    	$('html, body').animate({
    		scrollTop:$('#frameless-parachute').offset().top
    	}, 1000, function() {
	    	parallaxScroll(); // Callback is required for iOS
		});
			/*
$("#para a").removeClass("active");
			$(this).addClass("active");
*/redrawDotNav();
    	n.preventDefault();
    });
    
    $('a.english-channel').click(function(n){
    	$('html, body').animate({
    		scrollTop:$('#english-channel').offset().top
    	}, 1000, function() {
	    	parallaxScroll(); // Callback is required for iOS
		});
			/*
$("#para a").removeClass("active");
			$(this).addClass("active");
*/redrawDotNav();
    	n.preventDefault();
    });
	
	$('a.about').click(function(n){
    	$('html, body').animate({
    		scrollTop:$('#about').offset().top
    	}, 1000, function() {
	    	parallaxScroll(); // Callback is required for iOS
		});
			/*
$("#para a").removeClass("active");
			$(this).addClass("active");
*/redrawDotNav();
    	n.preventDefault();
    });
    
    $('a.jerard').click(function(n){
    	$('html, body').animate({
    		scrollTop:$('#jerard').offset().top
    	}, 1000, function() {
	    	parallaxScroll(); // Callback is required for iOS
		});
			/*
$("#para a").removeClass("active");
			$(this).addClass("active");
*/redrawDotNav();
    	n.preventDefault();
    });
    		
		$('a.helena').click(function(n){
    	$('html, body').animate({
    		scrollTop:$('#helena').offset().top
    	}, 1000, function() {
	    	parallaxScroll(); // Callback is required for iOS
		});
			/*
$("#para a").removeClass("active");
			$(this).addClass("active");
*/redrawDotNav();
    	n.preventDefault();
    });
    
    /* Show/hide dot lav labels on hover 
    $('nav#para a').hover(
    	function () {
			$(this).prev('h1').show();
		},
		function () {
			$(this).prev('h1').hide();
		}
    );
    */    
});

/* Scroll the background layers */
function parallaxScroll(){
	var scrolled = $(window).scrollTop();
	$('#parallax-bg1').css('top',(0-(scrolled*.25))+'px');
	$('#parallax-bg2').css('top',(0-(scrolled*.5))+'px');
	$('#parallax-bg3').css('top',(0-(scrolled*.75))+'px');
}

/* Set navigation dots to an active state as the user scrolls  */
function redrawDotNav(){
	var section1Top =  $('#manned-flight').offset().top - (($('#frameless-parachute').offset().top - $('#manned-flight').offset().top) / 2);
	// The top of each section is offset by half the distance to the previous section.
	var section2Top =  $('#frameless-parachute').offset().top - (($('#english-channel').offset().top - $('#frameless-parachute').offset().top) / 2);
	var section3Top =  $('#english-channel').offset().top - (($('#about').offset().top - $('#english-channel').offset().top) / 2);
	var section4Top =  $('#about').offset().top - (($('#jerard').offset().top - $('#about').offset().top) / 2);
	var section5Top =  $('#jerard').offset().top - (($('#helena').offset().top - $('#jerard').offset().top) / 2);
	var section6Top =  $('#helena').offset().top - (($(document).height() - $('#helena').offset().top) / 2);;
	
	$('nav#para a').removeClass('active');
	if($(document).scrollTop() >= section1Top && $(document).scrollTop() < section2Top){
		$('nav#para a.manned-flight').addClass('active');
	} else if ($(document).scrollTop() >= section2Top && $(document).scrollTop() < section3Top){
		$('nav#para a.frameless-parachute').addClass('active');
	} else if ($(document).scrollTop() >= section3Top && $(document).scrollTop() < section4Top){
		$('nav#para a.english-channel').addClass('active');
	} else if ($(document).scrollTop() >= section4Top && $(document).scrollTop() < section5Top){
		$('nav#para a.about').addClass('active');
	} else if ($(document).scrollTop() >= section5Top && $(document).scrollTop() < section6Top){
		$('nav#para a.jerard').addClass('active');
	}	else if ($(document).scrollTop() >= section6Top){
		$('nav#para a.helena').addClass('active');
	}
	
}

var $sidebar   = $("nav#para"),
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 40;

    $window.scroll(function() {
        if ($window.scrollTop() > offset.top) {
            $sidebar.stop().animate({
                top: $window.scrollTop() - offset.top + topPadding
            });
        } else {
            $sidebar.stop().animate({
                top: 0
            });
        }
    });
