var newsletter_p = setInterval(function () {
  $("#bouncepopup-overlay").css("display", "block");
  $("#bouncepopupform").toggle("bounce", { times: 1 }, "slow");
  clearInterval(newsletter_p);
});

$(document).ready(function () {

  $("li:first-child").addClass("first");
  $("li:last-child").addClass("last");
  $("tr:nth-child(odd)").addClass("alter");
  $('[href="#"]').attr("href", "javascript:;");


  $(".bounce-close").click(function () {
    $(".bouncepopup-overlay").hide();
    $("#bouncepopupform").toggle("fadeOut");
  });

  $(function () {
    var selectedClass = "";
    $(".fil-cat").click(function () {
      $(this).addClass("active-pf");
      selectedClass = $(this).attr("data-rel");
      $("#portfolio").fadeTo(100, 0.1);
      $("#portfolio>div")
        .not("." + selectedClass)
        .fadeOut()
        .removeClass("scale-anm");
      setTimeout(function () {
        $("." + selectedClass)
          .fadeIn()
          .addClass("scale-anm");
        $("#portfolio").fadeTo(300, 1);
        $(".fil-cat").removeClass("active-pf");
      }, 300);
    });
  });


  $("#testimonails-slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    margin: 10,
    items: 2,
    auto: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      600: {
        items: 1,
        nav: false,
      },
      1000: {
        items: 2,
        nav: false,
        loop: false,
      },
    },
  });

  $("[data-fancybox]").fancybox()
  $('.portfolio-content [data-fancybox="video"], .testimonail-thumb [data-fancybox="video"]').fancybox({
    afterLoad: function (instance, current) {
      current.$content.css({
        overflow: "visible",
        background: "#000",
      });
    },
    onUpdate: function (instance, current) {
      var width,
        height,
        ratio = 16 / 9,
        video = current.$content;
      if (video) {
        video.hide();
        width = current.$slide.width();
        height = current.$slide.height() - 100;
        if (height * ratio > width) {
          height = width / ratio;
        } else {
          width = height * ratio;
        }
        video
          .css({
            width: width,
            height: height,
          })
          .show();
      }
    },
  });
});
