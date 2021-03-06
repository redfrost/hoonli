// iPhone pull addressbar
/mobile/i.test(navigator.userAgent) && !window.location.hash && setTimeout(function () {
  window.scrollTo(0, 1);
}, 1000);


<!-- Menu 'Sublevel Indicator' -->
  		jQuery(function($){
    		 $('.menu li:has(".sub-menu")').addClass('has-sub-menu');
  		});
  	
    <!-- Menu 'Last Child' Addition -->
		/* <![CDATA[ */
		jQuery(document).ready( function($) {
			$('.menu > li:first-child').addClass('first-item');
			$('.menu > li:last-child').addClass('last-item');
			} );
		/* ]]> */
	

    // To Top
		    $(document).ready(function() {
		    
		      $('.to-top a').smoothScroll({offset: 0});
		    
		    });



	
<!-- Image Scroll -->	
    // speed in milliseconds
	var scrollSpeed = 60;
	
	// set the default position
	var current = 0;

	// set the direction
	var direction = 'h';

	function bgscroll(){

    	// 1 pixel row at a time
	    current -= 1;
   
	    // move the background with backgrond-position css properties
	    jQuery('div.imagescroll').css("backgroundPosition", (direction == 'h') ? current+"px 0" : "0 " + current+"px");
   
	}

	//Calls the scrolling function repeatedly
	 setInterval("bgscroll()", scrollSpeed);	
	


/* Display caption in Fancybox plugin */
jQuery(document).ready(function($) {
	jQuery( 'a[href$=".jpg"], a[href$=".jpeg"], a[href$=".gif"], a[href$=".png"]' ).each( function () {
			var imageTitle = '';
			if ( jQuery( this ).next().hasClass( 'wp-caption-text' ) ) {
				imageTitle = jQuery( this ).next().text();
			}
			
			jQuery( this ).attr( 'title', imageTitle );
		});
	});
