'use strict';

var BIGGIE = BIGGIE || {};

(function($){
    
  //               //
 //  FUNCTIONS    //
//               //
BIGGIE.events = {

    init: function(){
      var mq = window.matchMedia( "(max-width: 767px)" );

      if (mq.matches) {
        BIGGIE.functions.bindMobileMenuClick();
      }

    },

    workInit: function(){
      
      BIGGIE.functions.workWaypointsInit();

    },

    homeInit: function(){
      BIGGIE.functions.homeWaypointsInit();

    },

    portfolioInit: function(){
      BIGGIE.functions.bindPortfolioVideoClicks();
      BIGGIE.functions.initLetteringForHoverAnimations();
    },
    
    windowscroll: function() {
    
    
    }

};

BIGGIE.functions = {
    
  functionName: function(){
        
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
    })
  },

  homeWaypointsInit: function(){

    var slogan = $('#slogan-container h1');


    $(".home-item").waypoint({
      handler: function(direction) {
        var title = $(this.element).attr("title");
        slogan.text(title);
      },
      offset: -1
    })
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

}


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

