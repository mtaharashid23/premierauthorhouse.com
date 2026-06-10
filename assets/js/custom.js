function lenisSetup() {
	const lenis = new Lenis({
		duration: 1.5,
		easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
		smooth: true,
		mouseMultiplier: 1,
	});

	function raf(time) {
		lenis.raf(time);
		requestAnimationFrame(raf);
	}
	requestAnimationFrame(raf);
	document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
		anchor.addEventListener("click", function (e) {
			e.preventDefault();
			lenis.scrollTo(this.getAttribute("href"));
		});
	});
	lenis.scrollTo("top");
}
lenisSetup()

// gsap.registerPlugin(ScrollTrigger);
// gsap.from(".process-box-wrap",{
// 	scrollTrigger: {
// 		trigger: ".process-box-wrap",
// 		markers: false,
// 		toggleActions: "restart pause reverse pause"
// 	},
// 	y:600,
// 	ease:"power1",
// 	stagger:0.5,
// 	duration:1,

// });
$(document).ready(function () {
	$(".feature-carousel").owlCarousel({
		loop: true,
		margin: 30,
		nav: false,
		// nav: true,
		// navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
		dots: false,
		mouseDrag: true,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 4
			}
		}
	});
	$(".choose-carousel").owlCarousel({
		loop: true,
		margin: 30,
		nav: false,
		nav: true,
		navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
		dots: false,
		mouseDrag: true,
		autoplay: false,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 4
			}
		}
	});
	$(".testi-carousel").owlCarousel({
		loop: true,
		margin: 30,
		nav: false,
		nav: true,
		navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
		dots: false,
		mouseDrag: true,
		autoplay: false,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});
	$(window).width() <= 992 && 0 != ".portfolio-slider".length && ($(".portfolio-slider").addClass("owl-carousel owl-theme"), $(".portfolio-slider").owlCarousel({
		loop: false,
		margin: 30,
		nav: false,
		dots: false,
		autoplay: !0,
		autoplayTimeout: 4e3,
		autoplayHoverPause: !0,
		mouseDrag: !0,
		responsive: {
			0: {
				items: 2
			},
			460: {
				items: 3
			},
			767: {
				items: 4
			},
			991: {
				items: 4
			}
		}
	}));
	$(window).width() <= 992 && 0 != ".process-slider".length && ($(".process-slider").addClass("owl-carousel owl-theme"), $(".process-slider").owlCarousel({
		loop: false,
		margin: 30,
		nav: false,
		dots: false,
		autoplay: !0,
		autoplayTimeout: 4e3,
		autoplayHoverPause: !0,
		mouseDrag: !0,
		responsive: {
			0: {
				items: 1
			},
			460: {
				items: 1
			},
			767: {
				items: 2
			},
			991: {
				items: 2
			}
		}
	}));
	AOS.init({
		duration: 1000,
		disable: function () {
			return window.innerWidth < 800;
		}
	});

});


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
                        toastr.success(res.message, 'Success!');
                        
                        $form[0].reset(); 
                        
                        // Thank you page par simple redirect
                        setTimeout(function () {
                            window.location.href = 'thank-you';
                        }, 2500);
                    } else {
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