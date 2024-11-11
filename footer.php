<!--footer section start -->
<div class="footer_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 col-sm-6">
               <div class="footer_logo">
               <!-- <img src="images/footer-logo.png"> -->
                <h3><b style="color:white;">Web India Group</b></h3>
               </div>
               <p class="dolor_text">Web India Group specializes in creating custom websites that combine innovative design with seamless functionality. We are committed to empowering businesses with responsive, user-friendly web solutions tailored to drive success in the digital world. From concept to launch, our team ensures your online presence makes a lasting impact.</p>
            </div>
            <div class="col-lg-3 col-sm-6">
               <h4 class="address_text">Address</h4>
               <p class="dolor_text">Gurgaon, Haryana</p>
               <a style="color:white;" href="tel:+919625209952">+91 9625209952</a>
               <a href="mailto:mishra29rinki@gmail.com"><p class="dolor_text">mishra29rinki@gmail.com</p></a>
            </div>
            <div class="col-lg-4 col-sm-12">
               <h4 class="address_text">Our Services</h4>
               <ul>
                    <li class="footer_ourservice">Website Design</li>
                    <li class="footer_ourservice">Web Development</li>
                    <li class="footer_ourservice">CRM Development</li>
                    <li class="footer_ourservice">ERP Development</li>
                    <li class="footer_ourservice">Ecommerce Website</li>
                    <li class="footer_ourservice">Logo Design</li>
                    <li class="footer_ourservice">Banner Design</li>
               </ul>
            </div>
         </div>
         <div class="social_icon">
            <ul>
               <li><a href="https://www.facebook.com/share/12AUih8jxm7/"><img src="images/fb-icon.png"></a></li>
               <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
               <li><a href="#"><img src="images/instagram-icon.png"></a></li>
            </ul>
         </div>
      </div>
   </div>
   <!--footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="copyright_text">Copyright 2024 All Right Reserved By <a href="index.php">web india group</a></div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script type="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.0.0-beta.2.4/owl.carousel.min.js"></script>
   <script>
      var $owl = $('.owl-carousel');

      $owl.children().each(function (index) {
         $(this).attr('data-position', index); // NB: .attr() instead of .data()
      });

      $owl.owlCarousel({
         center: true,
         loop: true,
         items: 3,
      });

      $(document).on('click', '.owl-item>div', function () {
         // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.php#to-owl-carousel
         var $speed = 300;  // in ms
         $owl.trigger('to.owl.carousel', [$(this).data('position'), $speed]);
      });

   </script>