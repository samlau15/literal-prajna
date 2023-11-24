// jQuery
// https://jquery.com/
window.jQuery = window.$ = require('jquery');

// Must add "defer" attribute to script tag 
// so that alpinejs initialization takes place after DOM is ready
// alpinejs
// https://github.com/alpinejs/alpine
require('alpinejs/dist/cdn.js');

// Bootstrap
// https://getbootstrap.com/docs/5.3/getting-started/introduction/
window.bootstrap = require('bootstrap/dist/js/bootstrap.bundle.js');

// mmenu
// https://mmenujs.com/
require('mmenu-js');

// Plyr
// https://github.com/sampotts/plyr
window.Plyr = require('plyr/dist/plyr.js');

// inview
window.inView = require('in-view/dist/in-view.min.js');

// Vanilla Back To Top
window.addBackToTop = require('vanilla-back-to-top/dist/vanilla-back-to-top.umd').addBackToTop;
