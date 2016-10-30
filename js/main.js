'use strict';

var BIGGIE = BIGGIE || {};

(function($){
    
  //               //
 //  FUNCTIONS    //
//               //
BIGGIE.documentOnReady = {
    init: function(){


    },
    
    windowscroll: function() {
        

    }

};

BIGGIE.functions = {
    
    functionName: function(){
        
  }
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
$(document).ready( BIGGIE.documentOnReady.init );

$(document).scroll( BIGGIE.documentOnReady.windowscroll );
        
        
})(jQuery);

