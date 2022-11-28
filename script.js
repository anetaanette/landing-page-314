const splide = new Splide('.splide', {
    type: 'slide', //slide, loop, fade
    // padding: { y: 10 }, //css values
    gap: '1rem', //1 rem default
    rewind: true,
    speed: 500, //transition in milliseconds
    fixedWidth: '10.4rem',
    width: '33rem',
    perPage: 3,
    start: 3,
    perMove: 1,
    autoplay: true,
    interval: 2000,
    pagination: false,
    pauseOnHover: true,
    wheel: true,
  });
  splide.mount();