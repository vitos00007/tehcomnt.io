jQuery(window).load(function() {
		if(jQuery('#slider') > 0) {
        jQuery('.nivoSlider').nivoSlider({
        	effect:'fade',
    });
		} else {
			jQuery('#slider').nivoSlider({
        	effect:'fade',
    });
		}
});
	

// NAVIGATION CALLBACK
var ww = jQuery(window).width();
jQuery(document).ready(function() { 
	jQuery(".mycustommenu li a").each(function() {
		if (jQuery(this).next().length > 0) {
			jQuery(this).addClass("parent");
		};
	})
	jQuery(".toggleMenu").click(function(e) { 
		e.preventDefault();
		jQuery(this).toggleClass("active");
		jQuery(".mycustommenu").slideToggle('fast');
	});
	adjustMenu();
})

// navigation orientation resize callbak
jQuery(window).bind('resize orientationchange', function() {
	ww = jQuery(window).width();
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 981) {
		jQuery(".toggleMenu").css("display", "block");
		if (!jQuery(".toggleMenu").hasClass("active")) {
			jQuery(".mycustommenu").hide();
		} else {
			jQuery(".mycustommenu").show();
		}
		jQuery(".mycustommenu li").unbind('mouseenter mouseleave');
	} else {
		jQuery(".toggleMenu").css("display", "none");
		jQuery(".mycustommenu").show();
		jQuery(".mycustommenu li").removeClass("hover");
		jQuery(".mycustommenu li a").unbind('click');
		jQuery(".mycustommenu li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
			jQuery(this).toggleClass('hover');
		});
	}
}

jQuery(document).ready(function() {
        jQuery('.welcome_contentbox h3').each(function(index, element) {
            var heading = jQuery(element);
            var word_array, last_word, first_part;

            word_array = heading.html().split(/\s+/); // split on spaces
            last_word = word_array.pop();             // pop the last word
            first_part = word_array.join(' ');        // rejoin the first words together

            heading.html([first_part, ' <span>', last_word, '</span>'].join(''));
        });
});	