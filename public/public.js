/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/delete.js":
/*!********************************!*\
  !*** ./resources/js/delete.js ***!
  \********************************/
/***/ (() => {

eval("$(function () {\n  $('.delete').click(function (e) {\n    $.ajax({\n      method: \"DELETE\",\n      url: \"/users/\".concat(e.target.getAttribute('data-user-id'))\n    }).done(function (response) {\n      Swal.fire(\"Usunięto\");\n    }).fail(function (response) {\n      Swal.fire(\"ERROR\");\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyIkIiwiY2xpY2siLCJlIiwiYWpheCIsIm1ldGhvZCIsInVybCIsInRhcmdldCIsImdldEF0dHJpYnV0ZSIsImRvbmUiLCJyZXNwb25zZSIsIlN3YWwiLCJmaXJlIiwiZmFpbCJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZGVsZXRlLmpzPzZjMTEiXSwic291cmNlc0NvbnRlbnQiOlsiJChmdW5jdGlvbigpe1xyXG4gICQoJy5kZWxldGUnKS5jbGljayhmdW5jdGlvbihlKSB7XHJcbiAgICAkLmFqYXgoe1xyXG4gICAgICBtZXRob2Q6IFwiREVMRVRFXCIsXHJcbiAgICAgIHVybDogYC91c2Vycy8ke2UudGFyZ2V0LmdldEF0dHJpYnV0ZSgnZGF0YS11c2VyLWlkJyl9YCxcclxuICAgIH0pXHJcbiAgICAuZG9uZShmdW5jdGlvbiAoIHJlc3BvbnNlICkge1xyXG4gICAgICAgIFN3YWwuZmlyZShcIlVzdW5pxJl0b1wiKTtcclxuICAgIH0pXHJcbiAgICAuZmFpbChmdW5jdGlvbiAoIHJlc3BvbnNlICkge1xyXG4gICAgICAgIFN3YWwuZmlyZShcIkVSUk9SXCIpO1xyXG4gICAgfSk7XHJcbiB9KTtcclxufSk7XHJcbiJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQyxZQUFVO0VBQ1ZBLENBQUMsQ0FBQyxTQUFELENBQUQsQ0FBYUMsS0FBYixDQUFtQixVQUFTQyxDQUFULEVBQVk7SUFDN0JGLENBQUMsQ0FBQ0csSUFBRixDQUFPO01BQ0xDLE1BQU0sRUFBRSxRQURIO01BRUxDLEdBQUcsbUJBQVlILENBQUMsQ0FBQ0ksTUFBRixDQUFTQyxZQUFULENBQXNCLGNBQXRCLENBQVo7SUFGRSxDQUFQLEVBSUNDLElBSkQsQ0FJTSxVQUFXQyxRQUFYLEVBQXNCO01BQ3hCQyxJQUFJLENBQUNDLElBQUwsQ0FBVSxVQUFWO0lBQ0gsQ0FORCxFQU9DQyxJQVBELENBT00sVUFBV0gsUUFBWCxFQUFzQjtNQUN4QkMsSUFBSSxDQUFDQyxJQUFMLENBQVUsT0FBVjtJQUNILENBVEQ7RUFVRixDQVhBO0FBWUQsQ0FiQSxDQUFEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2RlbGV0ZS5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/delete.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/delete.js"]();
/******/ 	
/******/ })()
;