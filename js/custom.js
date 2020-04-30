jQuery(document).ready(function () {
  "use strict";

  /* ------- Preloader ------ */
  // jQuery(document).ready(function () {
  //   jQuery(".status").delay(10000).fadeOut();
  //   jQuery(".preloader").delay(10000).fadeOut("slow");
  // });

  /* -------- Appears Menu ------ */
  $(window).on("ready , scroll", function () {
    if ($(window).scrollTop() > 30) {
      $(".main-menu").addClass("minified");
    } else {
      $(".main-menu").removeClass("minified");
    }
  });

  /* ---------- Hide Menu-------- */
  jQuery(".nav a").on("click", function () {
    jQuery("#nav-menu").removeClass("in").addClass("collapse");
  });

  /* --------- One Page Navigation -------- */
  $("#collapsingNavbar").onePageNav({
    currentClass: "active",
    scrollSpeed: 500,
    easing: "linear",
  });

  /* ---------- Wow Js ---------- */
  var wow = new WOW({
    boxClass: "wow", // animated element css class (default is wow)
    animateClass: "animated", // animation css class (default is animated)
    offset: 250, // distance to the element when triggering the animation (default is 0)
    mobile: true, // trigger animations on mobile devices (default is true)
    live: true, // act on asynchronously loaded content (default is true)
    callback: function (box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
  });
  wow.init();

  /* --------- Scroll Up --------- */
  $.scrollUp({
    scrollName: "scrollUp", // Element ID
    scrollDistance: 300, // Distance from top/bottom before showing element (px)
    scrollFrom: "top", // 'top' or 'bottom'
    scrollSpeed: 5000, // Speed back to top (ms)
    easingType: "linear", // Scroll to top easing (see http://easings.net/)
    animation: "fade", // Fade, slide, none
    animationInSpeed: 200, // Animation in speed (ms)
    animationOutSpeed: 200, // Animation out speed (ms)
    scrollText: "Scroll to top", // Text for element, can contain HTML
    scrollTitle: false, // Set a custom <a> title if required. Defaults to scrollText
    scrollImg: true, // Set true to use image
    activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    zIndex: 99998, // Z-Index for the overlay
  });
  /* ------------ Stellar ----------- */
  $(window).stellar({
    responsive: true,
    positionProperty: "position",
  });

  /* ------------ Home Slider ------------- */
  $("#slider").sliderPro({
    width: "100%",
    height: 768,
    fade: true,
    waitForLayers: true,
    buttons: true,
    autoplay: true,
    autoScaleLayers: false,
    slideAnimationDuration: 1500,
    breakpoints: {
      600: {
        height: 480,
      },
    },
  });
});
