$(document).ready(function () {
  // Navigaion
  $("#navi").on("click", function () {
    $.fn.toggleNav();
  });

  $.fn.toggleNav = function () {
    $("#navi").toggleClass("close-icon");
    $(".drop-down").slideToggle();
  };

  // Slides
  var slides = $(".slide");
  var slideIndex = 0;

  //First Slide
  $(slides[slideIndex]).show();

  setInterval(function () {
    // Hide the current slide
    $(slides[slideIndex]).fadeOut();

    // Increment index or reset to 0
    slideIndex = (slideIndex + 1) % slides.length;

    // Show the next slide
    $(slides[slideIndex]).fadeIn();
  }, 5000);

  $(".next").on("click", function () {
    $.fn.nextSlide();
  });

  $(".prev").on("click", function () {
    $.fn.prevSlide();
  });

  // Next
  $.fn.nextSlide = function () {
    $(slides[slideIndex]).fadeOut();

    slideIndex = (slideIndex + 1) % slides.length;

    $(slides[slideIndex]).fadeIn();
  };

  // Prev
  $.fn.prevSlide = function () {
    $(slides[slideIndex]).fadeOut();

    if (slideIndex == 0) {
      slideIndex = slides.length - 1;
    } else {
      slideIndex = (slideIndex - 1) % slides.length;
    }

    $(slides[slideIndex]).fadeIn();
  };
});
