$(function(){
  $(window).on("scroll", function() {
    var scrolly = $(window).scrollTop();
    var bgsize = 70 + (scrolly / 20);
    if (bgsize > 70) {
      $('.infoVideo video').css('width', bgsize + '%');
    };
    var opacity = 1 - (scrolly / 500);
    if (opacity < 1) {
      $('.infoVideo video').css('opacity', opacity);
    }
    if (opacity < 1) {
      $('header h1').css('opacity', opacity);
    }
    if(opacity < 0.2){
      $('header h1').css('opacity', 0.2);
    };
  });
  $('.humberger').on('click',function(){
    $(this).toggleClass('active');
  if($(this).hasClass('active') == true){
    $('.spNavi').fadeIn();
  }else {
    $('.spNavi').fadeOut();
  }
});
  $('.spNavi li a').on('click',function(){
  $('.spNavi').fadeOut(300);
    $('.humberger').removeClass('active');
});
  $('a[href^="#"]').click(function () {
    var speed = 400;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $('body,html').animate({ scrollTop: position }, speed);
    return false;
  });
});


$(document).ready(function(){
  if ($('.micropostArea').length) {
    const sampleTextarea = document.querySelector('.micropostArea');
    sampleTextarea.addEventListener('input', () => {
      sampleTextarea.style.height = "20px";
      sampleTextarea.style.height = sampleTextarea.scrollHeight + "px";
    });
  }
});