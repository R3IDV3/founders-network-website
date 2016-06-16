$(function(){
	$('[data-link]').click(function(){
		window.open( $(this).attr('data-link') );
	});
});