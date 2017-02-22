(function(){
     "use strict";
     var app = {

        init : function(){
             app.listener();
         },

        listener : function(){
             $('#btn').on('click', function(){
                 console.log('teste');
             })
         },
         

    };
     $(document).ready(function(){
         app.init();
     });
 })();

