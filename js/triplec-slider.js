jQuery(document).ready(function($){ 
		jQuery('#slides').slides({
			preload: true,
			preloadImage: '<?php echo get_template_directory_uri(); ?>/images/loading.gif',
			play: 5000, // change this to make it go faster or slower
			pause: 2500, //change this to pause more or less
			hoverPause: true,
			pagination: false
	
		});
	});