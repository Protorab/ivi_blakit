// import Swiper from "swiper";
import Swiper from "../vendor/swiper-bundle.min";
const swiperJsSliders = () => {
  let collectionSlider = new Swiper(".collection-slider", {
    slidesPerView: "auto",
    spaceBetween: 30,
    autoplay: {
      enabled: true,
      delay: 0,
    },
    speed: 1700,
    navigation: {
      nextEl: ".collection-slider__next",
      prevEl: ".collection-slider__prev",
    },
    loop: true,
    centeredSlides: true,
    breakpoints: {
      320: {
        spaceBetween: 28,
      },
      640: {
        spaceBetween: 30,
      },
      1024: {
        spaceBetween: 30,
      },
      1280: {
        spaceBetween: 30,
      },
    },

    grabCursor: true,
    resizeObserver: true,

    a11y: {
      paginationBulletMessage: "Перейти к слайду {{index}}",
      prevSlideMessage: "Предыдущий слайд",
      nextSlideMessage: "Следующий слайд",
    },
  });

  let prizeSlider = new Swiper(".prize-slider", {
    slidesPerView: 1,
    spaceBetween: 15,
    autoplay: {
      enabled: true,
      delay: 4500,
    },
    speed: 1100,
    loop: true,
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
  });
};
export default swiperJsSliders;
