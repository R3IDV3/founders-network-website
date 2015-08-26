$(function(){
	var i = 0,
		t,
		tt,
		taglines = [
			'Western\'s premier business entreneurship network',
			'Establish and grow your unique startup venture',
		],
		images = [
			'img/entrepeneurship.png',
			'img/devices.png',
		];
	
	for ( item = 0; item < taglines.length; item++ ) {
		$('header.home .t-trigger-wrapper').append(
			$(document.createElement('span'))
				.addClass('t-trigger')
				.attr('data-ticker-item', item)
		);
	}
	
	$('.feature')
		.find('h1')
			.html(taglines[i])
			.end()
		.find('img')
			.attr('src', images[i]);
	
	$('.t-trigger[data-ticker-item="' + i + '"]').addClass('active');
	
	clearInterval(t);
	
	T();
	
	$('header.home').on('click', '.t-trigger', function(){
		if ( i != parseInt($(this).attr('data-ticker-item')) ) {
			clearInterval(t);
			$('header.home')
				.find('.t-trigger[data-ticker-item="' + i + '"]')
					.removeClass('active');
			i = parseInt($(this).attr('data-ticker-item'));
			$('.feature').addClass('animate-out');
			clearTimeout(tt);
			TT();
			T();
		}
	});
	
	$('header.home').on('click', '.t-increment', function(){
		clearInterval(t);
		$('header.home')
				.find('.t-trigger[data-ticker-item="' + i + '"]')
					.removeClass('active');
		i = (i + 1) % taglines.length;
		$('.feature').addClass('animate-out');
		clearTimeout(tt);
		TT();
		T();
	});
	
	$('header.home').on('click', '.t-decrement', function(){
		clearInterval(t);
		$('header.home')
				.find('.t-trigger[data-ticker-item="' + i + '"]')
					.removeClass('active');
		i = i - 1 >= 0 ? i - 1 : taglines.length - 1;
		$('.feature').addClass('animate-out');
		clearTimeout(tt);
		TT();
		T();
	});
	
	$('header.home').on('mouseenter', function(){
		$('.t-increment, .t-decrement').fadeIn(500);
	});
	
	$('header.home').on('mouseleave', function(){
		$('.t-increment, .t-decrement').fadeOut(500);
	});
	
	function TT() {
		tt = setTimeout(function(){
			$('.feature')
				.find('h1')
					.html(taglines[i])
					.end()
				.find('img')
					.attr('src', images[i])
					.end()
				.removeClass('animate-out');
			$('header.home')
				.find('.t-trigger[data-ticker-item="' + i + '"]')
					.addClass('active');
		}, 500);
	}
	
	function T() {
		t = setInterval(function(){
			$('header.home')
					.find('.t-trigger[data-ticker-item="' + i + '"]')
						.removeClass('active');
			i = (i + 1) % taglines.length;
			$('.feature').addClass('animate-out');
			clearTimeout(tt);
			TT();
		}, 5000);
	}
});