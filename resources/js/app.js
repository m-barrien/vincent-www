// require ../../node_modules/jquery/dist/jquery.min.js
// require popper.js
// require bootstrap
// require swiper

var photo_arr = [];


$(document).ready(function () {
//initialize swiper when document ready
var mySwiper = new Swiper ('.cover-swiper .swiper-container.desk-swiper', {
  // Optional parameters
  direction: 'horizontal',
  autoplay: {
    delay: 5000,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  lazy: true,
  loop: true
});

var mySwiper = new Swiper ('.cover-swiper .swiper-container.movil-swiper', {
  // Optional parameters
  direction: 'horizontal',
  autoplay: {
    delay: 10000,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  // Disable preloading of all images
  preloadImages: false,
  // Enable lazy loading
  lazy: true,
  loop: true
});
var mySwiper = new Swiper ('.cover-swiper .swiper-container.oferta-swiper', {
  // Optional parameters
  direction: 'horizontal',
  autoplay: {
    delay: 8000,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  loop: true,
  lazy: true,
});

var galleryThumbs = new Swiper('#woocommerce .gallery-thumbs', {
  spaceBetween: 10,
  slidesPerView: 4,
  loop: true,
  freeMode: true,
  loopedSlides: 5, //looped slides should be the same
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});
var galleryTop = new Swiper('#woocommerce .gallery-top', {
  autoplay: {
    delay: 4000,
  },
  spaceBetween: 10,
  loop:true,
  loopedSlides: 5, //looped slides should be the same
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  thumbs: {
    swiper: galleryThumbs,
  },
});

//icon containers logos etc
var swiper = new Swiper('.swiper-container.icon-container', {
  slidesPerView: 5,
  spaceBetween: 10,
  autoplay: {
    delay: 1000,
  },
});

var swiper = new Swiper('.swiper-container.products-swiper', {
  slidesPerView: 5,
  spaceBetween: 50,
  autoplay: {
    delay: 5000,
  },
  loop: true,
  // init: false,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    1024: {
      slidesPerView: 5,
      spaceBetween: 40,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 10,
    }
  }
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

//DOC READY
//show_popup();
/*
$("#contactoExpander").click(function () {
  if($(this).attr("aria-expanded") =="true"){
    $(this).html('<i class="fas fa-hand-pointer"></i>&nbsp; Contactenos')
  }
  else{
    $(this).html('<i class="fas  fa-window-close"></i>&nbsp; Cerrar')
  }
});
*/
});

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