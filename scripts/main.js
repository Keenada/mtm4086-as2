$(document).ready(function(){
    $(".ham-btn").on('click',function(){
        if ($(".side-bar").data("state") == "opened"){
            $(".side-bar").animate({
                right:-300
            },1000);
            $("span").css('background', '#fff');
            $(".side-bar").data("state","closed");
        }else{
            $(".side-bar").animate({
                right:0
            },1000);
            $("span").css('background', '#00abe8');
            $(".side-bar").data("state","opened");
        }
    });
    
    $(window).scroll(function() {
        if ($(window).scrollTop() > 450) {
        $('span').css("background", '#00abe8');
        }
        else{
        $('span').css("background", '#fff');
        }
        });
});