jQuery(function(){
  // <a> scrool
  jQuery('a[href^=#]').click(function(){
    var speed = 700;
    var href= jQuery(this).attr("href");
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    jQuery("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });

  // navi
  jQuery('.menu-trigger').on('click',function(){
    if(jQuery(this).hasClass('active')){
      jQuery(this).removeClass('active');
      jQuery('main').removeClass('open');
      jQuery('nav').removeClass('open');
      jQuery('.overlay').removeClass('open');
    } else {
      jQuery(this).addClass('active');
      jQuery('main').addClass('open');
      jQuery('nav').addClass('open');
      jQuery('.overlay').addClass('open');
    }
  });
  jQuery('.overlay').on('click',function(){
    if(jQuery(this).hasClass('open')){
      jQuery(this).removeClass('open');
      jQuery('.menu-trigger').removeClass('active');
      jQuery('main').removeClass('open');
      jQuery('nav').removeClass('open');
    }
  });



// topSlider
  jQuery('#top-sliders').slick({
    accessibility: true,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 1000,
    pauseOnHover: false,
    arrows: false,
  });
  jQuery('#top-client').slick({
    accessibility: true,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 1000,
    pauseOnHover: false,
    arrows: true,
    dots: true,
    fade: true,
  });


// top-cont-scrool
  // var current;
  // jQuery.scrollify({
  //     section:".box",
  //     setHeights:false,
  //     scrollbars:false,
  //     before:function(i,box){
  //         current = i
  //         jQuery('.pagenation .active').removeClass('active');
  //         jQuery('.pagenation').find('a').eq(i).addClass('active');
  //     },
  //     afterRender:function(){
  //         var pagenation = '<ul class="pagenation">';
  //         jQuery('.box').each(function(i){
  //             pagenation += '<li><a></a></li>';
  //         });
  //         pagenation += '</ul>';
  //         jQuery('body').append(pagenation);
  //         jQuery('.pagenation a').each(function(i){
  //             jQuery(this).on('click',function(){
  //                 jQuery.scrollify.move(i);
  //             });
  //         });
  //         jQuery('.pagenation li:first-child').find('a').addClass('active');
  //     },
  // });
  // jQuery(window).on('resize',function(){
  //     if(current){
  //         var currentScrl = jQuery('.box').eq(current).offset().top;
  //         jQuery(window).scrollTop(currentScrl);
  //     }
  // });



// fadeIn
var scrollAnimationElm = document.querySelectorAll('.sa');
var scrollAnimationFunc = function() {
  for(var i = 0; i < scrollAnimationElm.length; i++) {
    var triggerMargin = 100;
    var elm = scrollAnimationElm[i];
    var showPos = 0;
    if(elm.dataset.sa_margin != null) {
      triggerMargin = parseInt(elm.dataset.sa_margin);
    }
    if(elm.dataset.sa_trigger) {
      showPos = document.querySelector(elm.dataset.sa_trigger).getBoundingClientRect().top + triggerMargin;
    } else {
      showPos = elm.getBoundingClientRect().top + triggerMargin;
    }
    if (window.innerHeight > showPos) {
      var delay = (elm.dataset.sa_delay)? elm.dataset.sa_delay : 0;
      setTimeout(function(index) {
        scrollAnimationElm[index].classList.add('show');
      }.bind(null, i), delay);
    }
  }
}
window.addEventListener('load', scrollAnimationFunc);
window.addEventListener('scroll', scrollAnimationFunc);



// top-news fadeIn
var effect_btm = 0; // 画面下からどの位置でフェードさせるか(px)
var effect_move = 50; // どのぐらい要素を動かすか(px)
var effect_time = 800; // エフェクトの時間(ms) 1秒なら1000
//親要素と子要素のcssを定義
jQuery('.scroll-fade-row').css({
    opacity: 0
});
jQuery('.scroll-fade-row').children().each(function(){
    jQuery(this).css({
        opacity: 0,
        transform: 'translateX('+ effect_move +'px)',
        transition: effect_time + 'ms'
    });
});
// スクロールまたはロードするたびに実行
jQuery(window).on('scroll load', function(){
    var scroll_top = jQuery(this).scrollTop();
    var scroll_btm = scroll_top + jQuery(this).height();
    var effect_pos = scroll_btm - effect_btm;
    //エフェクトが発動したとき、子要素をずらしてフェードさせる
    jQuery('.scroll-fade-row').each( function() {
        var this_pos = jQuery(this).offset().top;
        if ( effect_pos > this_pos ) {
            jQuery(this).css({
                opacity: 1,
                transform: 'translateY(0)'
            });
            jQuery(this).children().each(function(i){
                jQuery(this).delay(100 + i*200).queue(function(){
                    jQuery(this).css({
                        opacity: 1,
                        transform: 'translateY(0)'
                    }).dequeue();
                });
            });
        }
    });
});



});
