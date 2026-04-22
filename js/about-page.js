// Carousel
function initCaroSlider() {
    if (!document.querySelector(".caro-item")) return;

    let progress = 0,
        startX = 0,
        active = 0,
        isDown = false;

    const speedWheel = .02,
        speedDrag = -.1;

    const $items = document.querySelectorAll(".caro-item"),
        $cursors = document.querySelectorAll(".cursor");

    function debounce(e, t) {
        let s;
        return function () {
            const n = this,
                o = arguments;
            clearTimeout(s), s = setTimeout(function () {
                e.apply(n, o)
            }, t)
        }
    }

    function getZindex(e, t) {
        return e.map(function (s, n) {
            return t === n ? e.length : e.length - Math.abs(t - n)
        })
    }

    function displayItems(e, t, s) {
        const n = getZindex([...$items], s)[t];
        e.style.setProperty("--zIndex", n);
        e.style.setProperty("--active", (t - s) / $items.length);
    }

    function animate() {
        progress = Math.max(0, Math.min(progress, 100));
        active = Math.floor(progress / 100 * ($items.length - 1));
        $items.forEach(function (e, t) {
            displayItems(e, t, active)
        });
    }

    animate();

    $items.forEach(function (e, t) {
        e.addEventListener("click", function () {
            progress = t / $items.length * 100 + 10;
            animate();
        });
    });

    const handleWheel = debounce(function (e) {
        const t = .02 * e.deltaY;
        progress += t;
        animate();
    }, 20);

    const handleMouseMove = debounce(function (e) {
        if (e.type === "mousemove" && $cursors.length) {
            $cursors.forEach(function (t) {
                t.style.transform = "translate(" + e.clientX + "px, " + e.clientY + "px)";
            });
        }
        if (!isDown) return;
        const t = e.clientX || (e.touches && e.touches[0].clientX) || 0;
        progress += -.1 * (t - startX);
        startX = t;
        animate();
    }, 20);

    const handleMouseDown = function (e) {
        isDown = true;
        startX = e.clientX || (e.touches && e.touches[0].clientX) || 0;
    };

    const handleMouseUp = function () {
        isDown = false;
    };

    document.addEventListener("mousewheel", handleWheel);
    document.addEventListener("mousedown", handleMouseDown);
    document.addEventListener("mousemove", handleMouseMove);
    document.addEventListener("mouseup", handleMouseUp);
    document.addEventListener("touchstart", handleMouseDown);
    document.addEventListener("touchmove", handleMouseMove);
    document.addEventListener("touchend", handleMouseUp);
}

document.addEventListener("DOMContentLoaded", function () {
    initCaroSlider();
});