<!--  Teo -->

<?php include "./Variables/variables.php" ?>
<section class="team_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2> Our <span> Doctors </span> </h2>
        </div>
        <div class="carousel-wrap">
            <div class="owl-carousel team_carousel">
                <?php
                foreach ($teamMembers as $member) {
                    $name = $member['name'];
                    $designation = $member['designation'];
                    $image = $member['image'];
                }
                ?>
                <div class="item">
                    <div class="box">
                        <div class="img-box">
                            <img src=" <?php echo $image; ?> " alt=" <?php echo $name; ?> " />
                        </div>
                        <div class="detail-box">
                            <h5> <?php echo $name; ?> </h5>
                            <h6> <?php echo $designation; ?> </h6>
                            <div class="social_box">
                                <?php
                                for ($i = 0; $i < sizeof($icons); $i++) {
                                    echo '<a href=""> ' . $icons[$i] . ' </a>';
                                };
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>