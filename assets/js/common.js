$(document).ready(function () {

  $('.buy__product').on('click', function(){
    $.ajax({
      type: 'POST',
      url: $nm_js.ajaxurl,
      dataType: "html", // add data type
      data: { 
        action : 'addProductAjax',
      },
      success: function( response ) {
        console.log('add');
        $('.header__cart-price').text(response)
        window.location.href = 'http://toy/cart/';
      }
    });
  })

  // $.ajax({
  //   type: 'GET',
  //   url: "/site-reviews/v1/reviews",
  //   dataType: "json", // add data type
   
  //   success: function( response ) {
  //     console.log(response);
     
  //   }
  // });

  // +/-
  $(".minus").click(function () {
    var $input = $(this).parent().find("input");
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
  });
  $(".plus").click(function () {
    var $input = $(this).parent().find("input");
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
  });

  // header scroll

  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $(".header__content").addClass("scrolled-header");
    } else {
      $(".header__content").removeClass("scrolled-header");
    }
  });

  // show menu
  $(".burgermenu-icon").click(function () {
    $(".menurow").addClass("show");
  });

  $(".closemenu").click(function () {
    $(".menurow").removeClass("show");
  });

  // formstyler
  // if ($('body *').is('select')) {
  //     $(function () {
  //         $('select').styler();
  //     });
  // }

  // tooltips
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });

  // radio - delivery
  $(".dilivmethod__main input").change(function () {
    $(".dilivmethod__submain").removeClass("show");
    $(this).parent().next().addClass("show");
  });

  //  parallax
  if ($("body *").is("#scene")) {
    var scene = document.getElementById("scene");
    var parallaxInstance = new Parallax(scene);
  }
  if ($("body *").is("#scene_reviews")) {
    var scene = document.getElementById("scene_reviews");
    var parallaxInstance = new Parallax(scene);
  }
  if ($("body *").is("#scene_details")) {
    var scene = document.getElementById("scene_details");
    var parallaxInstance = new Parallax(scene);
  }
  if ($("body *").is("#scene_intro")) {
    var scene = document.getElementById("scene_intro");
    var parallaxInstance = new Parallax(scene);
  }

  if ($("body *").is("#scene_footer")) {
    var scene_footer = document.getElementById("scene_footer");
    var parallaxInstance = new Parallax(scene_footer);
  }

  //   to top

  $(function () {
    $(".scrol-up").click(function () {
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        1000
      );
      return false;
    });
  });

  // $('.scrol-up').on("click", function () {
  //     window.scrollTo({ top: 0, left: 0, behavior: 'smooth' });
  // })

  

  // reviews Slider

  function reviewsSlider() {
    var $reviewsSlider = $(".glsr-reviews");
    // slideControls   = $('.slider-controls');

    if ($reviewsSlider.length) {
      $reviewsSlider.slick({
        infinite: false,
        autoplaySpeed: 5000,
        // autoplay: true,
        slidesToShow: 2,
        // adaptiveHeight: true,
        slidesToScroll: 2,
        swipeToSlide: true,
        dots: false,
        nextArrow: $(".reviews__slider-next"),
        prevArrow: $(".reviews__slider-prev"),
        responsive: [
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
            },
          },
          {
            breakpoint: 370,
            settings: {
              slidesToShow: 1,
            },
          },
        ],
      });
    }
  }
  reviewsSlider();
  // end reviews Slider

  $(".intro__scroll").on("click", function (event) {
    event.preventDefault();

    var id = $(this).attr("href"),
      top = $(id).offset().top - 130;

    $("body,html").animate({ scrollTop: top }, 1000);
  });
  if (document.querySelector(".marquee")) {
    $(".marquee").marquee({
      duration: 30000,
      startVisible: true,
      duplicated: true,
    });
  }
  // scroll to section
  if (document.querySelector(".scroll-section")) {
    $(".scroll-section").on("click", function (event) {
      event.preventDefault();
      $(".scroll-section").removeClass("active");
      $(this).addClass("active");
      var id = $(this).attr("href"),
        top = $(id).offset().top - 200;
      $("body,html").animate({ scrollTop: top }, 1000);
    });
  }

  if (document.querySelector(".product-slider-for")) {
    // product-slider
    $(".product-slider-for").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: ".product-slider-nav",
    });
    $(".product-slider-nav").slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      asNavFor: ".product-slider-for",
      dots: false,
      arrows: false,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 4,
          },
        },
        {
          breakpoint: 420,
          settings: {
            slidesToShow: 3,
          },
        },
      ],
    });
  }
  // end product-slider

  // start video function
  if (document.querySelector(".video-home__for-video")) {
    let videoFor = document.querySelectorAll(".video-home__for-video");
    let videoForWrapper = document.querySelectorAll(".video-home__for-item");
    let iconPlayVideoFor = document.querySelectorAll(
      ".video-home__for-icon-play"
    );
    for (let i = 0; i < videoForWrapper.length; i++) {
      iconPlayVideoFor[i].addEventListener("click", () => {
        videoFor[i].play();
        videoFor[i].setAttribute("controls", "controls");
        videoFor[i].parentElement
          .querySelector(".video-home__for-icon-play")
          .classList.add("hidden");
      });
    }
  }
  // end video function

  // start video slider
  if (document.querySelector(".video-home__slider-for")) {
    $(".video-home__slider-for")
      .slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        arrows: false,
        asNavFor: ".video-home__slider-nav",
      })
      .on("beforeChange", () => {
        for (let i = 0; i < itemFor.length; i++) {
          if (itemFor[i].classList.contains("slick-active")) {
            itemFor[i].querySelector(".video-home__for-video").pause();
          }
        }
      });
    let itemFor = document.querySelectorAll(
      ".video-home__slider-for .slick-slide"
    );
    $(".video-home__slider-nav").slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: ".video-home__slider-for",
      vertical: true,
      arrows: false,
      dots: false,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 1091,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 901,
          settings: {
            slidesToShow: 3,
            vertical: false,
            centerMode: true,
          },
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            vertical: false,
            centerMode: true,
          },
        },
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
            vertical: false,
            centerMode: true,
          },
        },
      ],
    });
  }
  // end video slider
});

//my js

// start body bg for cart, checkout and thank-you page
if (
  document.querySelector(".woocommerce-order-received") ||
  document.querySelector(".woocommerce-checkout") ||
  document.querySelector(".woocommerce-cart")
) {
  document.querySelector("body").classList.add("greybg");
}
// end body bg for cart, checkout and thank-you page

// start show model in thank-you page
$(window).on("load", function () {
  $("#exampleModal").modal("show");
});
// end show model in thank-you page

// start get price in single product
if (document.querySelector(".product .woocommerce-variation")) {
  let variationPrice = document.querySelector(
    ".product .woocommerce-variation"
  );

  let mainPrice = document.querySelector(
    ".product__price .main-price-woocommerce-my"
  );
  variationPrice.addEventListener("DOMSubtreeModified", () => {
    mainPrice.textContent = variationPrice.textContent.trim().slice(1);
  });
}
// end get price in single product


function setCookie(name, value, minutes) {
  var expires = "";

  if (minutes) {
  var date = new Date();
  date.setTime(date.getTime() + minutes * 1000);
  expires = "; expires=" + date.toUTCString();
  }

  document.cookie = name + "=" + (value || "") + expires + "; path=/";
} // Get cookie


function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
  var c = ca[i];
  while (c.charAt(0) == ' ') {
      c = c.substring(1, c.length);
  }
  if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }

  return null;
} 

var shCookie = readCookie('toyCookie')

if(!shCookie) {

  $('.cookies__ok').on('click', function(e){
      e.preventDefault();
      setCookie('toyCookie', true, 15650000)
      $('.cookie').fadeOut();
  })


  $(".cookie__close").click(function () {
    $(".cookie").fadeOut();
  });
  $(".cookie").fadeIn();
  console.log(0);

} else {
  $('.cookie').hide()
  console.log(1);
}

// cookie close


if (document.querySelector(".vawe")) {
  let xs = []
  for (var i = 0; i <= 500; i++) {
    xs.push(i)
  }

  let t = 0

  function animate() {
    
    let points = xs.map(x => {
      
      let y = 100 + 10 * Math.sin((x + t) / 15)
      
      return [x, y]
    })
    
    let path = "M" + points.map(p => {
      return p[0] + "," + p[1]
    }).join(" L")
    
    document.querySelector(".vawe path").setAttribute("d", path)
    
    t += 1.2
    
    requestAnimationFrame(animate)
  }

  animate()
}