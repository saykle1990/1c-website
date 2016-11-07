$(document).ready(function(){

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


//ajax loader

(function($){

    $.fn.loader = function(div){

        var $this = $(this);

        $(this).first().parent().addClass('selected');

            this.on('click', function(e){

                $this.each(function(){

                    $this.parent().removeClass('selected');

                });

            $(this).parent().addClass('selected');

            $(div).html();

            var filename = $(this).attr("href");

            if(filename == "#"){

                $(div).html('<p class="title" style="color:red">не прописана ссылка</p>');

                return false;
            }

            e.preventDefault();

            console.log(filename);

            $.ajax({

               url: filename,

               success: function(result){

                   $(div).html(result);

                  }});
            });
    };

})(jQuery);

    $('.category-list li a').loader('.main-content');

});

























