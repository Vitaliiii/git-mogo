// slider intro section

$(function(){

  $('.slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    asNavFor: '.slider_dots',
  });
  $('.slider_dots').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    asNavFor: '.slider',
    focusOnSelect: true
  });
		
});


/*	Navigation - Double Tap to Go---------------------*/

// $( '#nav li:has(ul)' ).doubleTapToGo();


// slider for comments section

$(function(){

  $('.comment_slider_content').slick({
    infinite: true,
    prevArrow: '<img class="prev" src="img/prev.png">',
    nextArrow: '<img class="next" src="img/next.png">',
  });
		
});

