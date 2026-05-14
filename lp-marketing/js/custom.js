$('.features_carousel').owlCarousel({
  loop:true,
  margin:30,
  nav:false,
  dots: true,
  autoplay:true,
  autoplayTimeout:3500,
  autoplayHoverPause:true,
  responsive:{
      0:{
          items:1
      },
      768:{
          items:2
      },
      992:{
          items:3
      }
  }
})
if($( window ).width() <= 767){
    if($('.responsive-slider3').length != 0){
        $('.responsive-slider3').find('.display-none').remove();
        $('.responsive-slider3').addClass('owl-theme owl-carousel');
        $('.responsive-slider3').owlCarousel({
            loop:true,
            margin:0,
            nav:false,
            autoplay:true,
            autoplayTimeout:4000,
            autoplayHoverPause:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                767:{
                    items:1
                },
                991:{
                    items:1
                }
            }
        })
    }
}
if($( window ).width() <= 991){
    if($('.responsive-slider2').length != 0){
        $('.responsive-slider2').find('.display-none').remove();
        $('.responsive-slider2').addClass('owl-theme owl-carousel');
        $('.responsive-slider2').owlCarousel({
            loop:true,
            margin:0,
            nav:false,
            autoplay:true,
            autoplayTimeout:4000,
            autoplayHoverPause:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                767:{
                    items:1
                },
                991:{
                    items:2
                }
            }
        })
    }
}
if($( window ).width() <= 767){
    if($('.responsive-slider1').length != 0){
        $('.responsive-slider1').find('.display-none').remove();
        $('.responsive-slider1').addClass('owl-theme owl-carousel');
        $('.responsive-slider1').owlCarousel({
            loop:true,
            margin:0,
            nav:false,
            autoplay:true,
            autoplayTimeout:4000,
            autoplayHoverPause:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                767:{
                    items:1
                }
            }
        })
    }
}
$('.work-portfolio').owlCarousel({
            loop: false,
            margin: 0,
            nav: false,
            rewind:true,
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
function(e) {
    e.fn.countTo = function(o) {
        return o = o || {}, e(this).each(function() {
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
            i.data("countTo", u), u.interval && clearInterval(u.interval), u.interval = setInterval(function() {
                r++, p(l += n), "function" == typeof t.onUpdate && t.onUpdate.call(s, l), r >= a && (i.removeData("countTo"), clearInterval(u.interval), l = t.to, "function" == typeof t.onComplete && t.onComplete.call(s, l))
            }, t.refreshInterval), p(l)
        })
    }, e.fn.countTo.defaults = {
        from: 0,
        to: 0,
        speed: 1e3,
        refreshInterval: 100,
        decimals: 0,
        formatter: function(e, o) {
            return e.toFixed(o.decimals)
        },
        onUpdate: null,
        onComplete: null
    }
}(jQuery), $(function(e) {
    e(".count-number").data("countToOptions", {
        formatter: function(e, o) {
            return e.toFixed(o.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ",")
        }
    }), e(".timer").each(function(o) {
        var t = e(this);
        o = e.extend({}, o || {}, t.data("countToOptions") || {}), t.countTo(o)
    })
}),
$("#entry-box_close").click(function() {
    $("#entry-popup").fadeOut()
}), $(".open-popup").click(function() {
    $("#input-box").html(""), null != $(this).data("price") && ($("#input-box").append('<input type="hidden" name="customers_meta[price]" value="' + $(this).data("price") + '">'), $("#input-box").append('<input type="hidden" name="customers_meta[name]" value="' + $(this).data("name") + '">')), $("#entry-popup").css("display", "flex").fadeIn()
}), AOS.init();

$(document).ready(function() {
    $("#entry-box_close").click(function() {
        $("#entry-popup").fadeOut()
    }), window.location.hash || setTimeout(function() {
        $("#entry-popup").css("display", "flex").fadeIn()
    }, 1e4)
})