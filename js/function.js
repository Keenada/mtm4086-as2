$(document).ready(function () {

    $(".title-plate").delay(1000).animate({
        opacity: 1
    }, 1000);

    $(".title-plate h1").delay(1000).animate({
        borderSpacing: -5
    }, {
        step: function (now, fx) {
            $(this).css('-webkit-transform', 'rotate(' + now + 'deg)');
            $(this).css('-moz-transform', 'rotate(' + now + 'deg)');
            $(this).css('transform', 'rotate(' + now + 'deg)');
        },
        duration: 500
    }, 'linear');

    $(".scroll-home-header").on('click', function () {
        $('html, body').animate({
            scrollTop: $(".home-content").offset().top
        }, 500);
    });

    $("input").focus(function () {
        $(this).parent().children("label").css("top", "-18px");
    });

    $("input").blur(function () {
        if (!$(this).val()) {
            $(this).parent().children("label").css("top", "7px");
        }
    });

});


/* * * * * * * *

 https://css-tricks.com/snippets/jquery/konomi-code/

 * * * * * * * */

var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65,13";

$(document).keydown(function (e) {

    kkeys.push(e.keyCode);

    if (kkeys.toString().indexOf(konami) >= 0) {

        $(document).unbind('keydown', arguments.callee);

        $("input").each(function () {
            $(this).val("test");
            $(this).parent().children("label").css("top", "-18px");
        })

    }

});