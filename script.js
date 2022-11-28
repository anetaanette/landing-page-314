const splide = new Splide('.splide', {
    type: 'slide',
    gap: '5%',
    rewind: true,
    speed: 500,
    //fixedWidth: '10.34rem',
    width: '100vw',
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