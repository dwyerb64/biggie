'use strict';

var BIGGIE = BIGGIE || {};

(function($){
    
  //               //
 //  FUNCTIONS    //
//               //
BIGGIE.events = {
    init: function(){
      
      BIGGIE.functions.waypointsInit();

    },
    
    windowscroll: function() {
    

    
    }

};

BIGGIE.functions = {
    
  functionName: function(){
        
  },

  waypointsInit: function(){
    $(".work-item").waypoint({
      handler: function(direction) {
        $(this.element).toggleClass("work-item-enter")
      },
      offset: "80%"
    })
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
$(document).ready( BIGGIE.events.init );

$(document).scroll( BIGGIE.events.windowscroll );
        
        
})(jQuery);

