 <!-- Luka -->
<?php include_once "./header.php" ?>
<?php include "./variables/functions.php" ?>

 <section class="treatment_section layout_padding">
     <div class="side_img">
         <img src="images/treatment-side-img.jpg" alt="">
     </div>
     <div class="container">
         <div class="heading_container heading_center">
             <h2>
                 Hospital <span>Treatment</span>
             </h2>
         </div>
         <div class="row">
            <?php
            makeTreatments();
            ?>
         </div>
     </div>
 </section>

 <?php include_once "./footer.php" ?>