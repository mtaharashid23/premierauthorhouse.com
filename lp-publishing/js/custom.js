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


document.addEventListener("DOMContentLoaded", function () {

    const chatButtons = document.querySelectorAll(".chatt");

    const openZendeskChat = function () {
        if (typeof zE !== "undefined") {
            zE('webWidget', 'open');
        } else {
            var checkZendesk = setInterval(function () {
                if (typeof zE !== "undefined") {
                    zE('webWidget', 'open');
                    clearInterval(checkZendesk);
                }
            }, 200);
        }
    };

    chatButtons.forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.preventDefault();
            openZendeskChat();
        });
    });

});

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



$(document).ready(function () {
    // Toastr Configuration
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    $('.leadForm').on('submit', function (e) {
        e.preventDefault();
        
        var $form = $(this);
        var $submitBtn = $form.find('button[type="submit"]');
        var originalBtnText = $submitBtn.text(); 
        
        $submitBtn.prop('disabled', true).text('Processing...');

        $.ajax({
            type: 'POST',
            url: 'contact-process.php',
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (response) {
                try {
                    var res = JSON.parse(response);
                    if (res.status == 'success') {
                        // Success Toast
                        toastr.success(res.message, 'Success!');
                        
                        $form[0].reset(); 
                        
                        // Direct Redirect to thank-you page
                        setTimeout(function () {
                            window.location.href = '../thank-you';
                        }, 2500);
                    } else {
                        // Error Toast
                        toastr.error(res.message, 'Error!');
                        $submitBtn.prop('disabled', false).text(originalBtnText);
                    }
                } catch (e) {
                    toastr.error('Internal Server Error', 'Error!');
                    $submitBtn.prop('disabled', false).text(originalBtnText);
                }
            },
            error: function () {
                toastr.error('Could not connect to server', 'Network Error!');
                $submitBtn.prop('disabled', false).text(originalBtnText);
            }
        });
    });
});