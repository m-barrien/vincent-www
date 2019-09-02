// require ../../node_modules/jquery/dist/jquery.min.js
// require popper.js
// require bootstrap
// require swiper

var photo_arr = [];


$(document).ready(function () {
var swiper_home = new Swiper('.swiper-cover', {
      slidesPerView: 3,
      spaceBetween: 0,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        1024: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 10,
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
swiper_home.on('transitionEnd', function () {
  var bg_link = "url('" + $( '.swiper-slide-active').find( '.cover-slide' ).attr("data-bg-im") + "')";
  $('.site-cover').css("background-image",bg_link);
});

var swiper_how = new Swiper('.swiper-how-we-work', {
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + '</span>';
        },
      },      
    }
  );

$('.swiper-slide').mouseenter(
  function(){
    var bg_link = "url('" + $(this).find( '.cover-slide' ).attr("data-bg-im") + "')";
    $( this ).find( '.cover-slide > .hidden-desc' ).css("height","200px");
    $('.site-cover').css("background-image",bg_link);

  }).mouseleave(
  function (){
    $( this ).find( '.cover-slide > .hidden-desc' ).css("height","0px");
  });


$('.kit-col-container').mouseenter(
  function(){
    $( this ).find( '.white-container > .text-body' ).toggleClass("rise");
  }).mouseleave(
  function (){
    $( this ).find( '.white-container > .text-body' ).toggleClass("rise");
  });

$('.hamburguer').click(function(){
  $('.menu-mov-container').toggleClass('visible');
  $('#hamburguer-icon').toggleClass('open');
});

$('.fullvideo-cover').click(function(){
  $( '.video-container > iframe' ).attr("src", "https://player.vimeo.com/video/356704763?&amp;autoplay=1&amp;muted=1&amp;loop=1?autoplay=0&amp;background=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;api=1&amp;player_id=iframe39000&amp;api=1");
});



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

//DOC READY
});

if(photo_arr.length >0 ){
  var chunk = Math.floor( photo_arr.length / 4 );
  var bundles = chunkArray(photo_arr,chunk);
  for (var i = bundles.length - 1; i >= 0; i--) {
    for (var j = bundles[i].length - 1; j >= 0; j--) {
      var size=Math.floor(Math.random() * 3) + 1;  
      $("#collage-gallery #gallery-col-"+(i+1)).append(
        "<div class=\"gallery-grid-img s"+size+"\"  data-title=\"" +bundles[i][j]["title"]+ "\" data-link=\"" +bundles[i][j]["full"]+ "\" style=\"background-image:url("+ bundles[i][j]["thumb"] +")\" > </div>"
        );
    }
  }
}

/**
 * Returns an array with arrays of the given size.
 *
 * @param myArray {Array} Array to split
 * @param chunkSize {Integer} Size of every group
 */
function chunkArray(myArray, chunk_size){
    var results = [];
    
    while (myArray.length) {
        results.push(myArray.splice(0, chunk_size));
    }
    
    return results;
}

function flip() {
    $('#gallery-card').toggleClass('flipped');
}

function ContatoreCO2(n, t, i, r) {
    function d(n) {
        for (n = "" + n; n.length < 12; )
            n = "0" + n;
        return n
    }
    function g() {
        f = f + k;
        r = d(f);
        cifra1n = parseInt(r.charAt(11));
        cifra2n = parseInt(r.charAt(10));
        cifra3n = parseInt(r.charAt(9));
        cifra4n = parseInt(r.charAt(8));
        cifra5n = parseInt(r.charAt(7));
        cifra6n = parseInt(r.charAt(6));
        cifra7n = parseInt(r.charAt(5));
        cifra8n = parseInt(r.charAt(4));
        cifra9n = parseInt(r.charAt(3));
        cifra10n = parseInt(r.charAt(2));
        cifra11n = parseInt(r.charAt(1));
        cifra12n = parseInt(r.charAt(0));
        e != cifra1n && u(1, cifra1n);
        o != cifra2n && u(2, cifra2n);
        s != cifra3n && u(3, cifra3n);
        h != cifra4n && u(4, cifra4n);
        c != cifra5n && u(5, cifra5n);
        l != cifra6n && u(6, cifra6n);
        a != cifra7n && u(7, cifra7n);
        v != cifra8n && u(8, cifra8n);
        y != cifra9n && u(9, cifra9n);
        p != cifra10n && u(10, cifra10n);
        w != cifra11n && u(11, cifra11n);
        b != cifra12n && u(12, cifra12n);
        e = cifra1n;
        o = cifra2n;
        s = cifra3n;
        h = cifra4n;
        c = cifra5n;
        l = cifra6n;
        a = cifra7n;
        v = cifra8n;
        y = cifra9n;
        p = cifra10n;
        w = cifra11n;
        b = cifra12n;
        $(".km-container .counter").html(Math.round(f / 13 * 100).toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
        $(".tree-container .counter").html(Math.round(f / 35).toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
        $(".oil-container .counter").html(Math.round(f / 172.8).toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."))
    }
    function u(t, r) {
        $("<img src='/Content/Images/mc_" + r + ".png' />").appendTo("#" + n + " .schermo" + t + " .numero");
        $("#" + n + " .schermo" + t + " .numero").animate({
            top: "-=" + i + "px"
        }, 200, function() {
            $("#" + n + " .schermo" + t + " .numero img").length > 1 && ($("#" + n + " .schermo" + t + " .numero img").eq(0).remove(),
            $("#" + n + " .schermo" + t + " .numero").css("top", 0))
        })
    }
    var k = 1, f, e, o, s, h, c, l, a, v, y, p, w, b;
    t < minSpeed && (k = Math.round(minSpeed / t),
    t = minSpeed);
    f = r;
    r = d(f);
    e = parseInt(r.charAt(11));
    $("#" + n + " .schermo1 .numero img").attr("data-o", e);
    o = parseInt(r.charAt(10));
    $("#" + n + " .schermo2 .numero img").attr("data-o", o);
    s = parseInt(r.charAt(9));
    $("#" + n + " .schermo3 .numero img").attr("data-o", s);
    h = parseInt(r.charAt(8));
    $("#" + n + " .schermo4 .numero img").attr("data-o", h);
    c = parseInt(r.charAt(7));
    $("#" + n + " .schermo5 .numero img").attr("data-o", c);
    l = parseInt(r.charAt(6));
    $("#" + n + " .schermo6 .numero img").attr("data-o", l);
    a = parseInt(r.charAt(5));
    $("#" + n + " .schermo7 .numero img").attr("data-o", a);
    v = parseInt(r.charAt(4));
    $("#" + n + " .schermo8 .numero img").attr("data-o", v);
    y = parseInt(r.charAt(3));
    $("#" + n + " .schermo9 .numero img").attr("data-o", y);
    p = parseInt(r.charAt(2));
    $("#" + n + " .schermo10 .numero img").attr("data-o", p);
    w = parseInt(r.charAt(1));
    $("#" + n + " .schermo11 .numero img").attr("data-o", w);
    b = parseInt(r.charAt(0));
    $("#" + n + " .schermo12 .numero img").attr("data-o", b);
    $("#" + n + " .numero img").each(function() {
        $(this).attr("src", "/Content/Images/mc_" + $(this).attr("data-o") + ".png")
    });
    window.setInterval(function() {
        g()
    }, t)
}

document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages = document.querySelectorAll("img.lazy");    
  var lazyloadBGImages = document.querySelectorAll(".bg-lazy");    
  var lazyloadIframes = document.querySelectorAll("iframe.lazy");    
  var lazyloadThrottleTimeout;
  
  function lazyload () {
    if(lazyloadThrottleTimeout) {
      clearTimeout(lazyloadThrottleTimeout);
    }    
    
    lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
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
        if(lazyloadImages.length == 0 && lazyloadIframes.length == 0 && lazyloadBGImages.length == 0) { 
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

