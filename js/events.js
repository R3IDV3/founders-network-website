$(function(){
	var counted = false;
	
	$(window).scroll(function(){
		
		$('.event').each(function(){
			if ( isInView($(this)[0]) ) {
				$(this).find('.col-logo').removeClass('offset');
				$(this).find('.col-text').removeClass('offset');
			}
		});

	});
	$(window).trigger('scroll');
});

function isInView(element) {
	var top = element.offsetTop;
	var left = element.offsetLeft;
	var width = element.offsetWidth;
	var height = element.offsetHeight;
	
	while(element.offsetParent) {
	element = element.offsetParent;
	top += element.offsetTop;
	left += element.offsetLeft;
	}
	
	return (
	top < (window.pageYOffset + window.innerHeight) &&
	left < (window.pageXOffset + window.innerWidth) &&
	(top + height) > window.pageYOffset &&
	(left + width) > window.pageXOffset
	);
}