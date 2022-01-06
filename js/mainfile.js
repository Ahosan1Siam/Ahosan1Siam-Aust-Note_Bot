(function(){
'use strict'
$('.regis button.regis').on('click',function(){
$('.login').hide();
$('.registration').show();
});
    
$('.loginpage button.loginpage').on('click',function(){
$('.registration').hide();
$('.login').show();
});   
})(jQuery);