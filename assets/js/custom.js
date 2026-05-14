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
$( document ).ready(function() {
	$(".feature-carousel").owlCarousel({
		loop: true,
		margin: 30,
		nav:false,
		// nav: true,
		// navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
		dots: false,
		mouseDrag: true,
		autoplay:true,
		autoplayTimeout:3000,
		autoplayHoverPause:true,
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
		nav:false,
		nav: true,
		navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
		dots: false,
		mouseDrag: true,
		autoplay:false,
		autoplayTimeout:3000,
		autoplayHoverPause:true,
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
		nav:false,
		nav: true,
		navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
		dots: false,
		mouseDrag: true,
		autoplay:false,
		autoplayTimeout:3000,
		autoplayHoverPause:true,
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
    disable: function() {
        return window.innerWidth < 800;
    }
});

});
    