<section class="team_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>Doctors</span>
            </h2>
        </div>
        <div class="carousel-wrap">
            <div class="owl-carousel team_carousel">
                <?php
                // array of team members
                $teamMembers = array(
                    array(
                        'name' => 'Hennry',
                        'designation' => 'MBBS',
                        'image' => 'images/team1.jpg',
                    ),
                    array(
                        'name' => 'Jenni',
                        'designation' => 'MBBS',
                        'image' => 'images/team2.jpg',
                    ),
                    array(
                        'name' => 'Morco',
                        'designation' => 'MBBS',
                        'image' => 'images/team3.jpg',
                    )
                );

                foreach ($teamMembers as $member) {
                    $name = $member['name'];
                    $designation = $member['designation'];
                    $image = $member['image'];
                ?>
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" />
                            </div>
                            <div class="detail-box">
                                <h5>
                                    <?php echo $name; ?>
                                </h5>
                                <h6>
                                    <?php echo $designation; ?>
                                </h6>
                                <div class="social_box">
                                    <a href="">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>
