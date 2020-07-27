$(document).ready(function(){ 
    $(window).scroll(function(){ 
        $('.hero-overlay').css("opacity", 0.3 + $(window).scrollTop() / 1000) 
    }) 


}) 