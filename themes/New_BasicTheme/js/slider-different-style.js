var swiper = new Swiper(".different", {
    navigation: {
      nextEl: ".left",
      prevEl: ".right",
    },
    slidesPerView: 4,
    loop: true,
    breakpoints: {
        1024: {
          slidesPerView: 4,
        },
          768: {
              slidesPerView: 2,
              // spaceBetween: 30
          },
          420: {
              slidesPerView: 1,
              // spaceBetween: 10
          }
      }
  });