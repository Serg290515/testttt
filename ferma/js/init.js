$(document).ready(function () {

    $('a[href^="#"]').click(function () {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 600);
        return false;
    });

    $('.slider').slick({
        dots: true,
        infinite: true,
        speed: 250,
        fade: false,
        adaptiveHeight: true,
        cssEase: 'linear'
    });

    $('.slider_photo').slick({
        dots: false,
        infinite: true,
        speed: 300,
        fade: true,
        cssEase: 'linear'
    });

    times = function () {
        now = new Date();
        hour = 23 - now.getHours();
        hour = ((hour + '').length == 1 ? hour = '0' + hour : hour) + '';
        minu = 60 - now.getMinutes();
        minu = ((minu + '').length == 1 ? minu = '0' + minu : minu) + '';
        secu = 60 - now.getSeconds();
        secu = ((secu + '').length == 1 ? secu = '0' + secu : secu) + '';
        $('.timer-box').html('<span class="timer-cont"><span class="timer-num">' + hour + '</span><span class="timer-txt timer-hour">ч :</span></span><span class="timer-cont"><span class="timer-num"> ' + minu + '</span><span class="timer-txt timer-minu">м : </span></span><span class="timer-cont"><span class="timer-num">' + secu + '</span><span class="timer-txt timer-secu">с</span></span>');
    };
    times();
    setInterval(times, 1000);


});