<?php include_once "./header.php" ?>

<!-- end header section -->
<?php include "./variables/variables.php" ?>

<!-- slider section -->
<section class="slider_section ">
    <div class="dot_design">
        <img src="images/dots.png" alt="">
    </div>
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            getCarousels($carousels);
            ?>
        </div>
        <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                <img src="images/prev.png" alt="">
            </a>
            <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                <img src="images/next.png" alt="">
            </a>
        </div>
    </div>
</section>
</div>
<!-- end slider section -->

<!-- book section -->
<section class="book_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="./variables/appointment.php" method="GET">
                    <h4>
                        BOOK <span>APPOINTMENT</span>
                    </h4>
                    <div class="form-row ">
                        <div class="form-group col-lg-4">
                            <label for="inputPatientName">Patient Name </label>
                            <input name="name" type="text" class="form-control" id="inputPatientName" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDoctorName">Doctor's Name</label>
                            <select name="Doname" class="form-control wide" id="inputDoctorName">
                                <?php getCombineLable($doctorName) ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDepartmentName">Department's Name</label>
                            <select name="Dename" class="form-control wide" id="inputDepartmentName">
                                <?php getCombineLable($departmentName) ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="form-group col-lg-4">
                            <label for="inputPhone">Phone Number</label>
                            <input name="number" type="number" class="form-control" id="inputPhone"
                                placeholder="XXXXXXXXXX">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputSymptoms">Symptoms</label>
                            <input name="text" type="text" class="form-control" id="inputSymptoms" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDate">Choose Date </label>
                            <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                                <input type="text" class="form-control" readonly>
                                <span class="input-group-addon date_icon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="btn-box">
                        <button type="submit" class="btn ">Submit Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end book section -->

<!-- about section -->
<?php include_once "./indexhtmls.php/about.html" ?>
<!-- end about section -->

<!-- treatment section -->
<?php include_once "./indexhtmls.php/treatmenthtml.php" ?>
<!-- end treatment section -->

<!-- team section -->
<?php include_once "./indexhtmls.php/doctorhtml.php" ?>
<!-- end team section -->

<!-- client section -->
<?php include_once "./indexhtmls.php/testimonialhtml.php" ?>
<!-- end client section -->

<!-- contact section -->
<?php include_once "./indexhtmls.php/contacthtml.php" ?>
<!-- end contact section -->

<!-- footer section -->
<?php include_once "./footer.php" ?>