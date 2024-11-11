<?php 
// Start session
// session_start();
include 'email.php';
?>
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
   <title>Softwere</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <?php include 'header.php'?>

   <style>
      .alert {
    padding: 7px;
    margin-top: -65px;
    background-color: #4da451b5;
    color: white;
    border-radius: 5px;
    font-size: 17px;
}

.alert.error {
    background-color: #f44336;  /* Red for error */
}

   </style>
</head>

<body>

   <!-- about section start -->
   <div class="about_section layout_padding" id="about">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h1 class="about_taital">About Web India Group</h1>
               <p class="about_text">Welcome to Web India Group – your partner for comprehensive digital solutions. We are a dedicated team of professionals specializing in Website Design, Web Development, CRM and ERP Development, E-commerce Websites, Logo Design, and Banner Design. Our mission is to empower businesses with tailored, high-quality web services that drive growth and success.</p>
               <p class="about_text">
               Whether you need a responsive, beautifully designed website, robust e-commerce platform, or custom-built CRM/ERP solutions, we bring expertise and innovation to every project. We ensure a seamless user experience, striking visuals, and powerful functionality that set your business apart in the digital landscape. At Web India Group, we turn your vision into reality, creating solutions that meet your unique needs and drive measurable results.
               </p>
               <!-- <div class="read_bt"><a href="#">Read More</a></div> -->
            </div>
            <div class="col-md-6">
               <div><img src="images/img-1.png" class="image_1"></div>
            </div>
         </div>
      </div>
   </div>
   <!--about section end -->
   <!--services section start -->
   <div class="services_section layout_padding" id="services">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h1 class="services_taital">What We Do </h1>
               <div class="image_2"><img src="images/img-2.png"></div>
            </div>
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">Website Design & Development</h1>
                  <p class="dummy_text">Crafting visually appealing, responsive websites with intuitive user interfaces and seamless navigation, tailored to elevate your brand and deliver exceptional digital experiences for your audience.</p>
               </div>
               <!-- <div class="readmore_bt"><a href="#">Read More</a></div> -->
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="image_2"><img src="images/img-3.png"></div>
            </div>
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">CRM & ERP Solutions</h1>
                  <p class="dummy_text">Building custom CRM and ERP systems that streamline business operations, enhance customer engagement, boost productivity, and drive data-driven decision-making across your organization.</p>
               </div>
               <!-- <div class="readmore_bt"><a href="#">Read More</a></div> -->
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="image_2"><img src="images/img-4.png"></div>
            </div>
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">E-commerce Development</h1>
                  <p class="dummy_text">Creating secure, scalable e-commerce platforms with user-friendly interfaces, efficient payment integration, and features to increase online sales, customer satisfaction, and business growth.</p>
               </div>
               <!-- <div class="readmore_bt"><a href="#">Read More</a></div> -->
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="image_2"><img src="images/img-5.png"></div>
            </div>
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">Branding & Design</h1>
                  <p class="dummy_text">Designing impactful logos, banners, and brand assets that reflect your identity, captivate audiences, and establish a strong, memorable market presence across digital channels.</p>
               </div>
               <!-- <div class="readmore_bt"><a href="#">Read More</a></div> -->
            </div>
         </div>
      </div>
   </div>
   <!--services section end -->
   <!--works section start -->
   <div class="works_section layout_padding">
      <div class="container">
         <h1 class="work_taital">How It Works</h1>
         <div class="works_section_2 layout_padding">
            <div class="row">
               <div class="col-sm-4">
                  <h3 class="fully_text">Consultation & Discovery</h3>
                  <p class="lorem_text">We begin by understanding your business needs, goals, and target audience. Through in-depth consultation and research, we identify key project requirements to craft customized solutions that align with your vision.</p>
               </div>
               <div class="col-sm-4">
                  <h3 class="fully_text">Design & Development</h3>
                  <p class="lorem_text">Our expert team creates visually striking designs and develops robust, user-friendly platforms. Every step is tailored to ensure seamless functionality, intuitive navigation, and an engaging digital experience that captures your brand essence.</p>
               </div>
               <div class="col-sm-4">
                  <h3 class="fully_text">Launch & Support</h3>
                  <p class="lorem_text">Once tested and refined, we launch your project with precision. Post-launch, we offer ongoing support and updates to ensure your web solutions continue to perform and evolve as your business grows.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--works section end -->
   <!--contact section start -->
   <div class="contact_section layout_padding" id="contact">
      <div class="container">
         <h1 class="work_taital">Get In Touch</h1>
      </div>
   </div>
   <div class="contact_section_2">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 padding_0">
               <div><img src="images/img-10.png" class="image_10"></div>
            </div>
            <div class="col-md-6">
               <div class="email_text">
                  <form action="email.php" method="post" onsubmit="return validateForm()">
                     <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Name" name="Name">
                     </div>
                     <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Email" name="Email">
                     </div>
                     <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Phone Numbar" name="Phone">
                     </div>
                     <div class="form-group">
                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                     </div>
                     <div class="send_btn">
                        <button type="submit">SEND</button>
                     </div>
                     
                  </form>
                  <!-- Display the session message if set -->
                  <?php if (isset($_SESSION['message'])): ?>
                        <div class="alert">
                            <?php 
                                // Display the message from session
                                echo $_SESSION['message']; 
                                // Clear the session message after displaying it
                                unset($_SESSION['message']);
                            ?>
                        </div>
                    <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--contact section end -->
   <?php include 'footer.php'?>
</body>
<script>
function validateForm() {
    // Get form values
    const email = document.querySelector('[name="Email"]').value;
    const phone = document.querySelector('[name="Phone"]').value;

    // Email validation using regex
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Phone number validation (10 digits)
    if (!/^[987]\d{9}$/.test(phone)) {
        alert("Please enter a valid 10-digit phone number.");
        return false;
    }
   
    // All checks passed
    return true;
}
</script>

</html>