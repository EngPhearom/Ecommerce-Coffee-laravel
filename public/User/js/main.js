var swiper = new Swiper('.swiper', {
  slidesPerView: 4,
  direction: getDirection(),
  autoplay: {
    delay: 1500,
    disableOnInteraction: false,
  },
  on: {
    resize: function () {
      swiper.changeDirection(getDirection());
    },
  },
});

function getDirection() {
  var windowWidth = window.innerWidth;
  var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';
  return direction;
}