/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    var fadeDuration=2000;
    var slideDuration=8000;
    var currentIndex=1;
    var nextIndex=1;
    
jQuery(document).ready(function($){
    //Start superfish
    $('ul.sf-menu, ul.sf-menu ul').superfish();
    
    //Set up animations related to testimonials
    $('#testimonials').delay(2000).fadeIn(2000, function() {
        $('#the_finger').animate({
            left: "+=2000"
        }, 500, function() {

        });
    });
    
    //Set up rotating unordered list (for testimonials, etc)
    $('ul.rotatelist li').css({opacity: 0.0});
    $('ul.rotatelist li:nth-child('+nextIndex+')').addClass('show').animate({opacity: 1.0}, fadeDuration);
    var timer = setInterval('nextSlide()',slideDuration);
});

    
function nextSlide(){
    nextIndex =currentIndex+1;
    if(nextIndex > jQuery('ul.rotatelist li').length)
    {
        nextIndex =1;
    }
    jQuery('ul.rotatelist li:nth-child('+nextIndex+')').addClass('show').animate({opacity: 1.0}, fadeDuration);
    jQuery('ul.rotatelist li:nth-child('+currentIndex+')').animate({opacity: 0.0}, fadeDuration).removeClass('show');
    currentIndex = nextIndex;
}
