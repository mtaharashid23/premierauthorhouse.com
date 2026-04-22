<?php
$depth = 0;
$ROOT = str_repeat('../', $depth);
?>
<!DOCTYPE html>
<html lang="en-us">

<head>
   <title>Best Self Publishing Book Company in USA | Premier Author Publishing</title>
   <meta name="keywords" content="">
   <meta name="description"
      content="We take your ideas and turn them into published book at Premier Author House. From editing and ghostwriting to design and marketing, we do it all.">
   <link rel="canonical" href="https://premierauthorhouse.com/" />
   <link rel="alternate" hreflang="en-us" href="https://premierauthorhouse.com/" />
   <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.min.css">

   <link href="css/animate.css" rel="stylesheet" type="text/css">
   <link rel="icon" href="images/favicon.png" type="image/png" sizes="">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
   <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
   <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
   <link rel="stylesheet" type="text/css" href="css/swiper.css" />
   <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
   <link rel="stylesheet" href="css/hover.css">
   <link href="css/custom.min.css" rel="stylesheet" type="text/css">
   <link href="css/cn.css" rel="stylesheet" type="text/css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
   <?php include $ROOT . 'header.php'; ?>
   <main>
      <section class="main-home-banner">
         <div class="container">
            <div class="row home-main-sec">
               <div class="col-md-6">
                  <div class="main-head">
                     <div class="subtitle-img">
                        <img src="images/pen.webp" alt="">
                     </div>
                     <div class="subtitle-head">
                        <h3>Premier Author House </h3>
                     </div>
                  </div>
                  <div class="main-home-cntxt">
                     <h1>Helping <span> Authors </span> Publish with <span> Confidence </span>& <span> Creative
                        </span>Control</h1>
                     <p>Is your fantasy novel ready, but you don’t know how to submit it to the right publisher in the
                        USA? At Premier Author House, we simplify your publishing experience and make it empowering. As
                        one of the most reputable and independent book publishers in the USA, we help new authors and
                        seasoned writers publish their stories on their terms.</p>
                  </div>
                  <div class="main-banner-btns">
                     <div class="getint">
                        <a href="javascript:void(0);" class="custom-btn btn-9 btn btn-primary" data-bs-toggle="modal"
                           data-bs-target="#myModal">Get a Quote Now <i class="fa fa-angle-right"></i></a>
                     </div>
                     <div class="number-btn">
                        <a href="tel: +15128429394">
                           <div class="banner-phone">
                              <!--<a href="tel: +15128429336">-->
                              <div class="icon_phone">
                                 <i class="fa fa-phone" aria-hidden="true"></i>
                              </div>
                        </a>
                        <div class="banner-head_phone">
                           <a href="javascript:$zopim.livechat.window.toggle();">
                              <h2>.Live Chat</h2>
                           </a>
                           <a href="tel: +15128429394">
                              <h4>Call Now: (512) 842-9394</h4>
                           </a>
                        </div>
                     </div>
                     <!--</a>-->
                  </div>
               </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 main-home-form">
               <div class="banner-form-box">
                  <div class="form-box-content">
                     <div class="banner-form">
                        <div class="banner-form-head">
                           <h3 class="form-head">Sign Up Now <span style="color: #3EBFC2;"> </span> </h3>
                        </div>
                        <div class="banner-form-img">
                           <img src="images/book-qoute-img.webp" alt="">
                        </div>
                     </div>
                     <form action="<?php echo $ROOT; ?>form-handler.php" method=POST>
                        <div class="col-sm-12 footerform1">
                           <div class="col-sm-6 form-box-inout">
                              <input type="name" placeholder="Full Name" name="fname" value="" required="required">
                           </div>
                           <div class="col-sm-6 form-box-inout">
                              <input type="email" placeholder="Email Address" name="email" value="" required="required">
                           </div>
                        </div>
                        <div class="col-sm-12 dropdown-box">
                           <div class="col-sm-6 dropdown-boxes">
                              <select name="services" id="services" required="required">
                                 <option value="select-your-service" disabled selected>Select your Service</option>
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
                           <div class="col-sm-6">
                              <input type="tel" placeholder="Phone Number" name="number" value="" required="required">
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <textarea name="msg" value="" placeholder="Brief..." id="" rows="3"></textarea>
                        </div>
                        <div class="col-sm-12">
                           <button type="submit" class="custom-btn btn-9 footer-btn">Sign Up</button>
                        </div>
                        <div class="col-sm-12 radio-box">
                           <input type="radio" name="terms" value="" id="terms" required="required">
                           <label class="terms" for="terms">By checking this box, I consent to receive text messages
                              related to Promotions from Premier Author House. You can reply "STOP" at any time to
                              opt-out. Message and data rates may apply. Message frequency may vary, text HELP for
                              assistance. For more information, please visit our <a
                                 href="https://premierauthorhouse.com/privacy-policy"><span> Privacy Policies</span></a>
                              and <a href="https://premierauthorhouse.com/terms-conditions"><span> SMS Terms and
                                    Conditions</span></a></label>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 client-logos-main">
               <div class="banner-home-img">
                  <img src="images/banner-inner-img.webp" alt="">
               </div>
               <div class="img">
                  <ul class="client-logo-slider">
                     <li>
                        <img src="images/good-firms-logo.webp" alt="" class="img-fluid">
                     </li>
                     <li>
                        <img src="images/clutch-logo.webp" alt="" class="img-fluid">
                     </li>
                     <li>
                        <img src="images/Amazon-Kindle-logo.webp" alt="" class="img-fluid">
                     </li>
                     <li>
                        <a href="" target="_blank"><img src="images/Trustpilot-logo.webp" alt="" class="img-fluid"></a>
                     </li>
                     <li>
                        <img src="images/good-reads.webp" alt="" class="img-fluid">
                     </li>
                     <li>
                        <img src="images/banner-brands-logo-5.webp" alt="" class="img-fluid">
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="inside-banner-content">
                  <h3>Collaborate with <span class="brands-color"> Premier Author House </span> and Engage Readers from
                     Page One. Get Affordable <span class="brands-color"> Book Publishing Services </span>in the USA to
                     Assist You in Achieving Success!</h3>
                  <p>Let's publish your book, and we promise to make it valuable.</p>
               </div>
            </div>
         </div>
         </div>
         </div>
      </section>
      <section class="about-organized">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about-org-box-head">
                     <div class="about-org-pen-img">
                        <img src="images/pen-about.webp" alt="">
                     </div>
                     <div class="about-org-title">
                        <h3>Your Story is your Legacy. </h3>
                     </div>
                  </div>
                  <div class="about-org-content">
                     <div class="about-org-head">
                        <h3>Break Into the Market with a <span class="brands-color"> Self-Help Book Publisher </span> in
                           the USA</h3>
                        <p>It's time to excite, motivate, and inspire your readers with your message. At Premier Author
                           House, we are here for innovative authors like you who are looking for a <a
                              href="https://premierauthorhouse.com/">self-help book publisher in the US</a> who
                           understands top quality. Whether your book is your first or you're already a pro, we have the
                           most affordable book publishing services in the USA customized to bring your publication into
                           reality, but the right way. </p>
                        <p>From manuscript submission in the USA to beautiful book cover designs and the Premier Author
                           marketing strategies for independent authors, we ensure your voice reaches the audience it
                           deserves. </p>
                        <p>Let's turn your self-help manuscript into a successful bestseller.</p>
                     </div>
                  </div>
                  <div class="about-btn-inner">
                     <div class="getint">
                        <a href="javascript:void(0);" class="custom-btn btn-9 btn btn-primary" data-bs-toggle="modal"
                           data-bs-target="#myModal">Get a Quote Now <i class="fa fa-angle-right"></i></a>
                     </div>
                     <div class="number-btn-about">
                        <!--<a href="tel: +15128429336">-->
                        <div class="about-phone">
                           <a href="tel: +15128429394">
                              <div class="about-icon_phone">
                                 <i class="fa fa-phone" aria-hidden="true"></i>
                              </div>
                           </a>
                           <div class="about-head_phone">
                              <a href="javascript:$zopim.livechat.window.toggle();">
                                 <h2>.Live Chat</h2>
                              </a>
                              <a href="tel: +15128429394">
                                 <h4>Call Now: (512) 842-9394</h4>
                              </a>
                           </div>
                        </div>
                        <!--</a>-->
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about-org-lottie">
                     <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
                        type="module"></script>
                     <dotlottie-player src="https://lottie.host/1b94d635-f280-4994-a66a-da1c90a9b321/g7l2MJ3XjV.json"
                        background="transparent" speed="1" style="width: 600px; height: auto;" loop autoplay>
                     </dotlottie-player>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="brands-with-us brands-with-us1 about-sec">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-sm-12 col-md-12 col-lg-11 col-xl-11 col-xxl-11">
                  <div class="row myso">
                     <div class="col-md-6">
                        <div class="about-us-img">
                           <img src="images/about-book-bg.webp" alt="">
                           <img class="about-book" src="images/about-book.webp" alt="">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="sub-head-about">
                           <div class="sub-about-img">
                              <img src="images/pen-about.webp" alt="">
                           </div>
                           <div class="sub-about-title">
                              <h3>About Company</h3>
                           </div>
                        </div>
                        <div class="banner-content2">
                           <div class="desc-about-head">
                              <h3>Leading <span class="brands-color"> eBook Publishing </span>Solutions for <span
                                    class="brands-color"> Independent </span> Authors in the USA</h3>
                              <p>Looking to leave your footprint in the world of digital media? Premier Author House
                                 provides the <a href="https://premierauthorhouse.com/services/ebook-writing"> best
                                    eBook publishing solutions for independent authors</a>, incorporating professional
                                 services and cutting-edge tools to get you ahead. Whether self-publishing your debut
                                 novel or growing your library, we offer book publishing solutions customized to suit
                                 your needs. From manuscript submission in the US to creating attention-grabbing eBook
                                 covers, we make your book stand out on all platforms. </p>
                              <p>We also provide effective book marketing strategies to help you reach the target
                                 audience, build your readership, and realize the success that your book deserves. Allow
                                 us to walk you through every step of the eBook publishing journey, from creation to
                                 promotion.</p>
                           </div>
                        </div>
                        <div class="checklist-box">
                           <!-- <div class="check-list-about full-content">
                     <div class="check-list">
                        <img src="images/check-ico.svg" alt="">
                        <p><strong>Consultation:</strong> We begin by grasping your vision, whether you're an aspiring author or a business professional. Our book publishers explore your goals, audience, and style.</p>
                     </div>
                     <div class="check-list">
                        <img src="images/check-ico.svg" alt="">
                        <p><strong>Research:</strong> Our Premier Author publishing services conduct thorough research to gather insights and ideas that will enrich our understanding regarding your manuscript.</p>
                     </div>
                     <div class="check-list">
                        <img src="images/check-ico.svg" alt="">
                        <p><strong>Planning:</strong> We create a comprehensive plan, including the book's publishing schedule when you receive our amazon book publishing services.</p>
                     </div>
                     <div class="check-list">
                        <img src="images/check-ico.svg" alt="">
                        <p><strong>Publishing:</strong> With your input and our expertise, we begin the professional book publishing process. </p>
                     </div>
                     <div class="check-list">
                        <img src="images/check-ico.svg" alt="">
                        <p><strong>Post-Publishing:</strong> Our professional book publishing company keep tabs on your book, post publishing to meet the highest publishing standards.</p>
                     </div>
                     <div class="check-list">
                        <img src="images/check-ico.svg" alt="">
                        <p><strong>Quality Assurance:</strong> Once your manuscript is published, the quality assurance department of our book publishing company will make sure all the client's requirements are met.</p>
                     </div>
                  </div> -->
                           <!-- <div class="check-list-about">
                     <div class="check-list">
                        <img src="images/check-ico.svg" alt="">
                        <p>A detailed discussion with the clients about the content of their book</p>
                     </div>
                     <div class="check-list">
                        <img src="images/check-ico.svg" alt="">
                        <p>Proofreading, editing, and refining the content multiple times to create a fine-quality output</p>
                     </div>
                     <div class="check-list">
                        <img src="images/check-ico.svg" alt="">
                        <p>Producing 100% unique content with revision facilities</p>
                     </div>
                  </div> -->
                        </div>
                        <div class="about-btn-inner">
                           <div class="getint">
                              <a href="javascript:void(0);" class="custom-btn btn-9 btn btn-primary"
                                 data-bs-toggle="modal" data-bs-target="#myModal">Get a Quote Now <i
                                    class="fa fa-angle-right"></i></a>
                           </div>
                           <div class="number-btn-about">
                              <!--<a href="tel: +15128429336">-->
                              <div class="about-phone">
                                 <a href="tel: +15128429394">
                                    <div class="about-icon_phone">
                                       <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                 </a>
                                 <div class="about-head_phone">
                                    <a href="javascript:$zopim.livechat.window.toggle();">
                                       <h2>.Live Chat</h2>
                                    </a>
                                    <a href="tel: +15128429394">
                                       <h4>Call Now: (512) 842-9394</h4>
                                    </a>
                                 </div>
                              </div>
                              <!--</a>-->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
      </section>
      <section class="our-services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="service-heading">
                     <h3>Services Offered by <span class="service-head"> Premier Author House </span></h3>
                  </div>
                  <div class="service-upper-box sliderserv">
                     <div class="col-sm-3">
                        <div class="service-inner-box1">
                           <div class="service-box">
                              <div class="service-num">
                                 <h3>01</h3>
                              </div>
                              <div class="service-ico">
                                 <img src="images/icons/home-ico-01-min.webp" alt="">
                              </div>
                              <div class="empty-box"></div>
                           </div>
                           <div class="service-head">
                              <h3>Ghostwriting </h3>
                           </div>
                           <div class="service-divider">
                              <div class="divider"></div>
                           </div>
                           <div class="service-desc">
                              <p>Sustain your ideas with our peerless <a
                                    href="https://premierauthorhouse.com/services/professional-ghostwriting">
                                    ghostwriting services</a>. Whether you're writing a novel, memoir, or self-help
                                 guide, our team can write exciting tales bearing your voice and vision so your
                                 heartfelt feelings are transmitted without ever taking up a pen! </p>
                           </div>
                           <div class="service-btn">
                              <a href="https://premierauthorhouse.com/services/professional-ghostwriting">Learn More<i
                                    class="fa fa-plus" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="service-inner-box1">
                           <div class="service-box">
                              <div class="service-num">
                                 <h3>02</h3>
                              </div>
                              <div class="service-ico">
                                 <img src="images/icons/home-ico-02-min.webp" alt="">
                              </div>
                              <div class="empty-box"></div>
                           </div>
                           <div class="service-head">
                              <h3>E-book Writing </h3>
                           </div>
                           <div class="service-divider">
                              <div class="divider"></div>
                           </div>
                           <div class="service-desc">
                              <p>Our <a href="https://premierauthorhouse.com/services/ebook-writing">e-book writing
                                    services</a> transform your narrative into a professionally formatted e-book that
                                 gives readers a great experience on all devices. From idea development to the full
                                 version, we present first-rate e-books in the ocean of competition.</p>
                           </div>
                           <div class="service-btn">
                              <a href="https://premierauthorhouse.com/services/ebook-writing">Learn More<i
                                    class="fa fa-plus" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="service-inner-box1">
                           <div class="service-box">
                              <div class="service-num">
                                 <h3>03</h3>
                              </div>
                              <div class="service-ico">
                                 <img src="images/icons/home-ico-03-min.webp" alt="">
                              </div>
                              <div class="empty-box"></div>
                           </div>
                           <div class="service-head">
                              <h3>Book Editing</h3>
                           </div>
                           <div class="service-divider">
                              <div class="divider"></div>
                           </div>
                           <div class="service-desc">
                              <p>Polish your manuscript to perfection with our <a
                                    href="https://premierauthorhouse.com/services/book-editing"> book editing
                                    services</a>. We provide a comprehensive range from those categories called
                                 developmental or content editing to copyediting, providing a clean manuscript to your
                                 editor. </p>
                           </div>
                           <div class="service-btn">
                              <a href="https://premierauthorhouse.com/services/book-editing">Learn More<i
                                    class="fa fa-plus" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="service-inner-box1">
                           <div class="service-box">
                              <div class="service-num">
                                 <h3>04</h3>
                              </div>
                              <div class="service-ico">
                                 <img src="images/icons/home-ico-04-min.webp" alt="">
                              </div>
                              <div class="empty-box"></div>
                           </div>
                           <div class="service-head">
                              <h3>Book Cover Design</h3>
                           </div>
                           <div class="service-divider">
                              <div class="divider"></div>
                           </div>
                           <div class="service-desc">
                              <p>The arresting <a href="https://premierauthorhouse.com/services/book-cover-design">book
                                    cover design</a> captures the readers' attention. We provide a visually stimulating
                                 cover design reflecting your book's grandeur; those chosen books speak directly to your
                                 audience, whether displayed on a shelf or in digital stores. </p>
                           </div>
                           <div class="service-btn">
                              <a href="https://premierauthorhouse.com/services/book-cover-design">Learn More<i
                                    class="fa fa-plus" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="service-inner-box1">
                           <div class="service-box">
                              <div class="service-num">
                                 <h3>05</h3>
                              </div>
                              <div class="service-ico">
                                 <img src="images/icons/home-ico-05-min.webp" alt="">
                              </div>
                              <div class="empty-box"></div>
                           </div>
                           <div class="service-head">
                              <h3>E-book Cover Design</h3>
                           </div>
                           <div class="service-divider">
                              <div class="divider"></div>
                           </div>
                           <div class="service-desc">
                              <p>This is where a reader's eye first lands, in your enticing <a
                                    href="https://premierauthorhouse.com/services/ebook-cover-design"> e-book cover
                                    design</a>. Our designers are experts at ensuring that the covers are appealing and
                                 echo whatever the audience is contemporary with, translating into extra downloads and
                                 sales.</p>
                           </div>
                           <div class="service-btn">
                              <a href="https://premierauthorhouse.com/services/ebook-cover-design">Learn More<i
                                    class="fa fa-plus" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                     <!-- <div class="col-sm-3">
                     <div class="service-inner-box1">
                        <div class="service-box">
                           <div class="service-num">
                              <h3>06</h3>
                           </div>
                           <div class="service-ico">
                              <img src="images/icons/home-ico-06-min.webp" alt="">
                           </div>
                           <div class="empty-box"></div>
                        </div>
                        <div class="service-head">
                           <h3>Biography Writing</h3>
                        </div>
                        <div class="service-divider">
                           <div class="divider"></div>
                        </div>
                        <div class="service-desc">
                           <p>Share your life's journey and success stories with us. As a professional book writing company, we can transform them into a captivating autobiographical book. </p>
                        </div>
                        <div class="service-btn">
                           <a href="biography-writing-services">Learn More<i class="fa fa-plus" aria-hidden="true"></i></a>
                        </div>
                     </div>
                  </div> -->
                     <div class="col-sm-3">
                        <div class="service-inner-box1">
                           <div class="service-box">
                              <div class="service-num">
                                 <h3>06</h3>
                              </div>
                              <div class="service-ico">
                                 <img src="images/icons/home-ico-07-min.webp" alt="">
                              </div>
                              <div class="empty-box"></div>
                           </div>
                           <div class="service-head">
                              <h3>Book Writing</h3>
                           </div>
                           <div class="service-divider">
                              <div class="divider"></div>
                           </div>
                           <div class="service-desc">
                              <p>Getting ideas turned into a legible book is possible only with those who do <a
                                    href="https://premierauthorhouse.com/services/book-writing"> book writing
                                    services</a>. Besides structure, our crazy bunch of wordsmiths will help you find
                                 all the right places to finish your work, whether it is a fiction piece, a nonfiction
                                 tale, or a highly specialized genre.</p>
                           </div>
                           <div class="service-btn">
                              <a href="https://premierauthorhouse.com/services/book-writing">Learn More<i
                                    class="fa fa-plus" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                     <!-- <div class="col-sm-3">
                     <div class="service-inner-box1">
                        <div class="service-box">
                           <div class="service-num">
                              <h3>07</h3>
                           </div>
                           <div class="service-ico">
                              <img src="images/icons/home-ico-08-min.webp" alt="">
                           </div>
                           <div class="empty-box"></div>
                        </div>
                        <div class="service-head">
                           <h3>EBook Cover Design</h3>
                        </div>
                        <div class="service-divider">
                           <div class="divider"></div>
                        </div>
                        <div class="service-desc">
                           <p>The first impression of a book is based on its visually appealing cover. We collaborate with experienced designers to create an appealing cover that successfully communicates the matter of your story and attracts readers.</p>
                        </div>
                        <div class="service-btn">
                           <a href="services/ebook-cover-design">Learn More<i class="fa fa-plus" aria-hidden="true"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-3">
                     <div class="service-inner-box1">
                        <div class="service-box">
                           <div class="service-num">
                              <h3>08</h3>
                           </div>
                           <div class="service-ico">
                              <img src="images/icons/home-ico-09-min.webp" alt="">
                           </div>
                           <div class="empty-box"></div>
                        </div>
                        <div class="service-head">
                           <h3>Memoir Writing</h3>
                        </div>
                        <div class="service-divider">
                           <div class="divider"></div>
                        </div>
                        <div class="service-desc">
                           <p>Memoir writing should provide a compelling story based on the author's personal experiences. Our memoir editing service is designed to assist authors in telling their stories in a clear and stylish manner. Memoir writing necessitates editors who are familiar with the special subtleties of this genre.</p>
                        </div>
                        <div class="service-btn">
                           <a href="services/memoir-writing">Learn More<i class="fa fa-plus" aria-hidden="true"></i></a>
                        </div>
                     </div>
                  </div> -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="counter">
         <section class="our-satisfied-customer-stats our-satisfied-customer-stats1">
            <div class="container counter-bg-img">
               <div class="row counter-bg-img">
                  <div class="col-sm-12">
                     <div class="our-satisfied-customer-content">
                        <h2>Figures that Speak Volume</h2>
                        <p>We are committed to creating books that exceed expectations while remaining true to modern
                           publishing standards. Our main objective is to ensure readers' pleasure.</p>
                        <div class="our-satisfied-counts numbers">
                           <div class="counter-container">
                              <h2 class="value">672</h2>
                              <span>Projects Completed</span>
                           </div>
                           <div class="counter-container">
                              <h2 class="value">10</h2>
                              <span>Years of Experience</span>
                           </div>
                           <div class="counter-container">
                              <h2 class="value">100</h2>
                              <span>Staff Members</span>
                           </div>
                           <div class="counter-container">
                              <h2 class="value">97</h2>
                              <span>Satisfaction Rate</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </section>
      <section class="our-portfolio">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="port-content">
                     <h2>Our <span> Printed </span>Perfection</h2>
                     <p>We offer a wide variety of book-writing services. Check out our amazing portfolio, which will
                        attract you to work with us.</p>
                  </div>
               </div>
               <div class="col-sm-12 portfolio-box">
                  <div class="flip portslider">
                     <div class="col-sm-3">
                        <div class="perspective-1">
                           <div class="book-flip-1">
                              <div class="book-1"></div>
                              <div class="left-1"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="perspective-2">
                           <div class="book-flip-2">
                              <div class="book-2"></div>
                              <div class="left-2"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="perspective-3">
                           <div class="book-flip-3">
                              <div class="book-3"></div>
                              <div class="left-3"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="perspective-4">
                           <div class="book-flip-4">
                              <div class="book-4"></div>
                              <div class="left-4"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="perspective-5">
                           <div class="book-flip-5">
                              <div class="book-5"></div>
                              <div class="left-5"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="perspective-6">
                           <div class="book-flip-6">
                              <div class="book-6"></div>
                              <div class="left-6"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="perspective-7">
                           <div class="book-flip-7">
                              <div class="book-7"></div>
                              <div class="left-7"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="perspective-9">
                           <div class="book-flip-9">
                              <div class="book-9"></div>
                              <div class="left-9"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="perspective-10">
                           <div class="book-flip-10">
                              <div class="book-10"></div>
                              <div class="left-10"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="perspective-11">
                           <div class="book-flip-11">
                              <div class="book-11"></div>
                              <div class="left-11"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="perspective-12">
                           <div class="book-flip-12">
                              <div class="book-12"></div>
                              <div class="left-12"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="perspective-13">
                           <div class="book-flip-13">
                              <div class="book-13"></div>
                              <div class="left-13"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="perspective-14">
                           <div class="book-flip-14">
                              <div class="book-14"></div>
                              <div class="left-14"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="perspective-15">
                           <div class="book-flip-15">
                              <div class="book-15"></div>
                              <div class="left-15"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="book-qoute">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 qoute-box">
                  <div class="book-qoute-box">
                     <div class="book-content">
                        <h3>Why Wait? Let’s Become the <span class="span-box-css">Best-Selling </span>Author! </h3>
                        <span class="book-qoute-divider">
                           <div class="dividers"></div>
                        </span>
                        <p>Whether you're a new author or an experienced storyteller, explore why we're one of the top
                           book publishers that USA writers rely on to publish their book in the USA with confidence and
                           artistic freedom.</p>
                     </div>
                     <div class="banner-btn1">
                        <div class="number-btn">
                           <a href="tel: +15128429394">
                              <div class="banner-phone">
                                 <div class="icon_phone">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                 </div>
                                 <div class="banner-head_phone">
                                    <h2>Call Now</h2>
                                    <h4>(512) 842-9394</h4>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="getint">
                           <a href="javascript:void(0);" class="custom-btn btn-9 btn btn-primary" data-bs-toggle="modal"
                              data-bs-target="#myModal">Connect Today <i class="fa fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6">
                  <img class="book-qoute-img" src="images/book-qoute-img.webp" alt="">
               </div>
            </div>
         </div>
      </section>
      <section class="doing-things">
         <div class="container">
            <div class="row">
               <div class="col-sm-6">
                  <div class="do-things-head">
                     <h3>Step into the Spotlight with Our Comprehensive <span> Book Publishing Solutions </span></h3>
                     <h2>At Premier Author House, we offer various facilities that seamlessly work together to help
                        guide you from your earliest concept to a published masterpiece. Let us act as the wind beneath
                        your wings, giving your voice courage and making your manuscript real.</h2>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="about-btn-inner">
                     <div class="getint">
                        <a href="javascript:void(0);" class="custom-btn btn-9 btn btn-primary" data-bs-toggle="modal"
                           data-bs-target="#myModal">Get a Quote Now <i class="fa fa-angle-right"></i></a>
                     </div>
                     <div class="number-btn-about">
                        <!--<a href="tel: +15128429336">-->
                        <div class="about-phone"><a href="tel: +15128429394">
                              <div class="about-icon_phone">
                                 <i class="fa fa-phone" aria-hidden="true"></i>
                              </div>
                           </a>
                           <div class="about-head_phone">
                              <a href="javascript:$zopim.livechat.window.toggle();">
                                 <h2>.Live Chat</h2>
                              </a>
                              <a href="tel: +15128429394">
                                 <h4>Call Now: (512) 842-9394</h4>
                              </a>
                           </div>
                        </div>
                        <!--</a>-->
                     </div>
                  </div>
               </div>
            </div>
            <div class="row doing-things-boxes">
               <div class="doing-thing-box-row1">
                  <div class="col-sm-4">
                     <div class="doing-box1">
                        <div class="doing-box-img">
                           <img class="normal" src="images/doing-icon.webp" alt="">
                           <img class="onhover-img" src="images/doing-icon-hover.webp" alt="">
                        </div>
                        <div class="doing-box-content">
                           <h3>Words That Resonate</h3>
                           <p>With our experienced writing and editing services, your story shines through in clarity,
                              impact, and your unique voice. From developmental editing to detailed proofreading, we
                              polish your manuscript to a perfect shine.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="doing-box1">
                        <div class="doing-box-img">
                           <img class="normal" src="images/doing-icon.webp" alt="">
                           <img class="onhover-img" src="images/doing-icon-hover.webp" alt="">
                        </div>
                        <div class="doing-box-content">
                           <h3>Designs That Captivate</h3>
                           <p>First impressions are everlasting, and a mesmerizing book and eBook cover design that
                              speaks the language of your genre will draw in the appropriate audience. Our creative team
                              creates your vision.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="doing-box1">
                        <div class="doing-box-img">
                           <img class="normal" src="images/doing-icon.webp" alt="">
                           <img class="onhover-img" src="images/doing-icon-hover.webp" alt="">
                        </div>
                        <div class="doing-box-content">
                           <h3>eBooks for the Modern Age</h3>
                           <p>Maximize your outreach with virtually created and engaging eBooks. We will be in charge of
                              conversion and layout to provide an uninterrupted reading experience on practically every
                              digital device.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row doing-things-boxes">
               <div class="doing-thing-box-row1">
                  <div class="col-sm-4">
                     <div class="doing-box1">
                        <div class="doing-box-img">
                           <img class="normal" src="images/doing-icon.webp" alt="">
                           <img class="onhover-img" src="images/doing-icon-hover.webp" alt="">
                        </div>
                        <div class="doing-box-content">
                           <h3>Tangible Masterpieces</h3>
                           <p>Hold the satisfaction of seeing and feeling your printed book. In this regard, we offer
                              several options in printing and binding of good quality so that you can proudly present
                              the finished work to anyone.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="doing-box1">
                        <div class="doing-box-img">
                           <img class="normal" src="images/doing-icon.webp" alt="">
                           <img class="onhover-img" src="images/doing-icon-hover.webp" alt="">
                        </div>
                        <div class="doing-box-content">
                           <h3>Marketing That Matters</h3>
                           <p>Custom book marketing would get you onto reader radars and build your author platform. We
                              arm our clients with tools and training to boost visibility and promote sales. Get a
                              partner with our professionals and get the best.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="doing-box1">
                        <div class="doing-box-img">
                           <img class="normal" src="images/doing-icon.webp" alt="">
                           <img class="onhover-img" src="images/doing-icon-hover.webp" alt="">
                        </div>
                        <div class="doing-box-content">
                           <h3>Peace of Mind Publishing</h3>
                           <p>We will guide you through the entire process of copyrights and legal matters, helping you
                              protect your intellectual property and achieve compliance. Learn with us how to publish an
                              eBook in the USA.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="whychooseus">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="chooseus-head">
                     <div class="chooseus-pen-img">
                        <img src="images/pen-about.webp" alt="">
                     </div>
                     <div class="chooseus-title">
                        <h3>Why Choose Us</h3>
                     </div>
                  </div>
                  <div class="chooseus-content">
                     <div class="choose-us-head">
                        <h3>Affordable & Professional <span class="brands-color"> Book Publishing Services </span> in
                           the USA</h3>
                        <p>You don't have to bankrupt yourself to get your book published. We bridge creativity, talent,
                           and cost-effectiveness to provide the most reputable book publishing solutions in the USA. If
                           you're submitting your first manuscript or are a professional writer looking for independent
                           USA book publishers, we facilitate a seamless, insightful, and writer-centric experience.
                           From exquisite book cover design to professional editing and marketing assistance, we assist
                           you in transforming your dream into a beautifully written book that engages readers across
                           the USA. </p>
                        <p>Find out how simple it is to get your book published in the USA with a team as invested in
                           your tale as you are.</p>
                     </div>
                  </div>
                  <div class="about-btn-inner">
                     <div class="getint">
                        <a href="javascript:void(0);" class="custom-btn btn-9 btn btn-primary" data-bs-toggle="modal"
                           data-bs-target="#myModal">Get a Quote Now <i class="fa fa-angle-right"></i></a>
                     </div>
                     <div class="number-btn-about">
                        <!--<a href="tel: +15128429336">-->
                        <div class="about-phone">
                           <a href="tel: +15128429394">
                              <div class="about-icon_phone">
                                 <i class="fa fa-phone" aria-hidden="true"></i>
                              </div>
                           </a>
                           <div class="about-head_phone">
                              <a href="javascript:$zopim.livechat.window.toggle();">
                                 <h2>.Live Chat</h2>
                              </a>
                              <a href="tel: +15128429394">
                                 <h4>Call Now: (512) 842-9394</h4>
                              </a>
                           </div>
                        </div>
                        <!--</a>-->
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="chooseus-lottie">
                     <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
                        type="module"></script>
                     <dotlottie-player src="https://lottie.host/74bf35ff-d951-4ff1-a2e5-5e929f8a57e5/FVOllfZ9b4.json"
                        background="transparent" speed="1" style="width: 600px; height: auto;" loop autoplay>
                     </dotlottie-player>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="tabs-sec">
         <div class="container">
            <div class="row tab-box-bg">
               <div class="col-sm-9">
                  <div class="tab-content-box">
                     <div class="tabs-cont-head">
                        <h3>Your Journey from Writer to Published Author Starts with Our Proven Process</h3>
                     </div>
                     <div class="test-btn-inner">
                        <div class="test-btn">
                           <a href="javascript:void(0);" class="custom-btn btn-9 btn btn-primary" data-bs-toggle="modal"
                              data-bs-target="#myModal">Get a Quote Now <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="number-btn-test">
                           <!--<a href="tel: +15128429336">-->
                           <div class="test-phone1">
                              <a href="tel: +15128429394">
                                 <div class="test-icon_phone1">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                 </div>
                              </a>
                              <div class="test-head_phone1">
                                 <a href="javascript:$zopim.livechat.window  .toggle();">
                                    <h2>.Live Chat</h2>
                                 </a>
                                 <a href="tel: +15128429394">
                                    <h4>Call Now: (512) 842-9394</h4>
                                 </a>
                              </div>
                           </div>
                           <!--</a>-->
                        </div>
                     </div>
                  </div>
                  <div class="tab-inner-box">
                     <div class=" wow fadeInRight animated " data-wow-duration="3s"
                        style="visibility: visible; animation-duration: 3s; animation-name: fadeInRight;">
                        <ul class="nav nav-pills mb-3 d-flex your-story-inner" id="pills-tab" role="tablist">
                           <li class="nav-item mx-2" role="presentation">
                              <button class="nav-link active" id="pills-story-7-tab" data-bs-toggle="pill"
                                 data-bs-target="#pills-story-7" type="button" role="tab" aria-controls="pills-story-7"
                                 aria-selected="true">
                                 <img class="tab-icon-img" src="images/icons/home-ico-010-min.webp"
                                    style="width:75px; height: 75px;" class="img-fluid" alt="Premier Author Writers">
                                 <img class="tab-arrow" src="images/tab-arrow.webp" style="width:75px; height: 75px;"
                                    class="img-fluid" alt="Premier Author Writers">
                              </button>
                           </li>
                           <li class="nav-item mx-2" role="presentation">
                              <button class="nav-link" id="pills-story-8-tab" data-bs-toggle="pill"
                                 data-bs-target="#pills-story-8" type="button" role="tab" aria-controls="pills-story-8"
                                 aria-selected="false">
                                 <img class="tab-icon-img" src="images/icons/home-ico-011-min.webp"
                                    style="width:75px; height: 75px;" class="img-fluid" alt="Premier Author Writers">
                                 <img class="tab-arrow" src="images/tab-arrow.webp" style="width:75px; height:75px;"
                                    class="img-fluid" alt="Premier Author Writers">
                              </button>
                           </li>
                           <li class="nav-item mx-2" role="presentation">
                              <button class="nav-link" id="pills-story-9-tab" data-bs-toggle="pill"
                                 data-bs-target="#pills-story-9" type="button" role="tab" aria-controls="pills-story-9"
                                 aria-selected="false">
                                 <img class="tab-icon-img" src="images/icons/home-ico-012-min.webp"
                                    style="width:75px; height: 75px;" class="img-fluid" alt="Premier Author Writers">
                                 <img class="tab-arrow" src="images/tab-arrow.webp" style="width:75px; height: 75px;"
                                    class="img-fluid" alt="Premier Author Writers">
                              </button>
                           </li>
                           <li class="nav-item mx-2" role="presentation">
                              <button class="nav-link" id="pills-story-10-tab" data-bs-toggle="pill"
                                 data-bs-target="#pills-story-10" type="button" role="tab"
                                 aria-controls="pills-story-10" aria-selected="false">
                                 <img class="tab-icon-img" src="images/icons/home-ico-013-min.webp"
                                    style="width:75px; height: 75px;" class="img-fluid" alt="Premier Author Writers">
                                 <img class="tab-arrow" src="images/tab-arrow.webp" style="width:75px; height: 75px;"
                                    class="img-fluid" alt="Premier Author Writers">
                              </button>
                           </li>
                           <li class="nav-item mx-2" role="presentation">
                              <button class="nav-link" id="pills-story-11-tab" data-bs-toggle="pill"
                                 data-bs-target="#pills-story-11" type="button" role="tab"
                                 aria-controls="pills-story-11" aria-selected="false">
                                 <img class="tab-icon-img" src="images/icons/home-ico-014-min.webp"
                                    style="width:75px; height: 75px;" class="img-fluid" alt="Premier Author Writers">
                                 <img class="tab-arrow" src="images/tab-arrow.webp" style="width:75px; height: 75px;"
                                    class="img-fluid" alt="Premier Author Writers">
                              </button>
                           </li>
                           <li class="nav-item mx-2" role="presentation">
                              <button class="nav-link" id="pills-story-6-tab" data-bs-toggle="pill"
                                 data-bs-target="#pills-story-6" type="button" role="tab" aria-controls="pills-story-6"
                                 aria-selected="false">
                                 <img class="tab-icon-img" src="images/icons/home-ico-015-min.webp"
                                    style="width:75px; height: 75px;" class="img-fluid" alt="Premier Author Writers">
                              </button>
                           </li>
                        </ul>
                        <div class="tab-content your-story-content" id="pills-tabContent">
                           <div class="tab-pane fade show active" id="pills-story-7" role="tabpanel"
                              aria-labelledby="pills-story-7-tab">
                              <div class="row text-start">
                                 <div class="col-md-4 col-sm-12">
                                    <h3><b>Our Expertise</b></h3>
                                 </div>
                                 <div class="col-md-8 col-sm-12">
                                    <p>We believe a successful book results from creative vision and strategic
                                       implementation. Our conscientiously crafted process guarantees your manuscript
                                       benefits from the professional touch it needs at each step, turning your ideas
                                       into a refined and practical book.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-story-8" role="tabpanel"
                              aria-labelledby="pills-story-8-tab">
                              <div class="row text-start">
                                 <div class="col-md-4 col-sm-12">
                                    <h3><b>Collaborative Development</b></h3>
                                 </div>
                                 <div class="col-md-8 col-sm-12">
                                    <p>Your voice matters. We work closely with you to ensure your ideas, tone, and
                                       vision are expressed in every chapter, creating a final product that truly feels
                                       like yours while conforming to industry guidelines.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-story-9" role="tabpanel"
                              aria-labelledby="pills-story-9-tab">
                              <div class="row text-start">
                                 <div class="col-md-4 col-sm-12">
                                    <h3><b>Industry-Standard Editing</b></h3>
                                 </div>
                                 <div class="col-md-8 col-sm-12">
                                    <p>Our expert editors polish your manuscript with fastidious attention to grammar,
                                       format, and readability, getting your message across without sacrificing tone.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-story-10" role="tabpanel"
                              aria-labelledby="pills-story-10-tab">
                              <div class="row text-start">
                                 <div class="col-md-4 col-sm-12">
                                    <h3><b>Polished eBook Design & Formatting</b></h3>
                                 </div>
                                 <div class="col-md-8 col-sm-12">
                                    <p>From typography to design, we make your eBook conform to the particular
                                       requirements of platforms such as Kindle, Apple Books, and Nook, providing a
                                       professional and streamlined reader experience on every device.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-story-11" role="tabpanel"
                              aria-labelledby="pills-story-11-tab">
                              <div class="row text-start">
                                 <div class="col-md-4 col-sm-12">
                                    <h3><b>Platform-Ready Publishing Support</b></h3>
                                 </div>
                                 <div class="col-md-8 col-sm-12">
                                    <p>We take care of the publishing technicalities, publishing your book on prominent
                                       eBook platforms with optimized metadata and book descriptions to increase
                                       visibility and discoverability.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-story-6" role="tabpanel"
                              aria-labelledby="pills-story-6-tab">
                              <div class="row text-start">
                                 <div class="col-md-4 col-sm-12">
                                    <h3><b>Post-Publication Guidance</b></h3>
                                 </div>
                                 <div class="col-md-8 col-sm-12">
                                    <p>Our assistance doesn't end at publication. We offer marketing strategy insights,
                                       reviews, and reader interaction so your eBook takes off and keeps expanding in
                                       terms of reach and sales.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-3">
                  <div class="tab-book-img">
                     <img src="images/tab-sec-book.webp" alt="">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="our-process">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-sm-12 col-md-12 col-lg-11 col-xl-11 col-xxl-11">
                  <div class="row myso">
                     <div class="col-md-6 porcess-img">
                        <div class="porcess-img">
                           <div class="col-sm-6 process-boxes">
                              <div class="process-box">
                                 <div class="process-number">
                                    <h3>01</h3>
                                 </div>
                                 <div class="process-name">
                                    <h3>Competitive Royalties</h3>
                                    <span class="process-divider">
                                       <div class="dividers-process"></div>
                                    </span>
                                 </div>
                                 <div class="process-desc">
                                    <p>Reap some of the most generous royalty percentages in the trade; success gets
                                       shared here. </p>
                                 </div>
                                 <!-- <div class="process-btn-txt">Read More<span class="process-btn-txthover">Once we have gathered all of your information, our team will put together an outline for you. This is the perfect way to make sure that every chapter fits with what's come before and after it in terms of direction.</span></div> -->
                              </div>
                              <div class="process-box">
                                 <div class="process-number">
                                    <h3>02</h3>
                                 </div>
                                 <div class="process-name">
                                    <h3>Clear Communication</h3>
                                    <span class="process-divider">
                                       <div class="dividers-process"></div>
                                    </span>
                                 </div>
                                 <div class="process-desc">
                                    <p>Stay fully informed at each step with uncompromising clarity and prompt
                                       responsiveness. </p>
                                 </div>
                                 <!-- <div class="process-btn-txt">Read More<span class="process-btn-txthover">Every step of the process is completely transparent to you. You will know what your editor, designers, and writers are doing from the start-to-finish so that there can be no surprises when it comes time for publishing.</span></div> -->
                              </div>
                           </div>
                           <div class="col-sm-6 process-boxes">
                              <div class="process-box">
                                 <div class="process-number">
                                    <h3>03</h3>
                                 </div>
                                 <div class="process-name">
                                    <h3>24/7 Author Support</h3>
                                    <span class="process-divider">
                                       <div class="dividers-process"></div>
                                    </span>
                                 </div>
                                 <div class="process-desc">
                                    <p>We're here to assist you every step of the way in staying on task and meeting
                                       deadlines.</p>
                                 </div>
                                 <!-- <div class="process-btn-txt">Read More<span class="process-btn-txthover">Premier Author Writers will help you create a book that is free from errors and poor sentence structures. Our team of experts has rigorous editing on their tasks, making sure to give your content cleanliness while also making it easy for readers.</span></div> -->
                              </div>
                              <div class="process-box">
                                 <div class="process-number">
                                    <h3>04</h3>
                                 </div>
                                 <div class="process-name">
                                    <h3>Industry Insight</h3>
                                    <span class="process-divider">
                                       <div class="dividers-process"></div>
                                    </span>
                                 </div>
                                 <div class="process-desc">
                                    <p>Our team remains at the forefront of industry trends and technologies.</p>
                                 </div>
                                 <!-- <div class="process-btn-txt">Read More<span class="process-btn-txthover">After we've designed a captivating cover page for your book, the last step of our ghostwriting process is to put it out there so everyone can read it. We do this with design skills and make sure that you are able to get access online or in stores. The publishing of your work is an important phase, and we handle this with care.</span></div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 myprocessbox">
                        <div class="sub-head-about">
                           <div class="sub-about-img">
                              <img src="images/pen-about.webp" alt="">
                           </div>
                           <div class="sub-about-title">
                              <h3>Why Choose Us?</h3>
                           </div>
                        </div>
                        <div class="banner-content2">
                           <div class="desc-about-head">
                              <h3>What Makes <span class="brands-color"> Premier Author House </span> the Right Choice
                                 for You</h3>
                              <p>Selecting the most appropriate publishing collaborator can establish your book's
                                 publishing journey. Premier Author House infuses creativity, strategy, and expertise to
                                 generate real and effective results. From manuscript to marketplace, we are with you at
                                 each step. </p>
                              <h3>Get <span class="brands-color">Connected</span>!</h3>
                              <p>Dreaming of having your name in print? Let's do it! Contact our staff and find out how
                                 convenient it is to publish your book with confidence.</p>
                              <!-- <h3>Leading Literary <span class="brands-color"> Agents</span></h3> -->
                              <!-- <p>Our goal is to assist you in locating the ideal fit for your undertaking. We'll put you in touch with agents who are eager to perform at the highest level.</p> -->
                           </div>
                        </div>
                        <div class="about-btn-inner">
                           <div class="getint">
                              <a href="javascript:void(0);" class="custom-btn btn-9 btn btn-primary"
                                 data-bs-toggle="modal" data-bs-target="#myModal">Get a Quote Now <i
                                    class="fa fa-angle-right"></i></a>
                           </div>
                           <div class="number-btn-about">
                              <!--<a href="tel: +15128429336">-->
                              <div class="about-phone"><a href="tel: +15128429394">
                                    <div class="about-icon_phone">
                                       <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                 </a>
                                 <div class="about-head_phone">
                                    <a href="javascript:$zopim.livechat.window.toggle();">
                                       <h2>.Live Chat</h2>
                                    </a>
                                    <a href="tel: +15128429394">
                                       <h4>Call Now: (512) 842-9394</h4>
                                    </a>
                                 </div>
                              </div>
                              <!--</a>-->
                           </div>
                        </div>
                        <div class="inner-arrow">
                           <img src="images/inner-arrow.webp" alt="">
                           <img class="bg-line" src="images/line.webp" alt="">
                        </div>
                     </div>
                  </div>
               </div>
      </section>
      <section class="testimonials">
         <section class="bottom-testimonial">
            <div class="container mytestimonaial">
               <div class="row testi-content">
                  <div class="col-sm-6">
                     <div class="testi-head">
                        <h3>Hear What They <span> Say</span>!</h3>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="about-btn-inner">
                        <div class="getint">
                           <a href="javascript:void(0);" class="custom-btn btn-9 btn btn-primary" data-bs-toggle="modal"
                              data-bs-target="#myModal">Get a Quote Now <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="number-btn-about">
                           <div class="about-phone">
                              <a href="tel: +15128429394">
                                 <div class="about-icon_phone">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                 </div>
                              </a>
                              <div class="about-head_phone">
                                 <a href="javascript:$zopim.livechat.window.toggle();">
                                    <h2>.Live Chat</h2>
                                 </a>
                                 <a href="tel: +15128429394">
                                    <h4>Call Now: (512) 842-9394</h4>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- <div class="row testi-box">
      <div class="col-md-12">
         <div class="testimonal-box testislider">
            <div class="col-sm-3" style="margin-top: 50px;">
               <div class="test-box">
                  <div class="client-img">
                     <img src="images/client-03.webp" alt="">
                  </div>
                  <div class="client-desc">
                     <p>I was surprised by how Premier Author House has helped me, as a novice author, I was taken through every step in the process, even editing, and finished with the final print. It looks amazing!</p>
                  </div>
                  <div class="client-box">
                     <div class="client-name">
                        <h3>Nadia Ellison</h3>
                     </div>
                     <div class="star-rate">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 box-align" >
               <div class="test-box">
                  <div class="client-img">
                     <img src="images/client-01.webp" alt="">
                  </div>
                  <div class="client-desc">
                     <p>I used their ghostwriting service. It was amazing! It felt like they had taken every word out of my mind and changed it for the better. Highly recommended!</p>
                  </div>
                  <div class="client-box">
                     <div class="client-name">
                        <h3>Trent Holloway</h3>
                     </div>
                     <div class="star-rate">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3" style="margin-top: 50px;">
               <div class="test-box">
                  <div class="client-img">
                     <img src="images/client-07.webp" alt="">
                  </div>
                  <div class="client-desc">
                     <p>I wanted professional help without the headache of traditional publishing. Premier Author House helped me publish my fantasy novel and gave me complete control over the creative process.</p>
                  </div>
                  <div class="client-box">
                     <div class="client-name">
                        <h3>Marisol Vega</h3>
                     </div>
                     <div class="star-rate">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="test-box">
                  <div class="client-img">
                     <img src="images/client-04.webp" alt="">
                  </div>
                  <div class="client-desc">
                     <p>Their book cover design service brought my children's book to life! It was bright, fun, and exactly what I envisioned. My readers (and their parents) love it.</p>
                  </div>
                  <div class="client-box">
                     <div class="client-name">
                        <h3>Darius Quinn</h3>
                     </div>
                     <div class="star-rate">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3" style="margin-top: 50px;">
               <div class="test-box">
                  <div class="client-img">
                     <img src="images/client-05.webp" alt="">
                  </div>
                  <div class="client-desc">
                     <p>They were very responsive and super helpful. The only thing that detracts from the five-star overall is that the turnaround was a little longer than I had expected, but it's worth the wait for excellent quality.</p>
                  </div>
                  <div class="client-box">
                     <div class="client-name">
                        <h3>Ayla Montrose</h3>
                     </div>
                     <div class="star-rate">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="test-box">
                  <div class="client-img">
                     <img src="images/client-09.webp" alt="">
                  </div>
                  <div class="client-desc">
                     <p>They are without a doubt cheap, professional, and highly supportive. I published my first eBook through them, and it was a wonderful experience. They even helped with some marketing tips! </p>
                  </div>
                  <div class="client-box">
                     <div class="client-name">
                        <h3>Keon Rivers</h3>
                     </div>
                     <div class="star-rate">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> -->
               <div class="row">
                  <div class="col-sm-12">
                     <div class="trustimg">
                        <a target="_blank" href="">
                           <img src="images/390-block.png" alt="" srcset=""></a>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="trustreviewbox"><a target="_blank" href="">
                           <img src="images/review1.jpg" alt="" srcset="">
                        </a></div>
                  </div>
                  <div class="col-sm-4">
                     <div class="trustreviewbox"><a target="_blank" href="">
                           <img src="images/review2.jpg" alt="" srcset="">
                        </a></div>
                  </div>
                  <div class="col-sm-4">
                     <div class="trustreviewbox"><a target="_blank" href="">
                           <img src="images/review3.jpg" alt="" srcset="">
                        </a></div>
                  </div>
               </div>
            </div>
         </section>
      </section>
      <section class=" frequently-asked-questions">
         <div class="frequently-heading">
            <h2>Frequently <span>Asked </span> Questions</h2>
            <div class="dividers-faq"><span class=divider-faq></span></div>
            <p>Here is a list of frequently asked questions about our book-writing service.</p>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="accordion" id="accordionExample3">
                     <div class="half-blk">
                        <div class="accordion-item">
                           <h3 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How do I
                                 submit my manuscript for publication? </button>
                           </h3>
                           <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                              data-bs-parent="#accordionExample3">
                              <div class="accordion-body">You can visit our website and fill out the manuscript
                                 submission form to submit the manuscript. After your submission, our team will review
                                 your manuscript and get back to you with the following steps, such as editing, cover
                                 design, and publishing options.</div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h3 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What
                                 Types of Books Does Your Publishing House Publish? </button>
                           </h3>
                           <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                              data-bs-parent="#accordionExample3">
                              <div class="accordion-body">It is a wide-ranging publishing house that deals in various
                                 genres, such as fiction and nonfiction, memoirs, self-help, children's books, fantasy,
                                 etc. Whether you are an expert or a newbie in the field, we cater to publishing
                                 services for all varieties of books.</div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h3 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Do
                                 you offer e-book publishing services? </button>
                           </h3>
                           <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                              data-bs-parent="#accordionExample3">
                              <div class="accordion-body">Yes! eBook publishing services are offered from head to toe to
                                 distribute the book worldwide. Format and design, major digital distribution channels,
                                 and portals of well-known sites like Amazon, Barnes & Noble, etc., are included.</div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h3 class="accordion-header" id="headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                 How Much Does It Cost to Publish a Book with You? </button>
                           </h3>
                           <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                              data-bs-parent="#accordionExample3">
                              <div class="accordion-body">Our packages are flexible and economical, so we offer
                                 necessary services according to a person's budget. The amount varies depending on the
                                 services of editing, book cover design, and marketing. Contact us for a free
                                 consultation and detailed quote.</div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h3 class="accordion-header" id="headingFive">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                 Will There Be an Option for Help with Marketing Your Book After It Is Published?
                              </button>
                           </h3>
                           <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                              data-bs-parent="#accordionExample3">
                              <div class="accordion-body">
                                 Certainly! Full book marketing strategies include print and digital steps such as
                                 social media, email marketing, public press releases, and many more. This ensures your
                                 book reaches its intended audiences while differentiating in the marketplace.
                              </div>
                           </div>
                        </div>
                        <!-- <div class="accordion-item">
                  <h3 class="accordion-header" id="headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Do How long will it take to complete the book and produce a quality book?</button>
                  </h3>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample3">
                      <div class="accordion-body">
                      The deadline of the client varies based on their instructions. However, we usually take 8 to 12 weeks to complete a book for our customers. 
                  </div>
                  </div>
                  </div> -->
                        <!-- <div class="accordion-item">
                  <h3 class="accordion-header" id="headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Can I ask for a refund or file a refund if I am not satisfied with the project?</button>
                  </h3>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample3">
                      <div class="accordion-body">
                      Generally, refunds usually don't happen in most scenarios, but if you are not satisfied with the services, then you can ask for a refund under certain conditions that are stated in our terms of the agreement. 
                  </div>
                  </div>
                  </div> -->
                        <!-- <div class="accordion-item">
                  <h3 class="accordion-header" id="headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Can I modify the content provided by you?</button>
                  </h3>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample3">
                      <div class="accordion-body">
                      The content provided by us is your property, and you have all the autonomy and rights of that project. 
                  </div>
                  </div>
                  </div> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>
   <?php include $ROOT . 'footer.php'; ?>
</body>

</html>