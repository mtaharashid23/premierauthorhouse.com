$(document).ready(function () {
  $(".listpacks ul").mCustomScrollbar({
      scrollButtons: {enable: true},
      theme:"dark-3",
      scrollbarPosition: "outside"
  });
});

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