$(function(){
	$('.faq .title').click(function(){
		if ( $(this).parent().hasClass('open') ) {
			$(this).parent().removeClass('open').find('.content').slideUp(750, 'easeOutQuint');
		} else {
			$('.faq').removeClass('open').find('.content').slideUp(750, 'easeOutQuint');
			
			$(this).parent().addClass('open').find('.content').slideDown(750, 'easeOutQuint');
		}
	});
});