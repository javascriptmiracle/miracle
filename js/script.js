$(document).ready(function(){
  $('.bxslider').bxSlider({
  	captions: true,
  	controls: true,

	mode: 'horizontal',
	slideSelector: '',
	infiniteLoop: true,
	hideControlOnEnd: false,
	speed: 500,
	easing: null,
	slideMargin: 0,
	startSlide: 0,
	randomStart: false,
	ticker: false,
	tickerHover: false,
	adaptiveHeight: false,
	adaptiveHeightSpeed: 500,
	video: false,
	useCSS: true,
	preloadImages: 'visible',
	responsive: true,
	slideZIndex: 50,
	wrapperClass: 'bx-wrapper',

	// TOUCH
	touchEnabled: true,
	swipeThreshold: 50,
	oneToOneTouch: true,
	preventDefaultSwipeX: true,
	preventDefaultSwipeY: false,

	// ACCESSIBILITY
	ariaLive: true,
	ariaHidden: true,

	// KEYBOARD
	keyboardEnabled: false,

	// PAGER
	pager: true,
	pagerType: 'full',
	pagerShortSeparator: ' / ',
	pagerSelector: null,
	buildPager: null,
	pagerCustom: null,

	// CONTROLS

	nextText: 'Next',
	prevText: 'Prev',
	nextSelector: null,
	prevSelector: null,
	autoControls: false,
	startText: 'Start',
	stopText: 'Stop',
	autoControlsCombine: false,
	autoControlsSelector: null,

	// AUTO
	auto: false,
	pause: 4000,
	autoStart: true,
	autoDirection: 'next',
	stopAutoOnClick: false,
	autoHover: false,
	autoDelay: 0,
	autoSlideForOnePage: false,

	// CAROUSEL
	minSlides: 1,
	maxSlides: 1,
	moveSlides: 0,
	slideWidth: 0,
	shrinkItems: false,
  });
});

$(document).ready(function(){
	$('.bxslider-sponsor').bxSlider({
		captions: true,
		controls: true,

		mode: 'horizontal',
		slideSelector: '',
		infiniteLoop: true,
		hideControlOnEnd: false,
		speed: 500,
		easing: null,
		slideMargin: 0,
		startSlide: 0,
		randomStart: false,
		ticker: false,
		tickerHover: false,
		adaptiveHeight: false,
		adaptiveHeightSpeed: 500,
		video: false,
		useCSS: true,
		preloadImages: 'visible',
		responsive: true,
		slideZIndex: 50,
		wrapperClass: 'bx-wrapper',

		// TOUCH
		touchEnabled: true,
		swipeThreshold: 50,
		oneToOneTouch: true,
		preventDefaultSwipeX: true,
		preventDefaultSwipeY: false,

		// ACCESSIBILITY
		ariaLive: true,
		ariaHidden: true,

		// KEYBOARD
		keyboardEnabled: false,

		// PAGER
		pager: false,
		pagerType: 'full',
		pagerShortSeparator: ' / ',
		pagerSelector: null,
		buildPager: null,
		pagerCustom: null,

		// CONTROLS

		nextText: 'Next',
		prevText: 'Prev',
		nextSelector: null,
		prevSelector: null,
		autoControls: false,
		startText: 'Start',
		stopText: 'Stop',
		autoControlsCombine: false,
		autoControlsSelector: null,

		// AUTO
		auto: false,
		pause: 4000,
		autoStart: true,
		autoDirection: 'next',
		stopAutoOnClick: false,
		autoHover: false,
		autoDelay: 0,
		autoSlideForOnePage: false,

		// CAROUSEL
		minSlides: 1,
		maxSlides: 1,
		moveSlides: 0,
		slideWidth: 0,
		shrinkItems: false,
	});
});


$(document).on('click', '.link-list__list a', function(event){
	event.preventDefault();

	$('html, body').animate({
		scrollTop: $( $.attr(this, 'href') ).offset().top
	}, 1500);
});

$(document).ready(function(){
	$('.js-square').hover(
		function() {

			$(this).find('.square__inner-hover').animate({
				bottom: '0%'
			}, 'fast' );
		},function() {

			$(this).find('.square__inner-hover').animate({
				bottom: '100%'
			},'fast');

		}
	);
})