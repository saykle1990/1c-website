$('.slick-slider').slick({
    variableWidth: true,
    centerMode: true,
    slide: '.slide',
    slidesToShow: 1,
    slidesToScroll: 1
});
$('.clients-slick').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    wariableWidth: true,
    responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 530,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 430,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

(function ($){

$.fn.hoverPlugin = function () {

    $(this).hover

    (function(){

    var hover = $(this).data('onHover');
    $(this).data('src', $(this).children().attr('src'));

        $(this).children().attr('src', hover);
    },

    function(){

        $(this).children().attr('src', $(this).data('src'));

    });

}

})(jQuery);


$('.adds a').hoverPlugin();





















