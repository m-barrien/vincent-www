// require ../../node_modules/jquery/dist/jquery.min.js
// require popper.js
// require bootstrap
// require swiper

var photo_arr = [];


$(document).ready(function () {
var swiper = new Swiper('.swiper-cover', {
      slidesPerView: 3,
      spaceBetween: 0,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        1024: {
          slidesPerView: 3,
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
var swiper = new Swiper('.swiper-how-we-work', {
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