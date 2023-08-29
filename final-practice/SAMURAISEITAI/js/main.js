$(function(){

  // スムーススクロール
$('a[href^="#"]').click(function () {
  const href = $(this).attr('href');
  // リンク先が'#'または空欄のときはリンク先にhtmlを代入（ページのトップに移動）
  const target = $(href == '#' || href == '' ? 'html' : href);
  const position = $(target).offset().top;
  $('body,html').animate({ scrollTop: position - 100 }, 400, 'swing');
});

  $('.mainvisual__carousel__wrap').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    arrows: false,
    dots: true,
    dotsClass: "slide-dots",
  });


  $('.voice__wrap__headslide > ul').slick({
    autoplay: true,
    fade: true,
    arrows: false,
  });

  $('.header__wrap__sp__menu').on('click',function(){
    $('.header__wrap__sp__nav').slideToggle();
    $('.header__wrap__sp').toggleClass('clicked');
    $('.header__wrap__sp__menu').toggleClass('clicked');
    $('.modal').toggleClass('clicked');
  });

});