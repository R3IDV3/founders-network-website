$(function(){
	if ( $('.stats').length ) {
		var counted = false;
		$(window).scroll(function(){
			if ( isInView($('.stats')[0]) && !(counted) ) {
				counted = true;
				$('.count').each(function(){			
					var $self = $(this);
					var to = parseInt($(this).attr('data-to'));
					$({ n: 0 }).animate({ n: to}, {
						duration: 1000,
						step: function(count) {
							$self.find('.n').text(Number((count).toFixed(0)));
						}
					});
				});
			}
		});
	}
});