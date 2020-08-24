$(document).ready(function(){ 
    $(window).scroll(function(){ 
        $('.hero-overlay').css("opacity", 0.3 + $(window).scrollTop() / 1000) 
    });
    $(".nav-mobile-toggle").on("click",function(e){
        if ($(".nav-mobile").css("display") == "none"){
            $(".nav-mobile").css("display","flex");
        }
        else {
            $(".nav-mobile").css("display","none");
        }
    });
});