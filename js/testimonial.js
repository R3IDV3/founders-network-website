$(function(){
	$('.testimonial').click(function(){
		window.open( $(this).attr('data-link') );
	});
});