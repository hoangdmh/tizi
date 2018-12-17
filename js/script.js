// fix top header in mobile
$(window).scroll(function(){
  if ($(this).scrollTop() > 0) {
      $('.tizi-header').addClass('tizi-fixed');
      $('.toppage').fadeIn( "slow" );
  } else {
      $('.tizi-header').removeClass('tizi-fixed');
      $('.toppage').fadeOut( "slow" );
  }
});
// scroll top
var topBtn = $('.toppage');
topBtn.click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 800);
    return false;
});
/*$('.show-sp').click(function(){
 $('.tizi-dmrv').slideToggle();
});*/



$( document ).ready(function() {
  /*-------------
  TAB
  ---------------*/
  $(".tizi-tab").hide(); 
  $("ul.list-tab li:first").addClass("active").show(); 
  $(".tizi-tab:first").show(); 
 
  $("ul.list-tab li").click(function () {
    $("ul.list-tab li").removeClass("active"); 
    $(this).addClass("active"); 
    $(".tizi-tab").hide(); 
    var activeTab = $(this).find("a").attr("href"); 
    $(activeTab).fadeIn(); 
    return false;
  });
  /*-------------
  MENU SP
  ---------------*/
  $('#nav-tizi').on('click', function() {
    $(this).toggleClass('open');
    $('#wrapper').toggleClass('no-scroll');
    $(".menu_sp").slideToggle(300);
  });

  $('.menu_sp ul li').on('click', function() {
    $('.menu_sp ul li').removeClass('active');
    $(this).addClass('active');
  });

  // open button search
  $('.icon_search').on('click', function() {
    $('.search-sp').toggleClass('search--open');
  });

  // open category list item
  $('.category_items').on('click', function() {
    $('#wrapper').toggleClass('no-scroll');
    // get height item
    var hCate = $(window).height();
    var hHeader = $('.tizi-header').outerHeight()
    var hFooter = $('.tizi-footer__sp').outerHeight()
    var hCateLis = hCate - hHeader - hFooter;
    $('.category_ad').css('height', hCateLis);
     //show item category 
    $('.category_ad').slideToggle(500);
  })
});
