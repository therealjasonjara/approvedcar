$(function(){
	 
    //slider-main
    $('.slider-main').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: false,
      arrows: true,
      prevArrow: '.s-left',
      nextArrow: '.s-right',
      centerMode: true,
      centerPadding: '150px',
      infinite: true,
      speed: 1500,
      autoplaySpeed: 2500,
      responsive: [
      {
        breakpoint: 1200,
        settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '60px',
        }
      },
      {
        breakpoint: 992,
        settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '0px',
        }
      },
      {
        breakpoint: 768,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        }
      },
      {
        breakpoint: 481,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '0px',
        }
      }
    ]
    });
    
    var $validator = $("#commentForm").validate({
    rules: {
        firstfield: {
          required: true,
          minlength: 3
        },
        laststfield: {
          required: true,
          minlength: 3
        },
        urlfield: {
          required: true,
          minlength: 3,
          url: true
        }
      }
    });
    window.prettyPrint && prettyPrint()
    
    
});

//Blog-slider
$('.blog-slider').owlCarousel({
    loop:true,
    dots: false,
    autoPlay: true,
    nav:true,
    navText: ['<i class="fas fa-arrow-left"></i>','<i class="fas fa-arrow-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});