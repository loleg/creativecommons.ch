/* Author:
 * Fabricatorz JS Adaptor Code for CC site
 */


jQuery(document).ready(function(){


  // Dropdown for topbar nav
  // ===============================

  jQuery(".topbar").dropdown();
  
  // Help popovers
  // ===============================

	jQuery("a.helpLink").bind("click", function(e) {
		jQuery(this).next('.help-popover').toggleClass('open');
		e.preventDefault();
	});
	
	jQuery(".help-popover a.close").bind('click', function(e) {
		jQuery(this).parent().parent().parent().removeClass('open');
		e.preventDefault();
	});
  
  // Carousel slides
  // ===============================

  jQuery(function(){
  	if (typeof jQuery().slides == 'undefined') return;
    jQuery("#slides").slides({
		generateNextPrev: true,
		next: 'next',
		previous: 'prev',
		pagination: true,
		paginationClass: 'frames',
		preload: false,
		preloadImage: 'img/loading.gif',
		play: 4000,
		pause: 10000,
		effect: 'fade',
		fadeSpeed: 500,
		crossfade: 'true',
		fadeEasing: 'easeOutQuad',
		hoverPause: true,
		animationStart: function(current){
			jQuery('.caption').animate({
				bottom: -100
			},100);
			if (window.console && console.log) {
				// example return of current slide number
				console.log('animationStart on slide: ', current);
			};
		},
		animationComplete: function(current){
			jQuery('.caption').animate({
				bottom:0
			},200);
			if (window.console && console.log) {
				// example return of current slide number
				console.log('animationComplete on slide: ', current);
			};
		},
		slidesLoaded: function() {
			jQuery('.caption').animate({
				bottom:0
			},200);
		}
	});
  });

  // Case studies
  // ===============================

  jQuery(function() {
  	if (typeof jQuery().slides == 'undefined') return;
	jQuery('#case').slides({
		container: 'studies',
		generateNextPrev: false,
		paginationClass: 'frames',
		play: 15000,
		pause: 15000,
		effect: 'fade',
		fadeSpeed: 0
	});
  });

  // Store slides
  // ===============================

  jQuery(function() {
  	if (typeof jQuery().slides == 'undefined') return;
	jQuery("#store").slides({
		container: 'swag',
		generateNextPrev: false,
		pagination: false,
		generatePagination: false,
		play: 7000,
		pause: 7000,
		effect: 'fade',
		fadeSpeed: 500,
		crossfade: 'true',
		fadeEasing: 'easeOutQuad',
		hoverPause: true
	});
  });

});


// Single out IE6 for not displaying the carousel, for all other browsers just
// hope/expect it to work.
if (navigator.userAgent.match(/MSIE\s6/)) {
	jQuery(window).load( jQuery('div.carousel').css('display', 'none') );
} else {
    jQuery(window).load( jQuery('div.carousel').css('display', 'block') );
}