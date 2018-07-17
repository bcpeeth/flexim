webpackJsonp([0],[
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\n__webpack_require__(1);\n\n__webpack_require__(3);\n\n__webpack_require__(4);\n\n//import 'owl.carousel/dist/assets/owl.carousel.css';\n$(document).ready(function () {\n\n  var DefaultFieldsToHide = [$(\".field-4\"), $(\".field-6\"), $(\".field-7\"), $(\".field-8\"), $(\".field-11\")];\n  $.each(DefaultFieldsToHide, function () {\n    $(this).hide();\n  });\n\n  $('.form-stacked select').on('change', function () {\n    var FieldsToHide = {\n      \"Compliment\": [$(\".field-4\"), $(\".field-6\"), $(\".field-7\"), $(\".field-8\"), $(\".field-11\")],\n      \"Productinformatie\": [],\n      \"Klacht product\": []\n    };\n\n    $('.field').show();\n    //console.log(this.value);\n    var ArrayToHide = FieldsToHide[this.value];\n\n    $.each(ArrayToHide, function () {\n      $(this).hide();\n    });\n  });\n\n  $('.faq__question').on('click', function () {\n    $(this).toggleClass('active');\n    $(this).next('.faq__answer').slideToggle();\n  });\n\n  $('form.selector').submit(function (e) {\n    e.preventDefault();\n    var selectValue = $(this).find('select').val();\n    window.location.replace(selectValue);\n  });\n\n  $('.owl-carousel').owlCarousel({\n    items: 1,\n    loop: true,\n    thumbs: true,\n    thumbsPrerendered: true\n  });\n\n  var menuOpen = false;\n  var menuToggle = document.getElementById('menu__toggle');\n\n  menuToggle.addEventListener('click', function () {\n    menuOpen ? closeMenu() : openMenu();\n  });\n\n  $('.menu__mobile li a').on('click', function (event) {\n    closeMenu();\n    return true;\n  });\n\n  function openMenu() {\n    document.getElementById('menu__toggle').innerHTML = '<span class=\"menu__mobile__close\"></span><i class=\"fa fa-lg fa-times\" aria-hidden=\"true\"></i>';\n    $('#menu__mobile').stop().fadeIn(150);\n\n    menuOpen = true;\n  }\n\n  function closeMenu() {\n    $('#menu__mobile').stop().fadeOut(150);\n    document.getElementById('menu__toggle').innerHTML = '<i class=\"fa fa-lg fa-bars\" aria-hidden=\"true\"></i>';\n\n    menuOpen = false;\n  }\n});\n\n//////////////////\n// WEBPACK FOOTER\n// ./packages/veganific/themes/veganific/assets/js/app.js\n// module id = 0\n// module chunks = 0\n\n//# sourceURL=webpack:///./packages/veganific/themes/veganific/assets/js/app.js?");

/***/ }),
/* 1 */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin\n\n//////////////////\n// WEBPACK FOOTER\n// ./packages/veganific/themes/veganific/assets/scss/style.scss\n// module id = 1\n// module chunks = 0\n\n//# sourceURL=webpack:///./packages/veganific/themes/veganific/assets/scss/style.scss?");

/***/ })
],[0]);