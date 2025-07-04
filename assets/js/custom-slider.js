/*====================
   swiper custom js
=======================*/
var featureSlider = new Swiper(".featureSlider", {
    pagination: {
        el: ".feature-pagination",
        type: "progressbar",
    },
});


var swiper = new Swiper(".testimonialSlider", {
    slidesPerView: 3,
    spaceBetween: 50,
    centeredSlides: true,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 50,
            centeredSlides: false,
        },
        1199: {
            slidesPerView: 3,
        },
    },
});



  // Initialize Team Carousel
  var teamCarousel = new Swiper(".team-carousel", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
      delay: 3500, // A slightly different delay to vary the sliders
      disableOnInteraction: false,
    },
    breakpoints: {
      // when window width is >= 576px
      576: {
        slidesPerView: 2,
      },
      // when window width is >= 992px
      992: {
        slidesPerView: 3,
      }
    }
  });


  // Initialize Blog Carousel
  var blogCarousel = new Swiper(".blog-carousel", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    breakpoints: {
      // when window width is >= 768px
      768: {
        slidesPerView: 2,
      },
      // when window width is >= 992px
      992: {
        slidesPerView: 3,
      }
    }
  });









