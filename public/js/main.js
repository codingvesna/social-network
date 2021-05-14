/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
$(document).ready(function () {
  console.log("ready!"); // Create Post Characters Limit

  var maxLength = 222;
  $('#post').keyup(function () {
    var length = $(this).val().length;
    var currentLength = maxLength - length;
    $('#chars').text(currentLength);
  });
});
/******/ })()
;