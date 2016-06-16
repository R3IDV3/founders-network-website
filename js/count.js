$(window).load(function(){
	$('.stats').each(function(){
		var $self = $(this),
			counted = false;
		$(window).scroll(function(){
			if ( isInView($self[0]) && !(counted) ) {
				counted = true;
				$('.count').each(function(){			
					var $self = $(this);
					var to = parseInt($(this).children('.n').text());
					$({ n: 0 }).animate({ n: to}, {
						duration: 1000,
						step: function(count) {
							$self.find('.n').text(Number((count).toFixed(0)));
						}
					});
				});
			}
		});
	});
});