<?php
// header.php - Premier Author House
$depth = isset($depth) ? $depth : 0;
$prefix = str_repeat('../', $depth);
?>
<header class="header-1">
   <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container px-xxl-5 px-xl-5 px-lg-5">
         <a class="navbar-brand" href="<?php echo $prefix; ?>index.php">
            <img src="<?php echo $prefix; ?>images/logo.png" class="img-fluid" alt="Premier Author House">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
         </button>
         <div class="collapse navbar-collapse navalign" id="navbarSupportedContent">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a aria-current="page" href="<?php echo $prefix; ?>index.php">Home</a>
               </li>
               <li class="nav-item">
                  <a href="<?php echo $prefix; ?>about-us.php">About Us</a>
               </li>
               <li class="nav-item dropdown_list">
                  <a href="<?php echo $prefix; ?>services.php" class="on-desktop">Services <i
                        class="fa fa-angle-down"></i></a>
                  <a href="javascript:void(0);" class="on-mobile">Services <i class="fa fa-angle-down"></i></a>
                  <div class="dropdown_menu">
                     <ul>
                        <li class="hvr-grow tc-image-effect-shine"><a
                              href="<?php echo $prefix; ?>services/professional-ghostwriting.php">Ghostwriting</a></li>
                        <li class="hvr-grow tc-image-effect-shine"><a
                              href="<?php echo $prefix; ?>services/ebook-writing.php">eBook Writing</a></li>
                        <li class="hvr-grow tc-image-effect-shine"><a
                              href="<?php echo $prefix; ?>services/book-editing.php">Book Editing</a></li>
                        <li class="hvr-grow tc-image-effect-shine"><a
                              href="<?php echo $prefix; ?>services/book-cover-design.php">Book Cover Design</a></li>
                        <li class="hvr-grow tc-image-effect-shine"><a
                              href="<?php echo $prefix; ?>services/ebook-cover-design.php">eBook Cover Design</a></li>
                        <li class="hvr-grow tc-image-effect-shine"><a
                              href="<?php echo $prefix; ?>services/book-writing.php">Book Writing</a></li>
                        <li class="hvr-grow tc-image-effect-shine"><a
                              href="<?php echo $prefix; ?>services/book-marketing.php">Book Marketing</a></li>
                        <li class="hvr-grow tc-image-effect-shine"><a
                              href="<?php echo $prefix; ?>services/biography-writing.php">Biography Writing</a></li>
                        <li class="hvr-grow tc-image-effect-shine"><a
                              href="<?php echo $prefix; ?>services/memoir-writing.php">Memoir Writing</a></li>
                        <li class="hvr-grow tc-image-effect-shine"><a
                              href="<?php echo $prefix; ?>services/book-printing.php">Book Printing</a></li>
                        <li class="hvr-grow tc-image-effect-shine"><a
                              href="<?php echo $prefix; ?>services/book-trailer.php">Book Trailer</a></li>
                        <li class="hvr-grow tc-image-effect-shine"><a
                              href="<?php echo $prefix; ?>services/audiobook-publishing.php">Audio Book</a></li>
                        <li class="hvr-grow tc-image-effect-shine"><a
                              href="<?php echo $prefix; ?>services/author-website-design.php">Author Website</a></li>
                        <li class="hvr-grow tc-image-effect-shine"><a
                              href="<?php echo $prefix; ?>services/book-illustration.php">Book Illustration</a></li>
                     </ul>
                  </div>
               </li>
               <li class="nav-item">
                  <a href="<?php echo $prefix; ?>packages.php">Packages</a>
               </li>
               <li class="nav-item">
                  <a href="<?php echo $prefix; ?>blog.php">Blog</a>
               </li>
               <li class="nav-item">
                  <a href="<?php echo $prefix; ?>contact-us.php">Contact Us</a>
               </li>
            </ul>
            <form class="d-flex">
               <button type="button" class="custom-btn btn-9 btn btn-primary" data-bs-toggle="modal"
                  data-bs-target="#myModal">Get a Quote Now <i class="fa fa-angle-right"></i></button>
               <div class="phone">
                  <a href="tel:+15128429394">
                     <div class="icon_phone">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                     </div>
                  </a>
                  <div class="head_phone">
                     <a href="javascript:$zopim.livechat.window.toggle();">
                        <h3>.Live Chat</h3>
                     </a>
                     <a href="tel:+15128429394">
                        <h4>Call Now: (512) 842-9394</h4>
                     </a>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </nav>
</header>