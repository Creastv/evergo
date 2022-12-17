var swiper = new Swiper(".testimonial", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false
  },
  navigation: {
    nextEl: ".sw-button-next",
    prevEl: ".sw-button-prev"
  },
  navigation: {
    nextEl: ".sw-button-next",
    prevEl: ".sw-button-prev"
  },
  pagination: {
    el: ".sw-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + "</span>";
    }
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 40
    }
  }
});
