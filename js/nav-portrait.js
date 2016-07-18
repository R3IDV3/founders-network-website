$(function(){
	$('.nav-trigger').click(function(){
		$('.nav-bottom').slideToggle(500, 'easeOutQuint');
	});
	
	$('nav.visible-portrait a.with-submenu').click(function() {
    	$(this).toggleClass('open').siblings('ul').slideToggle(300, 'easeOutQuint');
	});
});