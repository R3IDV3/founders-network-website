$(function(){
	$('.fit').each(function(){
		var fontSize = window.getComputedStyle($(this)[0]).getPropertyValue('font-size').slice(0, -2);
		while ( $(this)[0].scrollWidth > $(this).width() ) {
			fontSize--;
			$(this).css('font-size', fontSize + 'px');
		}
		$(this).css('overflow', 'hidden');
	});
});