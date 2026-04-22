jQuery(document).ready(function () {
    if ($("#dp-next").length) {
        $("#dp-next").click(function () {
            if ($("#dp-slider .dp_item").length) {
                $("#dp-slider .dp_item:first-child").hide().appendTo("#dp-slider").fadeIn();
                $.each($(".dp_item"), function (t, e) {
                    $(e).attr("data-position", t + 1);
                });
                if (typeof detect_active === "function") {
                    detect_active();
                }
            }
        });
    }

    if ($("#dp-prev").length) {
        $("#dp-prev").click(function () {
            if ($("#dp-slider .dp_item").length) {
                $("#dp-slider .dp_item:last-child").hide().prependTo("#dp-slider").fadeIn();
                $.each($(".dp_item"), function (t, e) {
                    $(e).attr("data-position", t + 1);
                });
                if (typeof detect_active === "function") {
                    detect_active();
                }
            }
        });
    }

    $("body").on("click", "#dp-slider .dp_item:not(:first-child)", function () {
        var t = $(this).attr("data-class");
        if (t) {
            console.log(t);
            $("#dp-slider .dp_item[data-class=" + t + "]").hide().prependTo("#dp-slider").fadeIn();
            $.each($(".dp_item"), function (t, e) {
                $(e).attr("data-position", t + 1);
            });
            if (typeof detect_active === "function") {
                detect_active();
            }
        }
    });
});

$(document).ready(function () {
    if ($(".brands-main-slider").length && typeof $.fn.slick === "function") {
        $(".brands-main-slider").slick({
            centerMode: true,
            centerPadding: "60px",
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 4,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: "40px",
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: "40px",
                        slidesToShow: 1
                    }
                }
            ]
        });
    }

    if ($(".carousel-slider").length && typeof $.fn.slick === "function") {
        $(".carousel-slider").slick({
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            margin: 30,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }
});

// Split Flap Countdown
var div = document.querySelector(".center");
if (div) {
    var time, previousSecond;
    var countDownDate = (new Date()).getTime() + 54e5;
    var reverseFlapDirection = false;
    var bgColor = "255, 255, 255";
    var fontColor = "70,70,70";
    var segments = 10;
    var html = "";
    var splitFlaps = [];

    for (var x = 0; x < 8; x++) {
        html += '<div class="splitflap"><div class="front-top"></div><div class="front-full"></div><div class="back-top"></div><div class="back-full"></div></div>';
    }

    div.innerHTML = html;

    document.documentElement.style.setProperty("--rgb", bgColor);
    document.documentElement.style.setProperty("--fontColor", fontColor);
    document.documentElement.style.setProperty("--segments", segments);
    document.documentElement.style.setProperty("--animationDirection", reverseFlapDirection ? "reverse" : "normal");

    document.querySelectorAll(".splitflap").forEach(function (t) {
        var e = t.querySelectorAll("div");
        splitFlaps.push(e);
    });

    var currentTimeLeft = function () {
        var t = (new Date()).getTime();
        var e = countDownDate - t;
        if (e < 0) {
            clearInterval(countdownInterval);
            return ["Co", "mp", "le", "te"];
        } else {
            var i = Math.floor(e / 864e5);
            var n = Math.floor(e % 864e5 / 36e5);
            var s = Math.floor(e % 36e5 / 6e4);
            var r = Math.floor(e % 6e4 / 1e3);
            return [i, n, s, r];
        }
    };

    function separateIntoSingleDigits(t) {
        return t.map(function (t) {
            return ("0" + t.toString()).slice(-2);
        }).join("").split("");
    }

    function animate(t, e) {
        if (t) {
            t.classList.remove(e);
            t.offsetWidth = t.offsetWidth;
            t.classList.add(e);
        }
    }

    function doSplitflap(t, e) {
        if (!t) return;
        var i = t[0], n = t[1], s = t[2], r = t[3];

        function a(t, i, r, a) {
            if (t && i && r && a) {
                if (e !== t.innerHTML) {
                    t.innerHTML = r.innerHTML = i.innerHTML;
                    i.innerHTML = a.innerHTML = e;
                    if (e !== t.innerHTML) {
                        animate(n, "flip1");
                        animate(s, "flip2");
                    }
                }
            }
        }

        if (reverseFlapDirection) {
            a(s, i, r, n);
        } else {
            a(i, s, n, r);
        }
    }

    function updateTime() {
        time = separateIntoSingleDigits(currentTimeLeft());
        setTimeout(function () {
            if (previousSecond !== time[time.length - 1]) {
                time.forEach(function (t, e) {
                    if (splitFlaps[e]) {
                        doSplitflap(splitFlaps[e], t);
                    }
                });
                previousSecond = time[time.length - 1];
            }
        }, 100);
    }

    var countdownInterval = setInterval(updateTime, 1000);
}

// Counter (.counter)
var counters = document.querySelectorAll(".counter");
if (counters.length) {
    counters.forEach(function (t) {
        t.innerText = "0";
        var e = function () {
            var i = +t.getAttribute("data-target");
            var n = +t.innerText;
            var s = i / 200;
            if (n < i) {
                t.innerText = Math.ceil(n + s);
                setTimeout(e, 4);
            } else {
                t.innerText = i;
            }
        };
        e();
    });
}

// Counter (.count1)
$(document).ready(function () {
    var t = $(".count1");
    if (t.length) {
        var e = t.length;
        var n = [];
        for (var i = 0; i < e; i++) {
            n[i] = parseInt(t[i].innerHTML);
        }
        var s = function (e, i, n) {
            var s = e;
            setInterval(function () {
                if (s < i) {
                    s++;
                    t[n].innerHTML = s;
                }
            }, 1);
        };
        for (var j = 0; j < e; j++) {
            s(0, n[j], j);
        }
    }
});

// Counter (.count2)
$(document).ready(function () {
    var t = $(".count2");
    if (t.length) {
        var e = t.length;
        var n = [];
        for (var i = 0; i < e; i++) {
            n[i] = parseInt(t[i].innerHTML);
        }
        var s = function (e, i, n) {
            var s = e;
            setInterval(function () {
                if (s < i) {
                    s++;
                    t[n].innerHTML = s;
                }
            }, 40);
        };
        for (var j = 0; j < e; j++) {
            s(0, n[j], j);
        }
    }
});

// Counter (.count3)
$(document).ready(function () {
    var t = $(".count3");
    if (t.length) {
        var e = t.length;
        var n = [];
        for (var i = 0; i < e; i++) {
            n[i] = parseInt(t[i].innerHTML);
        }
        var s = function (e, i, n) {
            var s = e;
            setInterval(function () {
                if (s < i) {
                    s++;
                    t[n].innerHTML = s;
                }
            }, 20);
        };
        for (var j = 0; j < e; j++) {
            s(0, n[j], j);
        }
    }
});