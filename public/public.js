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

eval("$(function () {\n  $('.delete').click(function (e) {\n    $.ajax({\n      method: \"DELETE\",\n      url: \"/users/\".concat(e.target.getAttribute('data-user-id'))\n    }).done(function (response) {\n      Swal.fire(\"Usunięto\");\n    }).fail(function (response) {\n      Swal.fire(\"ERROR\");\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvZGVsZXRlLmpzLmpzIiwibmFtZXMiOlsiJCIsImNsaWNrIiwiZSIsImFqYXgiLCJtZXRob2QiLCJ1cmwiLCJ0YXJnZXQiLCJnZXRBdHRyaWJ1dGUiLCJkb25lIiwicmVzcG9uc2UiLCJTd2FsIiwiZmlyZSIsImZhaWwiXSwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9kZWxldGUuanM/NmMxMSJdLCJzb3VyY2VzQ29udGVudCI6WyIkKGZ1bmN0aW9uKCl7XHJcbiAgJCgnLmRlbGV0ZScpLmNsaWNrKGZ1bmN0aW9uKGUpIHtcclxuICAgICQuYWpheCh7XHJcbiAgICAgIG1ldGhvZDogXCJERUxFVEVcIixcclxuICAgICAgdXJsOiBgL3VzZXJzLyR7ZS50YXJnZXQuZ2V0QXR0cmlidXRlKCdkYXRhLXVzZXItaWQnKX1gLFxyXG4gICAgfSlcclxuICAgIC5kb25lKGZ1bmN0aW9uICggcmVzcG9uc2UgKSB7XHJcbiAgICAgICAgU3dhbC5maXJlKFwiVXN1bmnEmXRvXCIpO1xyXG4gICAgfSlcclxuICAgIC5mYWlsKGZ1bmN0aW9uICggcmVzcG9uc2UgKSB7XHJcbiAgICAgICAgU3dhbC5maXJlKFwiRVJST1JcIik7XHJcbiAgICB9KTtcclxuIH0pO1xyXG59KTtcclxuIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDLFlBQVU7RUFDVkEsQ0FBQyxDQUFDLFNBQUQsQ0FBRCxDQUFhQyxLQUFiLENBQW1CLFVBQVNDLENBQVQsRUFBWTtJQUM3QkYsQ0FBQyxDQUFDRyxJQUFGLENBQU87TUFDTEMsTUFBTSxFQUFFLFFBREg7TUFFTEMsR0FBRyxtQkFBWUgsQ0FBQyxDQUFDSSxNQUFGLENBQVNDLFlBQVQsQ0FBc0IsY0FBdEIsQ0FBWjtJQUZFLENBQVAsRUFJQ0MsSUFKRCxDQUlNLFVBQVdDLFFBQVgsRUFBc0I7TUFDeEJDLElBQUksQ0FBQ0MsSUFBTCxDQUFVLFVBQVY7SUFDSCxDQU5ELEVBT0NDLElBUEQsQ0FPTSxVQUFXSCxRQUFYLEVBQXNCO01BQ3hCQyxJQUFJLENBQUNDLElBQUwsQ0FBVSxPQUFWO0lBQ0gsQ0FURDtFQVVGLENBWEE7QUFZRCxDQWJBLENBQUQifQ==\n//# sourceURL=webpack-internal:///./resources/js/delete.js\n");

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