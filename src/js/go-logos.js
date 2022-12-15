var swiper = new Swiper(".logos", {
  slidesPerView: 3,
  //   spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false
  },
  breakpoints: {
    640: {
      slidesPerView: 4,
      spaceBetween: 20
    },
    768: {
      slidesPerView: 5,
      spaceBetween: 40
    },
    1000: {
      slidesPerView: 6,
      spaceBetween: 40
    }
  }
});
