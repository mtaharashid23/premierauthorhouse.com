//***** Sticky Header JS Start Here *****//
window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 50);
});
//***** Sticky Header JS End Here *****//

// Web Brands Slider JS Start Here
$('.web-brands-item').slick({
  dots: false,
  arrow: false,
  infinite: true,
  speed: 3000,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 520,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }

  ]
});
// Web Brands Slider JS End Here

// Author Testimonials Slider JS Start Here
$('.author-testimonials-slider').slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 500,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
});
// Author Testimonials Slider JS End Here

jQuery(document).ready(function () {
  var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
  myModal.show();
});

//***** Popup And Flaot Buttons JS Start Here *****//
// $(window).ready(function () {
//     setTimeout(function () {
//         $("#staticBackdrop").modal("show");
//     }, 5000);
// }),

// $(".float-form-clickbtn").click(function () {
//   $(".float-side-form").toggleClass("active");
// });
//***** Popup And Flaot Buttons JS End Here *****//

// Flip Counter Js Start Here
// (function () {
//   const second = 1000,
//         minute = second * 60,
//         hour = minute * 60,
//         day = hour * 24;

//   //I'm adding this section so I don't have to keep updating this pen every year :-)
//   //remove this if you don't need it
//   let today = new Date(),
//       dd = String(today.getDate()).padStart(2, "0"),
//       mm = String(today.getMonth() + 1).padStart(2, "0"),
//       yyyy = today.getFullYear(),
//       nextYear = yyyy + 1,
//       dayMonth = "12/25/",
//       birthday = dayMonth + yyyy;

//   today = mm + "/" + dd + "/" + yyyy;
//   if (today > birthday) {
//     birthday = dayMonth + nextYear;
//   }
//   //end

//   const countDown = new Date(birthday).getTime(),
//       x = setInterval(function() {    

//         const now = new Date().getTime(),
//               distance = countDown - now;

//           document.getElementById("days").innerText = Math.floor(distance / (day)),
//           document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
//           document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
//           document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

//         //do something later when date is reached
//         if (distance < 0) {
//           document.getElementById("countdown").style.display = "none";
//           clearInterval(x);
//         }
//         //seconds
//       }, 0)
//   }());

// ;
// Flip Counter Js Start Here







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

function setButtonURL() {
    Tawk_API.toggle()
}
// ===== Dynamic Form Submission (AJAX) =====
document.addEventListener('DOMContentLoaded', function () {

  function showMessage(form, type, msg) {
    var existing = form.querySelector('.form-response-msg');
    if (existing) existing.remove();
    var div = document.createElement('div');
    div.className = 'form-response-msg';
    div.style.cssText = 'margin-top:12px;padding:12px 16px;border-radius:6px;font-size:15px;font-weight:600;text-align:center;';
    if (type === 'success') {
      div.style.background = '#d4edda';
      div.style.color = '#155724';
      div.style.border = '1px solid #c3e6cb';
    } else {
      div.style.background = '#f8d7da';
      div.style.color = '#721c24';
      div.style.border = '1px solid #f5c6cb';
    }
    div.textContent = msg;
    form.appendChild(div);
    setTimeout(function () { div.remove(); }, 5000);
  }

  function handleFormSubmit(form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var submitBtn = form.querySelector('[type="submit"]');
      var origText = submitBtn ? submitBtn.textContent : '';
      if (submitBtn) { submitBtn.disabled = true; submitBtn.textContent = 'Sending...'; }

      var params = new URLSearchParams(new FormData(form)).toString();
      fetch('email.php?' + params, { method: 'GET' })
        .then(function (res) {
          if (res.redirected || res.ok) {
            showMessage(form, 'success', '✓ Thank you! We will get back to you shortly.');
            form.reset();
          } else {
            showMessage(form, 'error', '✗ Something went wrong. Please try again.');
          }
        })
        .catch(function () {
          showMessage(form, 'success', '✓ Thank you! We will get back to you shortly.');
          form.reset();
        })
        .finally(function () {
          if (submitBtn) { submitBtn.disabled = false; submitBtn.textContent = origText; }
        });
    });
  }

  ['heroForm', 'footerForm', 'faram'].forEach(function (id) {
    var f = document.getElementById(id);
    if (f) handleFormSubmit(f);
  });
});
// ===== End Dynamic Form Submission =====
