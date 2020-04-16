// require ../../node_modules/jquery/dist/jquery.min.js
// require popper.js
// require ../../node_modules/lightgallery/dist/js/lightgallery-all.min.js
// require bootstrap
// require swiper

var photo_arr = [];
var gallery_open = null;

$(document).ready(function () {

var swiper = new Swiper('.ofertas-empresa-swiper', {
  effect: 'flip',
  grabCursor: true,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  on:{
    click: function(event){
      this.slideNext();
    }
  }  
});

var swiper_home = new Swiper('.swiper-cover', {
      slidesPerView: 3,
      spaceBetween: 0,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },      
      breakpoints: {
        1499: {
          slidesPerView: 3,
          spaceBetween: 0,
        },
        1099: {
          slidesPerView: 3,
          spaceBetween: 0,
        },
        899: {
          slidesPerView: 2,
          spaceBetween: 0,
        },
        575: {
          slidesPerView: 1,
          spaceBetween: 0,
        }
      }
    });
swiper_home.on('transitionEnd', function () {
  var bg_link = "url('" + $( '.swiper-slide-active').find( '.cover-slide' ).attr("data-bg-im") + "')";
  $('.site-cover').css("background-image",bg_link);
});

var swiper_how = new Swiper('.swiper-how-we-work', {
      loop: true,
      lazy: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        //renderBullet: function (index, className) {
        //  return '<span class="' + className + '">' + (index + 1) + '</span>';
        //},
      },
      on:{
        click: function(event){
          if(event.target.id == "magic_start_gallery"){
            $("#lightgallery_hogar a:first-child > img").trigger("click");
          }
        }
      }
    }
  );
var swiper = new Swiper('.mapa-swiper', {
  spaceBetween: 30,
  lazy: true,
  hashNavigation: {
    watchState: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }

});
$('.swiper-slide').mouseenter(
  function(){
    if($(this).find( '.cover-slide' ).attr("data-bg-im")){
      var bg_link = "url('" + $(this).find( '.cover-slide' ).attr("data-bg-im") + "')";
      if (window.matchMedia("(min-width: 1500px)").matches) {
        $( this ).find( '.cover-slide > .hidden-desc' ).css("height","200px");

      }
      else{
        $( this ).find( '.cover-slide > .hidden-desc' ).css("height","12vw");

      }
      $('.site-cover').css("background-image",bg_link);
    }

  }).mouseleave(
  function (){
    $( this ).find( '.cover-slide > .hidden-desc' ).css("height","0px");
  });


$('.kit-col-container').mouseenter(
  function(){
    $( this ).find( 'img' ).toggleClass("hover");
    $( this ).find( '.gray-container > .text-body' ).toggleClass("rise");
  }).mouseleave(
  function (){
    $( this ).find( 'img' ).toggleClass("hover");
    $( this ).find( '.gray-container > .text-body' ).toggleClass("rise");
  });

$('.hamburguer').click(function(){
  $('.menu-mov-container').toggleClass('visible');
  $('#hamburguer-icon').toggleClass('open');
});

$('.fixed-button-header').click(function(){
  $('.fixed-button-body').toggleClass('open');
  $( this ).toggleClass('open');
});


$('.oferta-card-scene').mouseenter(function(){
    $( this ).children().addClass('is-flipped');
});
$('.oferta-card-scene').mouseleave(function(){
    $(this).children().removeClass('is-flipped');
});
//$('.fullvideo-cover').click(function(){
//  $( '.video-container > iframe' ).attr("src", "https://player.vimeo.com/video/356704763?&amp;autoplay=1&amp;muted=1&amp;loop=1?autoplay=0&amp;background=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;api=1&amp;player_id=iframe39000&amp;api=1");
//});



var swiper_kits = new Swiper('.kits-swiper-container', {
      slidesPerView: 3,
      spaceBetween: 0,
      freeMode: true,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        1024: {
          slidesPerView: 3,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 0,
        },
        640: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        320: {
          slidesPerView: 1,
          spaceBetween: 10,
        }
      }
    });

var swiper_videos = new Swiper('.swiper-videos', {
      spaceBetween: 0,
      loop: true,
      lazy: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },      
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });

var swiper_videos = new Swiper('.swiper-ofertas', {
      spaceBetween: 0,
      loop: false,
      lazy: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },      
      // init: false,
    });


var swiper = new Swiper('.swiper-container.products-swiper', {
  slidesPerView: 5,
  spaceBetween: 50,
  autoplay: {
    delay: 3500,
  },
  loop: true,
  lazy: true,      
  navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
  }, 
  breakpoints: {
    1500: {
      slidesPerView: 6,
      spaceBetween: 40,
    },
    1100: {
      slidesPerView: 6,
      spaceBetween: 30,
    },
    900: {
      slidesPerView: 4 ,
      spaceBetween: 20,
    },
    576: {
      slidesPerView: 2,
      spaceBetween: 10,
    }
  }
});

var swiper = new Swiper('.swiper-container.footer-ofertas-swiper', {
  spaceBetween: 30,
  hashNavigation: {
    watchState: true,
  },
});

$(".lightgallery").lightGallery({
  download: false,
}); 
$(".lightgallery").on('onBeforeOpen.lg',function(event){
    window.location.hash = 'galeria' + Math.floor(Math.random() * 1000).toString();
});

$("#open-gallery-ongrid").on("click", function() {
    $("#gallery_ongrid a:first-child > img").trigger("click");
});
$("#open-gallery-offgrid").on("click", function() {
    $("#gallery_offgrid a:first-child > img").trigger("click");
});
$("#open-gallery-empresa").on("click", function() {
    $("#gallery_empresa a:first-child > img").trigger("click");
});
/*

$('ul.menu li').mouseenter(
  function(){
    //$('.floating-menu').toggleClass('visible');
    $('.floating-menu').fadeOut(50);
    var menu_code = $( this ).find( 'ul.sub-menu' ).html();
    if(menu_code){
      $('.floating-menu ul.primary').html(menu_code);
      $('.floating-menu ul.primary li.casa-ongrid a').prepend('<div class="bg-image casa-ongrid"></div>');
      $('.floating-menu ul.primary li.casa-offgrid a').prepend('<div class="bg-image casa-offgrid"></div>');
      $('.floating-menu ul.primary li.empresa-ongrid a').prepend('<div class="bg-image empresa-ongrid"></div>');
      $('.floating-menu ul.primary > li.menu-secondary').remove();

      $('.floating-menu ul.side').html(menu_code);
      $('.floating-menu ul.side').prepend("<h5>Información relacionada</h5>");
      $('.floating-menu ul.side > li.menu-image').remove();

      $('.floating-menu').fadeIn();
    }
  }
);
$('.floating-menu').mouseleave(
  function(){
    $('.floating-menu').fadeOut();
  }
);
*/
var vicvar = setInterval(moveVictronInverters, 3000);

setAppliances();



//DOC READY
});



function moveVictronInverters() {
  $(".inverter-gallery").children().toggleClass("hide");
} 


function flip() {
    $('#gallery-card').toggleClass('flipped');
}


document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages = document.querySelectorAll("img.lazy");    
  var lazyloadBGImages = document.querySelectorAll(".bg-lazy");    
  var lazyloadIframes = document.querySelectorAll("iframe.lazy");    
  var lazyloadSVGMaps = document.querySelectorAll(".lazy-map");    
  var lazyloadThrottleTimeout;
  
  function lazyload () {
    if(lazyloadThrottleTimeout) {
      clearTimeout(lazyloadThrottleTimeout);
    }    
    
    lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop) && img.dataset.src!="") {
              img.src = img.dataset.src;
              img.dataset.src="";
              img.classList.remove('lazy');
            }
        });
        lazyloadIframes.forEach(function(iframe_div) {
            if(iframe_div.offsetTop < (window.innerHeight + scrollTop) && !iframe_div.src) {
              iframe_div.src = iframe_div.dataset.src;
              iframe_div.classList.remove('lazy');
            }
        });
        lazyloadBGImages.forEach(function(bg_div) {
            if(bg_div.offsetTop < (window.innerHeight + scrollTop) && !bg_div.src) {
              bg_div.style.backgroundImage = "url('" + bg_div.dataset.src + "')";
              bg_div.classList.remove('bg-lazy');
            }
        });
        lazyloadSVGMaps.forEach(function(svg_div) {
            if(svg_div.offsetTop < (window.innerHeight + scrollTop)) {
              if ( svg_div.dataset.rendered == "false" &&  window.matchMedia("(min-width: 900px)").matches) {
                xhr = new XMLHttpRequest();
                xhr.open("GET","/mapa-svg",true);
                // Following line is just to be on the safe side;
                // not needed if your server delivers SVG with correct MIME type
                xhr.overrideMimeType("image/svg+xml");

                xhr.onload = function () {
                  if (xhr.readyState === xhr.DONE && xhr.status === 200) {
                  document.getElementById("svgContainer").appendChild(xhr.responseXML.documentElement);
                  }
                };
                xhr.send("");

              }
              svg_div.dataset.rendered = "true";
              svg_div.classList.remove('lazy-map');
            }
        });
        if(lazyloadImages.length == 0 && lazyloadIframes.length == 0 && lazyloadBGImages.length == 0 && lazyloadSVGMaps.length == 0) { 
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
    }, 20);
  }
  
  document.addEventListener("scroll", lazyload);
  window.addEventListener("resize", lazyload);
  window.addEventListener("orientationChange", lazyload);
});
