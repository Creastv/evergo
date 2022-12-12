(window.onload = function (event) {
  var swiper = new Swiper(".exp", {
    slidesPerView: 2,
    spaceBetween: 30,
    centeredSlides: true,
    freeMode: true,
    loop: true,
    // lazy: true,
    autoplay: {
      delay: 3900,
      disableOnInteraction: false
    },
    navigation: {
      nextEl: ".sw-next",
      prevEl: ".sw-prev",
    },
    breakpoints: {
      778: {
        // centeredSlides: true,
        slidesPerView: 2
      },
      998: {
        slidesPerView: 2
      },
      1100: {
        slidesPerView: 3
      },
      1300: {
        slidesPerView: 3
      }
    }
  });
  var swiper = new Swiper(".mySwiper", {
        effect: "creative",
        // loop: true,
        autoplay: {
          delay: 3900,
          disableOnInteraction: false
        },
         pagination: {
          el: ".s-pagination",
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
          },
        },
        navigation: {
          nextEl: ".s-next",
          prevEl: ".s-prev",
        },
        creativeEffect: {
          prev: {
            opacity: 0,
            translate: [0, 0, -500]
          },
          next: {
            opacity: 0,
            translate: [0, 0, 0]
          }
        },
  });
  if (window.innerWidth > 960) {
    window.addEventListener('scroll', () => {  
      let scrollTop = document.documentElement.scrollTop;
      document.querySelector('.slider__bg').style.width = 100 + scrollTop / 100 + '%';
    });
  }



})();
