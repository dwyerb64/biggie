'use strict';

var BIGGIE = BIGGIE || {};

(function($){
    
  //               //
 //  FUNCTIONS    //
//               //
BIGGIE.events = {

    init: function(){
      var mobileWidth = window.matchMedia( "(max-width: 767px)" );

      $htmlBody.addClass('js-loaded');

      if (mobileWidth.matches) {
        BIGGIE.functions.bindMobileMenuClick();
      }

      var shortScreen = window.matchMedia( "(max-height: 640px)" );
      if ( shortScreen.matches ) {
        BIGGIE.functions.footerEnterOnSmallScreen("70%");
      }

      BIGGIE.functions.footerEnter("80%");

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
    
  footerEnter: function(offset){
    $('#footer-container').waypoint({
      handler: function() {
        $htmlBody.toggleClass("footer-enter");
      },
      offset: offset
    });
  },

  footerEnterOnSmallScreen: function(offset){
    $('#footer-container').waypoint({
      handler: function() {
        $htmlBody.toggleClass("footer-enter-small-screen");
      },
      offset: offset
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


    $(".home-item").waypoint({
      handler: function(direction) {
        if(direction == "down"){
          BIGGIE.functions.homepageItemEnter(this.element, slogan);  
        }else{
          var key = this.key.split("-")[1]; 
          BIGGIE.functions.homepageItemEnter(this.group.waypoints[key-1].element, slogan);
        }
         
      },
      offset: "65%"
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
  },

  homepageItemEnter: function(elem, slogan){
    var $elem = $(elem);
    var title = $elem.attr("title");
    var portfolioUrl = $elem.data("url");

    slogan.text(title);
    

    if($elem.data('first')){
      slogan.addClass('grey-last-word');
      slogan.lettering('words');
      slogan.parent().attr("href", "#");
    } else {
      slogan.removeClass('grey-last-word');
      slogan.parent().attr("href", portfolioUrl);
    }
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


$(document).ready( BIGGIE.events.init );

$('.home').ready( BIGGIE.events.homeInit );

$('.page-template-page_work').ready( BIGGIE.events.workInit );

$('.layout-portfolio').ready( BIGGIE.events.portfolioInit );

$(document).scroll( BIGGIE.events.windowscroll );
        
        
})(jQuery);

