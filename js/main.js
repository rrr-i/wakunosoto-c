$(function(){
  $(window).on("scroll", function() {
    var scrolly = $(window).scrollTop();
    var bgsize = 60 + (scrolly / 10);
    if (bgsize > 60) {
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
    $('.fadein').each(function () {
      var elemPos = $(this).offset().top,
        scroll = $(window).scrollTop(),
        windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 200) {
        $(this).addClass('scrollin');
      }
    });
  });
  $('a').on('click',function(){
    $('h1').css('opacity',1);
    $('body,html').animate({
      scrollTop: 0
    },0);
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
  $(document).on('click','.question-title',function(){
    $(this).toggleClass('question-title-active');
    $(this).next().slideToggle(300);
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
