$(document).ready(function () {
    $('.testimonailsc').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 1
    });
});


$('.slick')
    .on('init', () => {
        $('.slick-slide[data-slick-index="-2"]').addClass('lt2');
        $('.slick-slide[data-slick-index="-1"]').addClass('lt1');
        $('.slick-slide[data-slick-index="1"]').addClass('gt1');
        $('.slick-slide[data-slick-index="2"]').addClass('gt2');
    })
    .slick({
        centerMode: true,
        centerPadding: 0,
        slidesToShow: 5,
        autoplay: true,
        autoplaySpeed: 1500

    }).on('beforeChange', (event, slick, current, next) => {
    $('.slick-slide.gt2').removeClass('gt2');
    $('.slick-slide.gt1').removeClass('gt1');
    $('.slick-slide.lt1').removeClass('lt1');
    $('.slick-slide.lt2').removeClass('lt2');

    const lt2 = (current < next && current > 0) ? current - 1 : next - 2;
    const lt1 = (current < next && current > 0) ? current : next - 1;
    const gt1 = (current < next || next === 0) ? next + 1 : current;
    const gt2 = (current < next || next === 0) ? next + 2 : current + 1;

    $(`.slick-slide[data-slick-index="${lt2}"]`).addClass('lt2');
    $(`.slick-slide[data-slick-index="${lt1}"]`).addClass('lt1');
    $(`.slick-slide[data-slick-index="${gt1}"]`).addClass('gt1');
    $(`.slick-slide[data-slick-index="${gt2}"]`).addClass('gt2');

    // Clone processing when moving from 5 to 0
    if (current === 5 && next === 0) {
        $(`.slick-slide[data-slick-index="${current - 1}"]`).addClass('lt2');
        $(`.slick-slide[data-slick-index="${current}"]`).addClass('lt1');
        $(`.slick-slide[data-slick-index="${current + 2}"]`).addClass('gt1');
        $(`.slick-slide[data-slick-index="${current + 3}"]`).addClass('gt2');
    }

    // Clone processing when moving from 0 to 5
    if (current === 0 && next === 5) {
        $(`.slick-slide[data-slick-index="${current - 1}"]`).addClass('gt2');
        $(`.slick-slide[data-slick-index="${current}"]`).addClass('gt1');
        $(`.slick-slide[data-slick-index="${current - 2}"]`).addClass('lt1');
        $(`.slick-slide[data-slick-index="${current - 3}"]`).addClass('lt2');
    }

    // console.log('beforeChange', current, ':', lt2, lt1, next, gt1, gt2);
});


$('.myBtn').click(function () {
    $('.myModal').fadeIn()
})
$('.an-overlay ').click(function (event) {

    $('.myModal').fadeOut()
})
$('.close').click(function (event) {

    $('.myModal').fadeOut()
});

window.location.hash ||
setTimeout(function () {
    $(".myModal").fadeIn()
}, 1e4);

var MODULE = MODULE || {};


$(document).ready(function () {
    $(".close").click(function () {

        $('.myModal').fadeOut()
    }), window.location.hash || setTimeout(function () {
        $(".myModal").fadeIn()
    }, 1e4)
});



/* ==========================================
scrollTop() >= 300
Should be equal the the height of the header
========================================== */

$(window).scroll(function () {
    if ($(window).scrollTop() >= 600) {
        $('.nav-div-st').addClass('fixed-header');

    } else {
        $('.nav-div-st').removeClass('fixed-header');

    }
});


AOS.init({
    disable: function () {
        var maxWidth = 800;
        return window.innerWidth < maxWidth;
    }
});
