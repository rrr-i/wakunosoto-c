
$(function(){
  $(window).on("scroll", function () {
    var scrolly = $(window).scrollTop();
    var bgsize = 70 + (scrolly / 10);
    if (bgsize > 70) {
      $('.infoVideo video').css('width', bgsize + '%');
    }
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
})
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