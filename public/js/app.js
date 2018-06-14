/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(3);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {


/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

// require('./bootstrap');

__webpack_require__(2);

var nav = document.querySelector('.navbar');
var navCoords = nav.getBoundingClientRect();
var loader = document.querySelector('.loading');
var footer = document.querySelector('footer');

loader.style.height = 'calc(100vh - ' + navCoords.bottom + 'px)';

window.addEventListener("load", function () {

    var loadingAnimation = document.querySelector('#is-loading');

    loadingAnimation.classList.add('opacity-0');

    setTimeout(function () {
        document.querySelector('#wrapper').classList.remove('opacity-0');
        document.querySelector('#wrapper').classList.add('opacity-1');
    }, 300);

    document.body.removeChild(loadingAnimation);
});

document.addEventListener("DOMContentLoaded", function () {
    var accordions = document.querySelectorAll('.accordion');

    accordions.forEach(function (accordion) {
        accordion.addEventListener('click', toggleAccordion);
    });

    function toggleAccordion() {
        var accordionContent = this.parentElement.nextElementSibling;

        accordionContent.classList.remove('flex');

        var accordionHeight = accordionContent.scrollHeight + 'px';

        accordionContent.classList.add('flex');

        if (accordionContent.style.maxHeight) {
            // accordion is open, we need to close it
            accordionContent.style.maxHeight = null;
            accordionContent.style.opacity = 0;
        } else {
            // accordion is closed, we need to open it
            accordionContent.style.maxHeight = accordionHeight;
            accordionContent.style.opacity = 1;
        }
    }
});

/***/ }),
/* 2 */
/***/ (function(module, exports) {

document.addEventListener("DOMContentLoaded", function () {
    var nav = document.querySelector('.navbar');
    var navDropdowns = document.querySelectorAll('.dropdown');
    var dropdownButtons = document.querySelectorAll('.dropdown-btn');
    var navCoords = nav.getBoundingClientRect();
    var responsiveNav = document.querySelector('.navbar-responsive');
    var burguerIcon = document.querySelector('#burguer-menu');

    // Getting navbar coords to position dropdown menus
    navDropdowns.forEach(function (dropdown) {
        dropdown.style.top = navCoords.bottom + 'px';
    });

    // Responsive nav menu gets positioned below navbar
    responsiveNav.style.top = navCoords.bottom + 'px';

    // Toggling dropdowns
    dropdownButtons.forEach(function (button) {
        button.addEventListener('click', toggleDropdown);
    });

    // !Toggling Responsive Navbar with burguer icon
    burguerIcon.addEventListener('click', function () {
        console.log(document.querySelector('.navbar-accordion').scrollHeight);
    });
    burguerIcon.addEventListener('click', toggleResponsiveNav);

    // Functions
    function toggleDropdown() {
        this.querySelector('.dropdown').classList.toggle('hidden');
    }

    function toggleResponsiveNav() {
        var navAccordion = document.querySelectorAll('.navbar-accordion');

        // Expanding all the accordions in the navbar to calculate the entire height of th Responsive navbar in order to proper expand it when clicking the burger icon


        var responsiveNavHeight = responsiveNav.scrollHeight + 'px';

        if (responsiveNav.style.maxHeight) {
            // Responsive nav is open, we need to close it
            responsiveNav.style.maxHeight = null;
        } else {
            // Responsive nav is closed, we need to open it
            responsiveNav.style.maxHeight = responsiveNavHeight;
        }
    }
});

/***/ }),
/* 3 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);