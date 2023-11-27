require('./bootstrap');

require('./functions');

$(function() {
	var mmenu = new Mmenu('#menu', {
		theme: 'light-contrast',
		navbar: {
			title: '導覽',
		}
	}, {
		offCanvas: {
			position: 'left',
			page: {
				selector: '#page',
			},
		},
	});
	
	var mmenuAPI = mmenu.API;
	
	mmenuAPI.bind('open:after', () => {
		window.dispatchEvent(new Event('mmenu-opened'));
	});
	
	mmenuAPI.bind('close:after', () => {
		window.dispatchEvent(new Event('mmenu-closed'));
	});
									
	$(window).on('scroll', e => {
		if (window.scrollY > 60) {
			$('.navbar').addClass('fixed-top');
			// prevent content covered by the navbar
			$('body').css('padding-top', '60px');
		} else {
			$('.navbar').removeClass('fixed-top');
			$('body').css('padding-top', '0');
		}
	});
	
	// fix background-image attachment cannot be fixed
	$('body').removeClass('mm-wrapper--position-left');
	
	addBackToTop({
		diameter: 45,
		backgroundColor: 'rgb(75, 75, 75, 1)',
		textColor: '#fff',
		zIndex: 10,
		cornerOffset: 12,
	});
});

// alpinejs
// https://github.com/alpinejs/alpine
// Don't add "defer" attribute to script tag as it would cause the bundled scripts not working.
// Always place the script tag to the bottom of the page so that alpinejs initialization can take place after DOM is ready.
const Alpine = require('alpinejs').default;
window.Alpine = Alpine;

Alpine.data('page', () => ({
	isSidebarOpened: false,
	textsize: 1,
	readOnly: true,
	autoScroll: true,
	details: false,
}));

Alpine.start();