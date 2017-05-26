import svg4everybody from 'svg4everybody';
import $ from 'jquery';
import 'slick-carousel';
import 'retinajs';
import 'bootstrap';


$(() => {
	svg4everybody();
});

const mainModule = (function () {
	let cachedDOM = {};

	const cacheDOM = function () {
		const self = {};

		self.sliderControl = $('.controls__wrapper');
		self.phoneItem = $('.preview__phone');
		self.contactInput = $('#contact-form input, #contact-form textarea');
		self.contactLabel = $('#contact-form label');
		self.imgSlider = $('.img-slider');
		self.quotesSlider = $('.quotes');
		self.mobileMenu = $('.hamburger');
		self.menuWrapper = $('.nav__nav-wrapper');
		self.appsSlider = $('.preview__items-wrapper');
		return self;
	};

	const previewPhoneClick = function () {
		cachedDOM.phoneItem.on('click', function () {
			cachedDOM.phoneItem.removeClass('preview__phone--active');
			const stepIndex = $(this).parent().index();

			$(this).addClass('preview__phone--active');
			cachedDOM.sliderControl.removeClass('controls__wrapper--active');
			cachedDOM.sliderControl.eq(stepIndex).addClass('controls__wrapper--active');
		});
	};

	const previewCtrlClick = function () {
		cachedDOM.sliderControl.on('click', function () {
			cachedDOM.sliderControl.removeClass('controls__wrapper--active');
			const stepIndex = $(this).index();
			$(this).addClass('controls__wrapper--active');
			cachedDOM.phoneItem.removeClass('preview__phone--active');
			cachedDOM.phoneItem.eq(stepIndex).addClass('preview__phone--active');
		});
	};

	const anchorScroll = function () {
		$('a').on('click', function () {
			if (this.hash !== '') {
				// Store hash
				const hash = this.hash;
				$('html, body').animate({
					scrollTop: $(hash).offset().top
				}, 600, function () {
					window.location.hash = hash;
				});
			}
		});
	};

	const contactFormInput = function () {
		cachedDOM.contactInput.on('focus', function () {
			$(this).parent().find('label').addClass('focus');
		});

		cachedDOM.contactInput.on('blur', function () {
			if ($(this).val() === '') {
				$(this).parent().find('label').removeClass('focus');
			}
		});
	};

	const stickyHeader = function () {
		const myElement = document.querySelector('header');
		// construct an instance of Headroom, passing the element

		const headroom = new Headroom(myElement, {
			// vertical offset in px before element is first unpinned
			offset: 100,
			// scroll tolerance in px before state changes
			// or you can specify tolerance individually for up/down scroll
			tolerance: {
				up: 10,
				down: 10
			},
			// css classes to apply
			classes: {
				// when element is initialised
				initial: 'headroom',
				// when scrolling up
				pinned: 'headroom--pinned',
				// when scrolling down
				unpinned: 'headroom--unpinned',
				// when above offset
				top: 'headroom--top',
				// when below offset
				notTop: 'headroom--not-top',
				// when at bottom of scoll area
				bottom: 'headroom--bottom',
				// when not at bottom of scroll area
				notBottom: 'headroom--not-bottom'
			}
		});

		headroom.options = {
			tolerance: {
				up: 0,
				down: 0
			},
			offset: 0,
			scroller: window,
			classes: {
				pinned: 'headroom--pinned',
				unpinned: 'headroom--unpinned',
				top: 'headroom--top',
				notTop: 'headroom--not-top',
				bottom: 'headroom--bottom',
				notBottom: 'headroom--not-bottom',
				initial: 'headroom'
			}
		};
		// initialise
		headroom.init();

	};

	const btnTriggerContactUs = function () {
		$('div[id^=\'btn-contact-us\']').click(function () {
			$('#contact-form').modal({
				show: true
			});
		});
	};

	const modalContactUs = function () {
		$('#contact-form').on('shown.bs.modal', function () {
			cachedDOM.mobileMenu.removeClass('is-active');
			cachedDOM.menuWrapper.removeClass('nav__nav-wrapper--opened');
		});
	};

	const mobileMenu = function () {
		cachedDOM.mobileMenu.on('click', function (e) {
			e.stopPropagation();
			$(this).toggleClass('is-active');
			cachedDOM.menuWrapper.toggleClass('nav__nav-wrapper--opened');
		});

		$('.nav__nav-wrapper a').on('click', function (e) {
			e.stopPropagation();
			$('.hamburger--spring').removeClass('is-active');
			cachedDOM.menuWrapper.removeClass('nav__nav-wrapper--opened');
		});

		$(document).on('click', function (e) {
			if ($('div[class^=\'nav__\']').has(e.target).length === 0) {
				cachedDOM.mobileMenu.removeClass('is-active');
				cachedDOM.menuWrapper.removeClass('nav__nav-wrapper--opened');
			}
		});
	};

	const whatWeDoSlider = function () {
		var $window = $(window),
			toggleSlick;

		toggleSlick = function () {
			if ($window.width() < 415) {
				cachedDOM.imgSlider.not('.slick-initialized').slick({
					dots: true,
					infinite: false,
					speed: 300,
					slidesToShow: 2,
					slidesToScroll: 1,
					adaptiveHeight: true,
					arrows: false,
					responsive: [
						{
							breakpoint: 9999,
							settings: 'unslick'
						},
						{
							breakpoint: 415,
							settings: {
								dots: true,
								infinite: false,
								speed: 300,
								slidesToShow: 1,
								slidesToScroll: 1,
								adaptiveHeight: true
							}
						}
					]
				});
			}
		};

		$window.resize(toggleSlick);
		toggleSlick();
	};

	const quotesSlider = function () {

		var $window = $(window),
			toggleSlick;

		toggleSlick = function () {
			if ($window.width() <= 769) {
				cachedDOM.quotesSlider.not('.slick-initialized').slick({
					dots: true,
					infinite: false,
					speed: 300,
					slidesToShow: 2,
					slidesToScroll: 1,
					adaptiveHeight: true,
					arrows: false,
					responsive: [
						{
							breakpoint: 9999,
							settings: 'unslick'
						},
						{
							breakpoint: 769,
							settings: {
								dots: true,
								infinite: false,
								speed: 300,
								slidesToShow: 1,
								slidesToScroll: 1,
								adaptiveHeight: true
							}
						}
					]
				});
			}
		};

		$window.resize(toggleSlick);
		toggleSlick();
	};

	const appsSlider = function () {
		var $window = $(window),
			toggleSlick;

		toggleSlick = function () {
			if ($window.width() <= 789) {
				cachedDOM.appsSlider.not('.slick-initialized').slick({
					dots: true,
					infinite: false,
					speed: 300,
					slidesToShow: 2,
					slidesToScroll: 1,
					adaptiveHeight: true,
					arrows: false,
					responsive: [
						{
							breakpoint: 9999,
							settings: 'unslick'
						},
						{
							breakpoint: 768,
							settings: {
								arrows: true,
								dots: true,
								infinite: true,
								speed: 300,
								slidesToShow: 1,
								slidesToScroll: 1,
								adaptiveHeight: true
							}
						}
					]
				});
			}
		};

		$window.resize(toggleSlick);
		toggleSlick();
	};

	const init = function () {
		cachedDOM = cacheDOM();
		previewPhoneClick();
		previewCtrlClick();
		anchorScroll();
		contactFormInput();
		stickyHeader();
		mobileMenu();
		modalContactUs();
		btnTriggerContactUs();
		quotesSlider();
		whatWeDoSlider();
		appsSlider();
	};

	return {
		init
	};
})();

$(document).ready(function () {
	mainModule.init();
});
