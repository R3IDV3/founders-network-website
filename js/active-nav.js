$(function() {
	$('#home').find('nav').find('a:contains("Home")').parent().addClass("active");
	$('#about').find('nav').find('a:contains("About")').parent().addClass("active");
	$('#team').find('nav').find('a:contains("Team")').parent().addClass("active");
	$('#programs').find('nav').find('a:contains("Programs")').parent().addClass("active");
	$('#events').find('nav').find('a:contains("Events")').parent().addClass("active");
	$('#faq').find('nav').find('a:contains("FAQ")').parent().addClass("active");
});