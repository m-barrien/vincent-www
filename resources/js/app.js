// require ../../node_modules/jquery/dist/jquery.min.js
// require popper.js
// require bootstrap
// require swiper

var photo_arr = [];


//$(document).ready(function () {
//initialize swiper when document ready

//});

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