

  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() >= 158) {

        $('div.nav').addClass('nav_active');
      }
      else {
        $('div.nav').removeClass('nav_active');
      }
    });
  });



  // <!-- menu mobil  -->


  let $btn = document.getElementById('show'),
      $nav = document.getElementsByClassName('mobil-nav_menu'),
      check = document.getElementById('burger3'),
      elem = document.getElementById('close'),
      over = document.getElementsByClassName('overlay');

  $btn.addEventListener('click', function () {

  
    if (check.checked) {
      $($nav).addClass("active");
      $(over).addClass("active");

    } else {
      $(over).removeClass("active");
      $($nav).removeClass("active");
    }
  });
  elem.addEventListener('click', function () {
    $($nav).removeClass("active");
    $(over).removeClass("active");
    check.checked = false;
  });
  over[0].addEventListener('click', function () {
    $($nav).removeClass("active");
    $(over).removeClass("active");
    check.checked = false;
  });





$(document).ready(function () {


    $('.slide').slick({
      // arrows: true,
      infinite: true,
      dots: true,
      variableWidth: true,
      prevArrow: '.slide-arrow_left',
      nextArrow: '.slide-arrow_right',
      appendDots: '.dots',
      autoplaySpeed: 3000,
      speed: 1500,
      responsive: [
        {
          breakpoint: 768,
          settings: {

            arrows: false,
            dots: false,
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 1500,
          }
        },
      ]
    });
 


  $('.workers-slick').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    prevArrow: '.workers-slick_left',
    nextArrow: '.workers-slick_right',
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
        }
      },
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 578,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true
        }
      },
    ]
  });


  // Табы карт
  

  $(document).on("touchstart", ".tables th", function () {
    $(this).addClass("active");
  }).on("touchend", ".tables th", function () {
    $(this).removeClass("active");
  });


});





  


   