$(function() {
	$('#home').find('nav').find('a:contains("Home")').parent().addClass("active");
	$('#community').find('nav').find('a:contains("Community")').parent().addClass("active");
	$('#events').find('nav').find('a:contains("Events")').parent().addClass("active");
	$('#faq').find('nav').find('a:contains("FAQ")').parent().addClass("active");
});