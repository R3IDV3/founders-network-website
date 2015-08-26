/**
 * pathLoader.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2014, Codrops
 * http://www.codrops.com
 */
(function() {

	function PathLoader( el ) {
		this.el = el;
		// clear stroke
		this.el.style.strokeDasharray = this.el.style.strokeDashoffset = this.el.getTotalLength();
	}

	PathLoader.prototype._draw = function( val ) {
		this.el.style.strokeDashoffset = this.el.getTotalLength() * ( 1 - val );
	};

	PathLoader.prototype.setProgress = function( val, callback ) {
		this._draw(val);
		if( callback && typeof callback === 'function' ) {
			// give it a time (ideally the same like the transition time) so that the last progress increment animation is still visible.
			setTimeout( callback, 200 );
		}
	};

	PathLoader.prototype.setProgressFn = function( fn ) {
		if( typeof fn === 'function' ) { fn( this ); }
	};

	// add to global namespace
	window.PathLoader = PathLoader;

})(); // Pathloader prototype

(function() {

	var support = { animations : Modernizr.cssanimations },
		container = $('body'),
		header = container.find('.ip-header')[0],
		loader = new PathLoader( $('#ip-loader-circle')[0] ),
		animEndEventNames = { 'WebkitAnimation' : 'webkitAnimationEnd', 'OAnimation' : 'oAnimationEnd', 'msAnimation' : 'MSAnimationEnd', 'animation' : 'animationend' },
		// animation end event name
		animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ];

	function init() {
		var onEndInitialAnimation = function() {
			if( support.animations ) {
				this.removeEventListener( animEndEventName, onEndInitialAnimation );
			}

			startLoading();
		};

		// disable scrolling
		window.addEventListener( 'scroll', noscroll );

		// initial animation
		container.addClass('loading');

		if( support.animations ) {
			container[0].addEventListener( animEndEventName, onEndInitialAnimation );
		}
		else {
			onEndInitialAnimation();
		}
	}

	function startLoading() {
		// simulate loading something..
		var simulationFn = function(instance) {
			var progress = 0,
				interval = setInterval( function() {
					var count = 0;
					// check if each image is complete and increment a counter if it is
					$('#assets').children('img').each(function(){
						if ( $(this)[0].complete ) {
							count++;
						}
					});
					
					// progress is the proportion of completed images / all the images
					progress = count / $('#assets').children('img').length;

					instance.setProgress( progress );

					// reached the end
					if( progress === 1 ) {
						container.removeClass('loading');
						container.addClass('loaded');
						clearInterval( interval );

						var onEndHeaderAnimation = function(ev) {
							if( support.animations ) {
								if( ev.target !== header ) return;
								this.removeEventListener( animEndEventName, onEndHeaderAnimation );
							}

							$(document.body).addClass('layout-switch');
							window.removeEventListener( 'scroll', noscroll );
						};

						if( support.animations ) {
							header.addEventListener( animEndEventName, onEndHeaderAnimation );
						}
						else {
							onEndHeaderAnimation();
						}
					}
				}, 1 );
		};

		loader.setProgressFn( simulationFn );
	}
	
	function noscroll() {
		window.scrollTo( 0, 0 );
	}
	
	// init preloader if needed
	var t, 
		i,
		tt;
	
	clearTimeout(t);
	t = setTimeout(function(){ // preload if the document.readyState isn't complete in 500ms
		clearInterval(i);
		$('.ip-header').fadeIn();
		init();
		
		clearTimeout(tt);
		tt = setTimeout(function(){
			$('body').addClass('fadeIn');
		}, 500);
	}, 500);
	
	clearInterval(i);
	i = setInterval(function(){ // check if the document.readyState is complete every 10ms
		if ( document.readyState == "complete" ) { // don't preload
			clearTimeout(t);
			clearInterval(i);
			$('.ip-header').fadeOut();
			$('body').addClass('fadeIn');
		}
	}, 10);
	
})();