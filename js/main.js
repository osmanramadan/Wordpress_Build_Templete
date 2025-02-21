jQuery(function ($) {
  $(".single-post").slick({
    infinite: true,
    autoplay: true,
    dots: true,
  });
  
  $(".multiple-posts").slick({
    infinite:true,
    autoplay: true,
    dots: true,
    speed: 600,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});
