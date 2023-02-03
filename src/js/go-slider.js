var swiper = new Swiper(".slider-home", {
  slidesPerView: 1,
  loop: true,
  autoplay: {
    delay: 6500,
    disableOnInteraction: false
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<div class="' + className + '"><span class="sep"></span> <span class="num">0' + (index + 1) + "</span></div>";
    }
  }
});
