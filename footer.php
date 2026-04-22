<?php
// footer.php - Premier Author House
$depth = isset($depth) ? $depth : 0;
$prefix = str_repeat('../', $depth);
?>
<section class="footer-form">
   <div class="container">
      <div class="row footer-inner-box">
         <div class="col-md-6 form-footer">
            <div class="footer-form-desc">
               <h3>How to Contact Us?</h3>
            </div>
            <div class="footer-form-points">
               <div class="footer-form-bullets">
                  <h3>1</h3>
               </div>
               <div class="footer-points-desc">
                  <h2>Reach Us via Email:</h2>
                  <p>For questions, support, or inquiries, please email us at <a
                        href="mailto:info@premierauthorhouse.com">info@premierauthorhouse.com</a>. We will respond
                     quickly to assist you with your publishing requirements.</p>
               </div>
            </div>
            <div class="footer-form-points">
               <div class="footer-form-bullets">
                  <h3>2</h3>
               </div>
               <div class="footer-points-desc">
                  <h2>Reach Us via Telephone:</h2>
                  <p>Speak with someone directly at <a href="tel:+15128429394">(512) 842-9394</a>, and one of our
                     delightful publishing staff will guide you.</p>
               </div>
            </div>
            <div class="footer-form-points">
               <div class="footer-form-bullets">
                  <h3>3</h3>
               </div>
               <div class="footer-points-desc">
                  <h2>Live Chat:</h2>
                  <p>A quick chat with our team via the live chat on our website can provide immediate answers and help.
                     We are always happy to assist!</p>
               </div>
            </div>
            <div class="footer-form-points">
               <div class="footer-form-bullets">
                  <h3>4</h3>
               </div>
               <div class="footer-points-desc">
                  <h2>Contact Form:</h2>
                  <p>Please fill in your details in our very simple contact form, and we will respond as soon as
                     possible.</p>
               </div>
            </div>
            <div class="banner-btn1">
               <div class="getint">
                  <a href="javascript:void(0);" class="custom-btn btn-9 btn btn-primary" data-bs-toggle="modal"
                     data-bs-target="#myModal">Get a Quote Now <i class="fa fa-angle-right"></i></a>
               </div>
               <div class="number-btn">
                  <a href="tel:+15128429394">
                     <div class="banner-phone">
                        <div class="icon_phone"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="banner-head_phone">
                           <h2>Call Now</h2>
                           <h4>(512) 842-9394</h4>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-content">
               <div class="form-box">
                  <div class="form-head">
                     <h3>Sign <span>Up Now</span></h3>
                     <p>Fill in the form below to get instant access</p>
                  </div>
                  <div class="form-pen-img"><img src="<?php echo $prefix; ?>images/pen-about.webp" alt=""></div>
               </div>
               <div id="footer-form-msg" style="display:none;padding:10px;margin-bottom:10px;border-radius:4px;"></div>
               <form id="footer-signup-form" method="POST">
                  <input type="hidden" name="form_source" value="footer_signup">
                  <input type="text" name="honeypot" style="display:none;" tabindex="-1" autocomplete="off">
                  <div class="col-sm-12 footerform">
                     <input type="text" placeholder="Full Name" name="fname" value="" required>
                  </div>
                  <div class="col-sm-12">
                     <input type="email" placeholder="Email Address" name="email" value="" required>
                  </div>
                  <div class="col-sm-12">
                     <input type="tel" placeholder="Phone Number" name="number" value="" required>
                  </div>
                  <div class="col-sm-12 dropdown-box">
                     <div class="col-sm-6 dropdown-boxes">
                        <select name="services" id="services" required>
                           <option value="" disabled selected>Select your Service</option>
                           <option value="ghostwriting-services">Ghostwriting Services</option>
                           <option value="book-writing-proofreading">Book Writing &amp; Proofreading</option>
                           <option value="book-cover-design">Book Cover Design</option>
                           <option value="book-publishing">Book Publishing</option>
                        </select>
                     </div>
                     <div class="col-sm-6 dropdown-boxes">
                        <select name="Budget" id="Budget" required>
                           <option value="" disabled selected>Budget...</option>
                           <option value="$500-$1,000">$500 - $1,000</option>
                           <option value="$1,000-$5,000">$1,000 - $5,000</option>
                           <option value="$5,000-$10,000">$5,000 - $10,000</option>
                           <option value="Others">Others</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <textarea name="msg" placeholder="Brief..." rows="5"></textarea>
                  </div>
                  <div class="col-sm-12">
                     <button type="submit" class="custom-btn btn-9 footer-btn">Sign Up</button>
                  </div>
                  <div class="col-sm-12 radio-box">
                     <input type="checkbox" name="terms" id="terms-footer" required>
                     <label class="terms" for="terms-footer">By checking this box, I consent to receive text messages
                        related to Promotions from Premier Author House. You can reply "STOP" at any time to opt-out.
                        Message and data rates may apply. For more information, please visit our <a
                           href="<?php echo $prefix; ?>privacy-policy.php"><span>Privacy Policies</span></a> and <a
                           href="<?php echo $prefix; ?>terms-conditions.php"><span>SMS Terms and
                              Conditions</span></a></label>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="footer">
   <div class="container">
      <div class="row upper-footer">
         <div class="col-md-3">
            <div class="footer-logo">
               <a href="<?php echo $prefix; ?>index.php">
                  <img src="<?php echo $prefix; ?>images/logo.png" alt="Premier Author House">
               </a>
            </div>
         </div>
         <div class="col-md-6">
            <div class="footer desc">
               <p>Get going on your journey to publication with our full range of affordable services. Let Premier
                  Author House take care of the rest while you concentrate on writing.</p>
            </div>
         </div>
         <div class="col-md-3">
            <div class="footer-social">
               <ul>
                  <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="row inner-footer">
         <div class="col-md-4">
            <div class="footer-head">
               <h3>Services</h3>
            </div>
            <div class="footer-link">
               <div class="page-link-footer">
                  <ul>
                     <li><a href="<?php echo $prefix; ?>services/professional-ghostwriting.php">Ghostwriting</a></li>
                     <li><a href="<?php echo $prefix; ?>services/book-editing.php">Book Editing</a></li>
                     <li><a href="<?php echo $prefix; ?>services/book-cover-design.php">Book Cover Design</a></li>
                     <li><a href="<?php echo $prefix; ?>services/ebook-cover-design.php">Ebook Cover Design</a></li>
                     <li><a href="<?php echo $prefix; ?>services/book-writing.php">Book Writing</a></li>
                     <li><a href="<?php echo $prefix; ?>services/book-marketing.php">Book Marketing</a></li>
                     <li><a href="<?php echo $prefix; ?>services/ebook-writing.php">Ebook Writing Services</a></li>
                  </ul>
               </div>
               <div class="page-link-footer">
                  <ul>
                     <li><a href="<?php echo $prefix; ?>services/biography-writing.php">Biography Writing</a></li>
                     <li><a href="<?php echo $prefix; ?>services/memoir-writing.php">Memoir Writing</a></li>
                     <li><a href="<?php echo $prefix; ?>services/book-printing.php">Book Printing</a></li>
                     <li><a href="<?php echo $prefix; ?>services/book-trailer.php">Video Book</a></li>
                     <li><a href="<?php echo $prefix; ?>services/audiobook-publishing.php">Audio Book</a></li>
                     <li><a href="<?php echo $prefix; ?>services/author-website-design.php">Author Website</a></li>
                     <li><a href="<?php echo $prefix; ?>services/book-illustration.php">Book Illustration</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-md-4 footer-sec">
            <div class="footer-head">
               <h3>Company</h3>
            </div>
            <div class="footer-link">
               <div class="page-link-footer">
                  <ul>
                     <li><a href="<?php echo $prefix; ?>about-us.php">About Us</a></li>
                     <li><a href="<?php echo $prefix; ?>contact-us.php">Contact Us</a></li>
                     <li><a href="<?php echo $prefix; ?>packages.php">Packages</a></li>
                     <li><a href="<?php echo $prefix; ?>blog.php">Blog</a></li>
                     <li><a href="<?php echo $prefix; ?>faqs.php">FAQs</a></li>
                  </ul>
               </div>
            </div>
            <div class="footer-head">
               <h3>Policies</h3>
            </div>
            <div class="footer-link">
               <div class="page-link-footer">
                  <ul>
                     <li><a href="<?php echo $prefix; ?>privacy-policy.php">Privacy Policy</a></li>
                     <li><a href="<?php echo $prefix; ?>terms-conditions.php">Terms &amp; Condition</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="footer-head">
               <h3>Contact Information</h3>
            </div>
            <div class="icon-box">
               <div class="footer-contact"><img src="<?php echo $prefix; ?>images/phone-icon-f.webp" alt=""></div>
               <div class="icon-info">
                  <h3><a href="tel:+15128429394">(512) 842-9394</a></h3>
               </div>
            </div>
            <div class="icon-box">
               <div class="footer-contact"><img src="<?php echo $prefix; ?>images/email-icon-f.webp" alt=""></div>
               <div class="icon-info">
                  <h3><a href="mailto:info@premierauthorhouse.com">info@premierauthorhouse.com</a></h3>
               </div>
            </div>
            <div class="icon-box">
               <div class="footer-contact"><img src="<?php echo $prefix; ?>images/address-icon-f.webp" alt=""></div>
               <div class="icon-info">
                  <h3>Head Office: 717 Palamos Dr Leander, TX 78641, USA</h3>
               </div>
            </div>
            <div class="customer-review"><img src="<?php echo $prefix; ?>images/customer-review.webp" alt=""></div>
         </div>
      </div>
   </div>
</section>

<section class="copy-right">
   <div class="container">
      <div class="row copyright-web">
         <div class="col-sm-6">
            <div class="copyright">
               <h3>All Rights Reserved 2026 - Premier Author House</h3>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="payment-cards"><img src="<?php echo $prefix; ?>images/visa-card.webp" alt=""></div>
         </div>
      </div>
   </div>
</section>

<!-- Quote Modal -->
<section class="ftrform">
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h2 class="modal-title" id="myModalLabel"><span>Book Publishing </span>Service</h2>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
               <div id="modal-form-msg" style="display:none;padding:10px;margin-bottom:10px;border-radius:4px;"></div>
               <form id="modal-quote-form" method="POST">
                  <input type="hidden" name="form_source" value="modal_quote">
                  <input type="text" name="honeypot" style="display:none;" tabindex="-1" autocomplete="off">
                  <div class="">
                     <input type="text" value="" name="name" class="form-control" placeholder="Enter Your Full Name"
                        required>
                  </div>
                  <div class="">
                     <input type="email" value="" name="email" class="form-control"
                        placeholder="Enter Your Email Address" required>
                  </div>
                  <div class="">
                     <input type="tel" value="" name="phone" class="form-control" placeholder="Enter Phone Number"
                        required>
                  </div>
                  <div class="mb-3">
                     <select name="services" id="services" class="form-control" required>
                        <option value="" disabled selected>Select your Service</option>
                        <option value="ghostwriting-services">Ghostwriting Services</option>
                        <option value="book-editing-services">Book Editing Services</option>
                        <option value="book-cover-design-services">Book Cover Design Services</option>
                        <option value="ebook-cover-design-services">Ebook Cover Design Services</option>
                        <option value="book-publishing-services">Book Publishing Services</option>
                        <option value="book-marketing-services">Book Marketing Services</option>
                        <option value="ebook-writing-services">Ebook Writing Services</option>
                        <option value="biography-writing-services">Biography Writing Services</option>
                        <option value="memoir-writing-services">Memoir Writing Services</option>
                        <option value="book-printing-services">Book Printing Services</option>
                        <option value="video-book-services">Video Book Services</option>
                        <option value="audio-book-services">Audio Book Services</option>
                        <option value="author-website-services">Author Website Services</option>
                        <option value="book-illustration-services">Book Illustration Services</option>
                     </select>
                  </div>
                  <p class="form_tagline">
                     <label>
                        <input class="PrivacyPolicy" type="checkbox" name="PrivacyPolicy" required>
                        By checking this box, I consent to receive text messages from Premier Author House. You can
                        reply "STOP" at any time to opt-out. For more information, please visit our <a
                           href="<?php echo $prefix; ?>privacy-policy.php" target="_blank">Privacy Policies</a> and <a
                           href="<?php echo $prefix; ?>terms-conditions.php" target="_blank">SMS Terms and
                           Conditions</a>
                     </label>
                  </p>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.3/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/EasePack.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/split-type@0.3.4/umd/index.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<script src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script src="js/about-page.js"></script>
<script src="js/custom.js"></script>
<script src="https://use.fontawesome.com/3af70af034.js"></script>
<script src='https://cdn.jsdelivr.net/gsap/1.19.1/TweenMax.min.js'></script>
<script src="https://unpkg.com/lenis@1.1.2/dist/lenis.min.js"></script>
<script>
   $(document).ready(function () {

      /* ─────────────────────────────────────────
         1. Float Button
      ───────────────────────────────────────── */
      function initFloatButton() {
         if ($(".clickbutton").length) {
            $(".clickbutton").click(function () {
               $('.floatbutton').toggleClass("active");
               $('.crossplus').toggleClass("rotate");
            });
         }
      }

      /* ─────────────────────────────────────────
         2. Modal Popup
      ───────────────────────────────────────── */
      function initModalPopup() {
         if ($('#exampleModal').length) {
            $(window).on('load', function () {
               setTimeout(function () {
                  $('#exampleModal').modal('show');
               }, 4000);
            });
         }
      }

      /* ─────────────────────────────────────────
         3. Number Counter Animation
      ───────────────────────────────────────── */
      function initCounters() {
         if ($(".numbers").length && $(".value").length) {
            var viewed = false;

            function isScrolledIntoView(elem) {
               var docViewTop = $(window).scrollTop();
               var docViewBottom = docViewTop + $(window).height();
               var elemTop = $(elem).offset().top;
               var elemBottom = elemTop + $(elem).height();
               return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
            }

            function testScroll() {
               if (isScrolledIntoView($(".numbers")) && !viewed) {
                  viewed = true;
                  $('.value').each(function () {
                     $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                     }, {
                        duration: 4000,
                        easing: 'swing',
                        step: function (now) {
                           $(this).text(Math.ceil(now));
                        }
                     });
                  });
               }
            }

            $(window).scroll(testScroll);
         }
      }

      /* ─────────────────────────────────────────
         4. Mouse-Move Carousel
      ───────────────────────────────────────── */
      function initCarousel() {
         if ($('.carousel').length) {
            (function ($) {
               "use strict";

               var bindToClass = 'carousel',
                  containerWidth = 0,
                  scrollWidth = 0,
                  posFromLeft = 0,
                  stripePos = 0,
                  animated = null,
                  $slide, $carousel, el, $el, ratio, scrollPos, nextMore, prevMore, pos, padding;

               function calc(e) {
                  $el = $(this).find(' > .wrap');
                  el = $el[0];
                  $carousel = $el.parent();
                  $slide = $el.prev('.slide');

                  nextMore = prevMore = false;

                  containerWidth = el.clientWidth;
                  scrollWidth = el.scrollWidth;
                  padding = 0.2 * containerWidth;
                  posFromLeft = $el.offset().left;
                  stripePos = e.pageX - padding - posFromLeft;
                  pos = stripePos / (containerWidth - padding * 2);
                  scrollPos = (scrollWidth - containerWidth) * pos;

                  if (scrollPos < 0)
                     scrollPos = 0;
                  if (scrollPos > (scrollWidth - containerWidth))
                     scrollPos = scrollWidth - containerWidth;

                  $el.animate({
                     scrollLeft: scrollPos
                  }, 200, 'swing');

                  if ($slide.length)
                     $slide.css({
                        width: (containerWidth / scrollWidth) * 100 + '%',
                        left: (scrollPos / scrollWidth) * 100 + '%'
                     });

                  clearTimeout(animated);
                  animated = setTimeout(function () {
                     animated = null;
                  }, 200);

                  return this;
               }

               function move(e) {
                  if (animated) return;

                  ratio = scrollWidth / containerWidth;
                  stripePos = e.pageX - padding - posFromLeft;

                  if (stripePos < 0)
                     stripePos = 0;

                  pos = stripePos / (containerWidth - padding * 2);

                  scrollPos = (scrollWidth - containerWidth) * pos;

                  el.scrollLeft = scrollPos;
                  if ($slide[0] && scrollPos < (scrollWidth - containerWidth))
                     $slide[0].style.left = (scrollPos / scrollWidth) * 100 + '%';

                  prevMore = el.scrollLeft > 0;
                  nextMore = el.scrollLeft < (scrollWidth - containerWidth);

                  $carousel.toggleClass('left', prevMore);
                  $carousel.toggleClass('right', nextMore);
               }

               $.fn.carousel = function (options) {
                  $(document)
                     .on('mouseenter.carousel', '.' + bindToClass, calc)
                     .on('mousemove.carousel', '.' + bindToClass, move);
               };

               $.fn.carousel();

            })(jQuery);
         }
      }

      /* ─────────────────────────────────────────
         5. Slick Sliders
      ───────────────────────────────────────── */
      function initSliders() {
         if ($('.client-logo-slider').length) {
            $('.client-logo-slider').slick({
               dots: false,
               infinite: true,
               autoplay: true,
               arrows: false,
               autoplaySpeed: 0,
               speed: 8000,
               cssEase: 'linear',
               Swiping: true,
               slidesToShow: 5,
               pauseOnHover: false,
               slidesToScroll: 1,
               responsive: [{
                     breakpoint: 1601,
                     settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                     }
                  },
                  {
                     breakpoint: 600,
                     settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                     }
                  },
                  {
                     breakpoint: 480,
                     settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                     }
                  }
               ]
            });
         }

         if ($('.sliderserv').length) {
            $('.sliderserv').slick({
               autoplay: true,
               dots: true,
               infinite: false,
               speed: 500,
               cssEase: 'linear',
               slidesToShow: 4,
               pauseOnHover: false,
               slidesToScroll: 3,
               responsive: [{
                     breakpoint: 1100,
                     settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                     }
                  },
                  {
                     breakpoint: 768,
                     settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                     }
                  },
                  {
                     breakpoint: 480,
                     settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                     }
                  }
               ]
            });
         }

         if ($('.testislider').length) {
            $('.testislider').slick({
               centerMode: true,
               autoplay: true,
               centerPadding: '60px',
               dots: true,
               slidesToShow: 4,
               responsive: [{
                     breakpoint: 768,
                     settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        dots: true,
                        slidesToShow: 2,
                     }
                  },
                  {
                     breakpoint: 480,
                     settings: {
                        arrows: false,
                        centerMode: true,
                        dots: true,
                        centerPadding: '40px',
                        slidesToShow: 1,
                     }
                  }
               ]
            });
         }

         if ($('.portslider').length) {
            $('.portslider').slick({
               autoplay: true,
               infinite: false,
               speed: 500,
               cssEase: 'linear',
               slidesToShow: 5,
               pauseOnHover: false,
               slidesToScroll: 3,
               responsive: [{
                     breakpoint: 1200,
                     settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                     }
                  },
                  {
                     breakpoint: 768,
                     settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                     }
                  },
                  {
                     breakpoint: 480,
                     settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                     }
                  }
               ]
            });
         }

         if ($('.amazonslide').length) {
            $('.amazonslide').slick({
               autoplay: true,
               dots: true,
               infinite: false,
               speed: 500,
               cssEase: 'linear',
               slidesToShow: 2,
               pauseOnHover: false,
               slidesToScroll: 1,
               responsive: [{
                     breakpoint: 1200,
                     settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                     }
                  },
                  {
                     breakpoint: 768,
                     settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                     }
                  },
                  {
                     breakpoint: 480,
                     settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                     }
                  }
               ]
            });
         }
      }

      /* ─────────────────────────────────────────
         6. Book Flip Hover Effect
      ───────────────────────────────────────── */
      function initBookFlip() {
         if ($(".book-1").length) {
            (function ($) {
               $(".book-1, .book-2, .book-3, .book-4, .book-5, .book-6, .book-7, .book-8, .book-9, .book-10, .book-11, .book-12, .book-13, .book-14, .book-15, .book-16, .book-17, .book-18, .book-19, .book-20, .book-21, .book-22, .book-23, .book-24, .book-25, .book-26, .book-27, .book-28, .book-29, .book-30, .book-31, .book-32, .book-33")
                  .mouseenter(function () {
                     $(this).parent(
                        ".book-flip-1, .book-flip-2, .book-flip-3, .book-flip-4, .book-flip-5, .book-flip-6, .book-flip-7, .book-flip-8, .book-flip-9, .book-flip-10, .book-flip-11, .book-flip-12, .book-flip-13, .book-flip-14, .book-flip-15, .book-flip-16, .book-flip-17, .book-flip-18, .book-flip-19, .book-flip-20, .book-flip-21, .book-flip-22, .book-flip-23, .book-flip-24, .book-flip-25, .book-flip-26, .book-flip-27, .book-flip-28, .book-flip-29, .book-flip-30, .book-flip-31, .book-flip-32, .book-flip-33"
                     ).addClass("rotate");
                  });

               $(".book-1, .book-2, .book-3, .book-4, .book-5, .book-6, .book-7, .book-8, .book-9, .book-10, .book-11, .book-12, .book-13, .book-14, .book-15, .book-16, .book-17, .book-18, .book-19, .book-20, .book-21, .book-22, .book-23, .book-24, .book-25, .book-26, .book-27, .book-28, .book-29, .book-30, .book-31, .book-32, .book-33")
                  .mouseleave(function () {
                     $(this).parent(
                        ".book-flip-1, .book-flip-2, .book-flip-3, .book-flip-4, .book-flip-5, .book-flip-6, .book-flip-7, .book-flip-8, .book-flip-9, .book-flip-10, .book-flip-11, .book-flip-12, .book-flip-13, .book-flip-14, .book-flip-15, .book-flip-16, .book-flip-17, .book-flip-18, .book-flip-19, .book-flip-20, .book-flip-21, .book-flip-22, .book-flip-23, .book-flip-24, .book-flip-25, .book-flip-26, .book-flip-27, .book-flip-28, .book-flip-29, .book-flip-30, .book-flip-31, .book-flip-32, .book-flip-33"
                     ).removeClass("rotate");
                  });
            })(jQuery);
         }
      }

      /* ─────────────────────────────────────────
         7. AJAX Form Submissions
      ───────────────────────────────────────── */
      function initAjaxForms() {
         function submitAjaxForm(formId, msgId) {
            if ($(formId).length && $(msgId).length) {
               $(formId).on('submit', function (e) {
                  e.preventDefault();
                  var $form = $(this);
                  var $msg = $(msgId);
                  var btn = $form.find('button[type="submit"]');
                  btn.prop('disabled', true).text('Sending...');
                  $.ajax({
                     url: '<?php echo $prefix; ?>form-handler.php',
                     type: 'POST',
                     data: $form.serialize(),
                     dataType: 'json',
                     success: function (res) {
                        if (res.success) {
                           $msg.css({
                                 'background': '#d4edda',
                                 'color': '#155724',
                                 'border': '1px solid #c3e6cb'
                              })
                              .text(res.message).show();
                           $form[0].reset();
                        } else {
                           $msg.css({
                                 'background': '#f8d7da',
                                 'color': '#721c24',
                                 'border': '1px solid #f5c6cb'
                              })
                              .text(res.message).show();
                           btn.prop('disabled', false).text('Submit');
                        }
                     },
                     error: function () {
                        $msg.css({
                              'background': '#f8d7da',
                              'color': '#721c24',
                              'border': '1px solid #f5c6cb'
                           })
                           .text('An error occurred. Please try again or contact us directly.')
                           .show();
                        btn.prop('disabled', false).text('Submit');
                     }
                  });
               });
            }
         }
         submitAjaxForm('#footer-signup-form', '#footer-form-msg');
         submitAjaxForm('#modal-quote-form', '#modal-form-msg');
         submitAjaxForm('#contact-main-form', '#contact-form-msg');
      }

      /* ─────────────────────────────────────────
         Sab functions call karo
      ───────────────────────────────────────── */
      initFloatButton();
      initModalPopup();
      initCounters();
      initCarousel();
      initSliders();
      initBookFlip();
      initAjaxForms();

   });
</script>