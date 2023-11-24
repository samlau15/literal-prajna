(self["webpackChunk"] = self["webpackChunk"] || []).push([["/js/app"],{

/***/ "./source/_assets/js/app.js":
/*!**********************************!*\
  !*** ./source/_assets/js/app.js ***!
  \**********************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! ./bootstrap */ "./source/_assets/js/bootstrap.js");
__webpack_require__(/*! ./functions */ "./source/_assets/js/functions.js");
$(function () {
  var mmenu = new Mmenu('#menu', {
    theme: 'light-contrast',
    navbar: {
      title: '導覽'
    }
  }, {
    offCanvas: {
      position: 'left',
      page: {
        selector: '#page'
      }
    }
  });
  var mmenuAPI = mmenu.API;
  mmenuAPI.bind('open:after', function () {
    window.dispatchEvent(new Event('mmenu-opened'));
  });
  mmenuAPI.bind('close:after', function () {
    window.dispatchEvent(new Event('mmenu-closed'));
  });
  $(window).on('scroll', function (e) {
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
    cornerOffset: 12
  });
});

/***/ }),

/***/ "./source/_assets/js/bootstrap.js":
/*!****************************************!*\
  !*** ./source/_assets/js/bootstrap.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

// jQuery
// https://jquery.com/
window.jQuery = window.$ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");

// Must add "defer" attribute to script tag 
// so that alpinejs initialization takes place after DOM is ready
// alpinejs
// https://github.com/alpinejs/alpine
__webpack_require__(/*! alpinejs/dist/cdn.js */ "./node_modules/alpinejs/dist/cdn.js");

// Bootstrap
// https://getbootstrap.com/docs/5.3/getting-started/introduction/
window.bootstrap = __webpack_require__(/*! bootstrap/dist/js/bootstrap.bundle.js */ "./node_modules/bootstrap/dist/js/bootstrap.bundle.js");

// mmenu
// https://mmenujs.com/
__webpack_require__(/*! mmenu-js */ "./node_modules/mmenu-js/src/mmenu.js");

// Plyr
// https://github.com/sampotts/plyr
window.Plyr = __webpack_require__(/*! plyr/dist/plyr.js */ "./node_modules/plyr/dist/plyr.js");

// inview
window.inView = __webpack_require__(/*! in-view/dist/in-view.min.js */ "./node_modules/in-view/dist/in-view.min.js");

// Vanilla Back To Top
window.addBackToTop = (__webpack_require__(/*! vanilla-back-to-top/dist/vanilla-back-to-top.umd */ "./node_modules/vanilla-back-to-top/dist/vanilla-back-to-top.umd.js").addBackToTop);

/***/ }),

/***/ "./source/_assets/js/functions.js":
/*!****************************************!*\
  !*** ./source/_assets/js/functions.js ***!
  \****************************************/
/***/ (() => {

window.isScrolledIntoView = function (el) {
  var topOffset = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0;
  var btmOffset = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 0;
  var rect = el.getBoundingClientRect();
  var elemTop = rect.top;
  var elemBottom = rect.bottom;

  // Only completely visible elements return true:
  var isVisible = elemTop >= topOffset && elemBottom + btmOffset <= window.innerHeight;
  // Partially visible elements return true:
  //isVisible = elemTop < window.innerHeight && elemBottom >= 0;
  return isVisible;
};
window.debounce = function (func) {
  var delay = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 250;
  var timer = null;
  return function () {
    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }
    clearTimeout(timer);
    timer = setTimeout(function () {
      func.apply(void 0, args);
      timer = null;
    }, delay);
  };
};
window.throttle = function (func) {
  var delay = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 250;
  var prev = 0;
  return function () {
    var now = new Date().getTime();
    if (now - prev > delay) {
      prev = now;
      func.apply(void 0, arguments);
    }
  };
};

/***/ }),

/***/ "./source/_assets/css/app.scss":
/*!*************************************!*\
  !*** ./source/_assets/css/app.scss ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["css/app","/js/vendor"], () => (__webpack_exec__("./source/_assets/js/app.js"), __webpack_exec__("./source/_assets/css/app.scss")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);