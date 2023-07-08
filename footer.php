 <!-- Giorgi -->
 <?php include "./Variables/variables.php" ?>


 <section class="info_section ">
     <div class="container">
         <div class="info_top">
             <div class="info_logo">
                 <a href="">
                     <img src="images/logo.png" alt="">
                 </a>
             </div>
             <div class="info_form">
                 <form action="">
                     <input type="email" placeholder="Your email">
                     <button>
                         Subscribe
                     </button>
                 </form>
             </div>
         </div>
         <div class="info_bottom layout_padding2">
             <div class="row info_main_row">
                 <div class="col-md-6 col-lg-3">
                     <h5>
                         Address
                     </h5>
                     <div class="info_contact">
                         <?php
                            $i = 0;

                            while ($i <= sizeof($contactInfo)) {
                                echo '<a href="">
                                ' . $contactInfo['icons'][$i] . '
                                <span>
                                    ' . $contactInfo['span'][$i] . '
                                </span>
                            </a>';
                                $i++;
                            }
                            ?>
                     </div>
                     <div class="social_box">
                         <?php
                            foreach ($socialMediaLinks as $socialLink) {
                                echo '<a href="' . $socialLink['link'] . '"><i class="' . $socialLink['icon'] . '" aria-hidden="true"></i></a>';
                            }
                            ?>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-3">
                     <div class="info_links">
                         <h5>
                             Useful link
                         </h5>
                         <div class="info_links_menu">
                             <?php
                                foreach ($menuItems as $item) {
                                    if ($item == 0) {
                                        $isActive = 'active';
                                    } else {
                                        $isActive = '';
                                    }
                                    echo '<a class=" ' . $isActive . ' " href=" ' . $item['link'] . ' ">
                                     ' . $item['name'] . ' </a>';
                                }
                                ?>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-3">
                     <div class="info_post">
                         <h5>
                             LATEST POSTS
                         </h5>
                         <?php
                            getMergeFooter($footer1, []);
                            ?>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-3">
                     <div class="info_post">
                         <h5>
                             News
                         </h5>
                         <?php
                            getMergeFooter($footer2, []);
                            ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- end info_section -->

 <!-- footer section -->
 <footer class="footer_section">
     <div class="container">
         <p>
             &copy; <span id="displayYear"></span> All Rights Reserved By
             <a href="https://html.design/">Free Html Templates</a>
         </p>
     </div>
 </footer>
 <!-- footer section -->

 <!-- jQery -->
 <script src="js/jquery-3.4.1.min.js"></script>
 <!-- bootstrap js -->
 <script src="js/bootstrap.js"></script>
 <!-- nice select -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
 <!-- owl slider -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 <!-- datepicker -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
 <!-- custom js -->
 <script src="js/custom.js"></script>


 </body>

 </html>