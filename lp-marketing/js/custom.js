$('.features_carousel').owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        992: {
            items: 3
        }
    }
})
if ($(window).width() <= 767) {
    if ($('.responsive-slider3').length != 0) {
        $('.responsive-slider3').find('.display-none').remove();
        $('.responsive-slider3').addClass('owl-theme owl-carousel');
        $('.responsive-slider3').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                767: {
                    items: 1
                },
                991: {
                    items: 1
                }
            }
        })
    }
}
if ($(window).width() <= 991) {
    if ($('.responsive-slider2').length != 0) {
        $('.responsive-slider2').find('.display-none').remove();
        $('.responsive-slider2').addClass('owl-theme owl-carousel');
        $('.responsive-slider2').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                767: {
                    items: 1
                },
                991: {
                    items: 2
                }
            }
        })
    }
}
if ($(window).width() <= 767) {
    if ($('.responsive-slider1').length != 0) {
        $('.responsive-slider1').find('.display-none').remove();
        $('.responsive-slider1').addClass('owl-theme owl-carousel');
        $('.responsive-slider1').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                767: {
                    items: 1
                }
            }
        })
    }
}
$('.work-portfolio').owlCarousel({
        loop: false,
        margin: 0,
        nav: false,
        rewind: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            991: {
                items: 3
            },
            1024: {
                items: 3
            }
        }
    }),
    function (e) {
        e.fn.countTo = function (o) {
            return o = o || {}, e(this).each(function () {
                var t = e.extend({}, e.fn.countTo.defaults, {
                        from: e(this).data("from"),
                        to: e(this).data("to"),
                        speed: e(this).data("speed"),
                        refreshInterval: e(this).data("refresh-interval"),
                        decimals: e(this).data("decimals")
                    }, o),
                    a = Math.ceil(t.speed / t.refreshInterval),
                    n = (t.to - t.from) / a,
                    s = this,
                    i = e(this),
                    r = 0,
                    l = t.from,
                    u = i.data("countTo") || {};

                function p(e) {
                    var o = t.formatter.call(s, e, t);
                    i.html(o)
                }
                i.data("countTo", u), u.interval && clearInterval(u.interval), u.interval = setInterval(function () {
                    r++, p(l += n), "function" == typeof t.onUpdate && t.onUpdate.call(s, l), r >= a && (i.removeData("countTo"), clearInterval(u.interval), l = t.to, "function" == typeof t.onComplete && t.onComplete.call(s, l))
                }, t.refreshInterval), p(l)
            })
        }, e.fn.countTo.defaults = {
            from: 0,
            to: 0,
            speed: 1e3,
            refreshInterval: 100,
            decimals: 0,
            formatter: function (e, o) {
                return e.toFixed(o.decimals)
            },
            onUpdate: null,
            onComplete: null
        }
    }(jQuery), $(function (e) {
        e(".count-number").data("countToOptions", {
            formatter: function (e, o) {
                return e.toFixed(o.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ",")
            }
        }), e(".timer").each(function (o) {
            var t = e(this);
            o = e.extend({}, o || {}, t.data("countToOptions") || {}), t.countTo(o)
        })
    }),
    $("#entry-box_close").click(function () {
        $("#entry-popup").fadeOut()
    }), $(".open-popup").click(function () {
        $("#input-box").html(""), null != $(this).data("price") && ($("#input-box").append('<input type="hidden" name="customers_meta[price]" value="' + $(this).data("price") + '">'), $("#input-box").append('<input type="hidden" name="customers_meta[name]" value="' + $(this).data("name") + '">')), $("#entry-popup").css("display", "flex").fadeIn()
    }), AOS.init();

$(document).ready(function () {
    $("#entry-box_close").click(function () {
        $("#entry-popup").fadeOut()
    }), window.location.hash || setTimeout(function () {
        $("#entry-popup").css("display", "flex").fadeIn()
    }, 1e4)
})

/* Button Click Open Chat */
document.addEventListener("DOMContentLoaded", function () {

    // Sab buttons jinki class "chatt" hai
    const chatButtons = document.querySelectorAll(".chatt");

    chatButtons.forEach(function (btn) {

        btn.addEventListener("click", function (e) {
            e.preventDefault();

            if (typeof Tawk_API !== "undefined") {

                // Agar chat open hai tou close karo
                if (Tawk_API.isChatMaximized()) {
                    Tawk_API.minimize();
                }
                // Warna open karo
                else {
                    Tawk_API.maximize();
                }

            }
        });

    });

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