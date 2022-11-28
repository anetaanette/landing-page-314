const splide = new Splide('.splide', {
    type: 'slide', //slide, loop, fade
    // padding: { y: 10 }, //css values
    gap: '65px', //1 rem default
    rewind: true,
    speed: 500, //transition in milliseconds
    fixedWidth: '10vw',
    width: '36rem',
    perPage: 3,
    start: 1,
    perMove: 1,
    autoplay: true,
    interval: 3000,
    pagination: false,
    pauseOnHover: true,
    wheel: true,
  });
  splide.mount();