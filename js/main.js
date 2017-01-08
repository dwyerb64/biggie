'use strict';

var BIGGIE = BIGGIE || {};

(function($){
    
  //               //
 //  FUNCTIONS    //
//               //
BIGGIE.events = {

    init: function(){
      var mq = window.matchMedia( "(max-width: 767px)" );

      $htmlBody.addClass('js-loaded');

      if (mq.matches) {
        BIGGIE.functions.bindMobileMenuClick();
      }

      BIGGIE.functions.footerEnter();

    },

    workInit: function(){
      
      BIGGIE.functions.workWaypointsInit();

    },

    homeInit: function(){
      BIGGIE.functions.homeWaypointsInit();

      BIGGIE.functions.scrollDownArrow();

    },

    portfolioInit: function(){
      BIGGIE.functions.bindPortfolioVideoClicks();
      BIGGIE.functions.initLetteringForHoverAnimations();
    },
    
    windowscroll: function() {
    
    
    }

};

BIGGIE.functions = {
    
  footerEnter: function(){
    $('#footer-container').waypoint({
      handler: function() {
        $htmlBody.toggleClass("footer-enter");
      },
      offset: "80%"
    });
  },

  scrollDownArrow: function(){
      $('.scroll-down-arrow').bind('click', function(event) {
        
        $htmlBody.stop(true).animate({
                scrollTop: $(this).offset().top
              }, 1000);
        event.preventDefault();
      });
  },

  bindMobileMenuClick: function(){

    $('#mobile-menu').click(function(){
      $('.menu').toggleClass('expanded');
      $(this).toggleClass('expanded');
      $('.mobile-menu-home').toggleClass('expanded');
    });

  },

  workWaypointsInit: function(){
    $(".work-item").waypoint({
      handler: function(direction) {
        $(this.element).toggleClass("work-item-enter");
      },
      offset: "80%"
    });
  },

  homeWaypointsInit: function(){

    var slogan = $('#slogan-container h1');


    $(".home-item").each(function(index, elem){
        var inview = new Waypoint.Inview({
          element: $(elem)[0],
          enter: function(direction) {
            var $elem = $(elem);
            var title = $elem.attr("title");
            var portfolioUrl = $elem.data("url");

            slogan.text(title);
            slogan.parent().attr("href", portfolioUrl);

            if($elem.data('first')){
              slogan.addClass('grey-last-word');
              slogan.lettering('words');
            } else {
              slogan.removeClass('grey-last-word');
            }


          }
        });
    });
  },

  bindPortfolioVideoClicks: function(){
    $(".play-button").click(function() {
      var parent = $( this ).parent();
      parent.find(".portfolio-placeholder").fadeOut();
      $( this ).fadeOut();

      parent.find("iframe")[0].src += "&autoplay=1";
      // ev.preventDefault();
    });

  },

  initLetteringForHoverAnimations: function(){
    $(".letter-by-letter-transition").lettering();
  }
};


BIGGIE.objects = {

};


  //               //
 //  DOM objects  //
//               //
var $htmlBody = $('body,html'),
    $window = $(window),
    isMobDevice = (/iphone|ipad|Android|webOS|iPod|BlackBerry|Windows Phone|ZuneWP7/gi).test(navigator.appVersion);


  //          //
 //  Events  //
//          //
$('.home').ready( BIGGIE.events.homeInit );

$('.page-template-page_work').ready( BIGGIE.events.workInit );

$('.layout-portfolio').ready( BIGGIE.events.portfolioInit );

$(document).ready( BIGGIE.events.init );

$(document).scroll( BIGGIE.events.windowscroll );
        
        
})(jQuery);

