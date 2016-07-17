$(function() {
	$('#home').find('nav').find('a:contains("Home")').parent().addClass("active");
	$('#about').find('nav').find('a:contains("About")').parent().addClass("active");
	$('#team').find('nav').find('a:contains("Team")').parent().addClass("active");
	$('#programs').find('nav').find('a:contains("Programs")').parent().addClass("active");
	$('#events').find('nav').find('a:contains("Events")').parent().addClass("active");
	$('#faq').find('nav').find('a:contains("FAQ")').parent().addClass("active");
});
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
$(function(){
	var counted = false;
	
	$(window).scroll(function(){
		
		$('.event').each(function(){
			if ( isInView($(this)[0]) ) {
				$(this).find('.col-logo').removeClass('offset');
				$(this).find('.col-text').removeClass('offset');
			}
		});

	});
	$(window).trigger('scroll');
});

function isInView(element) {
	var top = element.offsetTop;
	var left = element.offsetLeft;
	var width = element.offsetWidth;
	var height = element.offsetHeight;
	
	while(element.offsetParent) {
	element = element.offsetParent;
	top += element.offsetTop;
	left += element.offsetLeft;
	}
	
	return (
	top < (window.pageYOffset + window.innerHeight) &&
	left < (window.pageXOffset + window.innerWidth) &&
	(top + height) > window.pageYOffset &&
	(left + width) > window.pageXOffset
	);
}
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
$(function(){
	$('[data-link]').click(function(){
		window.open( $(this).attr('data-link') );
	});
});
/* Modernizr 2.8.3 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-cssanimations-touch-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load
 */
/* jshint ignore:start */
;window.Modernizr=function(a,b,c){function z(a){j.cssText=a}function A(a,b){return z(m.join(a+";")+(b||""))}function B(a,b){return typeof a===b}function C(a,b){return!!~(""+a).indexOf(b)}function D(a,b){for(var d in a){var e=a[d];if(!C(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function E(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:B(f,"function")?f.bind(d||b):f}return!1}function F(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+o.join(d+" ")+d).split(" ");return B(b,"string")||B(b,"undefined")?D(e,b):(e=(a+" "+p.join(d+" ")+d).split(" "),E(e,b,c))}var d="2.8.3",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n="Webkit Moz O ms",o=n.split(" "),p=n.toLowerCase().split(" "),q={},r={},s={},t=[],u=t.slice,v,w=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},x={}.hasOwnProperty,y;!B(x,"undefined")&&!B(x.call,"undefined")?y=function(a,b){return x.call(a,b)}:y=function(a,b){return b in a&&B(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=u.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(u.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(u.call(arguments)))};return e}),q.touch=function(){var c;return"ontouchstart"in a||a.DocumentTouch&&b instanceof DocumentTouch?c=!0:w(["@media (",m.join("touch-enabled),("),h,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(a){c=a.offsetTop===9}),c},q.cssanimations=function(){return F("animationName")};for(var G in q)y(q,G)&&(v=G.toLowerCase(),e[v]=q[G](),t.push((e[v]?"":"no-")+v));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)y(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},z(""),i=k=null,function(a,b){function l(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function m(){var a=s.elements;return typeof a=="string"?a.split(" "):a}function n(a){var b=j[a[h]];return b||(b={},i++,a[h]=i,j[i]=b),b}function o(a,c,d){c||(c=b);if(k)return c.createElement(a);d||(d=n(c));var g;return d.cache[a]?g=d.cache[a].cloneNode():f.test(a)?g=(d.cache[a]=d.createElem(a)).cloneNode():g=d.createElem(a),g.canHaveChildren&&!e.test(a)&&!g.tagUrn?d.frag.appendChild(g):g}function p(a,c){a||(a=b);if(k)return a.createDocumentFragment();c=c||n(a);var d=c.frag.cloneNode(),e=0,f=m(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function q(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return s.shivMethods?o(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+m().join().replace(/[\w\-]+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(s,b.frag)}function r(a){a||(a=b);var c=n(a);return s.shivCSS&&!g&&!c.hasCSS&&(c.hasCSS=!!l(a,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),k||q(a,c),a}var c="3.7.0",d=a.html5||{},e=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,f=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,g,h="_html5shiv",i=0,j={},k;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",g="hidden"in a,k=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){g=!0,k=!0}})();var s={elements:d.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:c,shivCSS:d.shivCSS!==!1,supportsUnknownElements:k,shivMethods:d.shivMethods!==!1,type:"default",shivDocument:r,createElement:o,createDocumentFragment:p};a.html5=s,r(b)}(this,b),e._version=d,e._prefixes=m,e._domPrefixes=p,e._cssomPrefixes=o,e.testProp=function(a){return D([a])},e.testAllProps=F,e.testStyles=w,e.prefixed=function(a,b,c){return b?F(a,b,c):F(a,"pfx")},g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+t.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
/* jshint ignore:end */
$(function(){
	$('.nav-trigger').click(function(){
		$('.nav-bottom').slideToggle(500, 'easeOutQuint');
	});
});
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
$(function(){
	var i = 0,
		t,
		tt,
		taglines = [
			'Western\'s premier business entreneurship network',
			'Establish and grow your unique startup venture',
			'<a class="feature-link" href="/director-applications">Get Involved<br>Become a Director</a>'
		],
		images = [
			'img/entrepeneurship.png',
			'img/devices.png',
			'img/entrepeneurship.png'
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
	
	$('.t-trigger').click(function(){
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
	
	$('.t-increment').click(function(){
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
	
	$('.t-decrement').click(function(){
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
	
	if ( $('html').hasClass('no-touch') ) {
		$('header.home').on('mouseenter', function(){
			$('.t-increment, .t-decrement').fadeIn(500);
		});
		
		$('header.home').on('mouseleave', function(){
			$('.t-increment, .t-decrement').fadeOut(500);
		});
	}
	
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
$(function(){
	var year = new Date().getFullYear();
	$('.year').html(year);
});