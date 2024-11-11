<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>About</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <?php include 'header.php'?>
</head>

<body>

   <!-- about section start -->
   <div class="about_section layout_padding padding_top_90">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h1 class="about_taital">About Softwares</h1>
               <p class="about_text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in
                  a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                  Latin professor at Hampden</p>
               <div class="read_bt"><a href="#">Read More</a></div>
            </div>
            <div class="col-md-6">
               <div><img src="images/img-1.png" class="image_1"></div>
            </div>
         </div>
      </div>
   </div>
   <!--about section end -->
   <!--footer section start -->
   <div class="footer_section layout_padding margin_top_80">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 col-sm-6">
               <div class="footer_logo"><img src="images/footer-logo.png"></div>
               <p class="dolor_text">There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or </p>
            </div>
            <div class="col-lg-3 col-sm-6">
               <h4 class="address_text">Adderes</h4>
               <p class="dolor_text">passages of Lorem Ipsum available, but the majority have</p>
               <p class="dolor_text">(+71) 9876543210</p>
               <p class="dolor_text">demo@gmail.com</p>
            </div>
            <div class="col-lg-4 col-sm-12">
               <h4 class="address_text">Newsletter</h4>
               <input type="text" class="mail_text" placeholder="Enter your email" name="Enter your email">
               <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            </div>
         </div>
         <div class="social_icon">
            <ul>
               <li><a href="#"><img src="images/fb-icon.png"></a></li>
               <li><a href="#"><img src="images/twitter-icon.png"></a></li>
               <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
               <li><a href="#"><img src="images/instagram-icon.png"></a></li>
            </ul>
         </div>
      </div>
   </div>
   <!--footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="copyright_text">Copyright 2019 All Right Reserved By <a href="https://html.design">Free html
            Templates</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></div>
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
         // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.html#to-owl-carousel
         var $speed = 300;  // in ms
         $owl.trigger('to.owl.carousel', [$(this).data('position'), $speed]);
      });

   </script>
</body>

</html>