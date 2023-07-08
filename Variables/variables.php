<?php

/// --- Teo

$teamMembers = [
    [
        'name' => 'Hennry',
        'designation' => 'MBBS',
        'image' => 'images/team1.jpg',
    ],
    [
        'name' => 'Jenni',
        'designation' => 'MBBS',
        'image' => 'images/team2.jpg',
    ],
    [
        'name' => 'Morco',
        'designation' => 'MBBS',
        'image' => 'images/team3.jpg',
    ],
];


$icons = [
    '<i class="fa fa-facebook" aria-hidden="true"></i>', '<i class="fa fa-twitter" aria-hidden="true"></i>',
    '<i class="fa fa-linkedin" aria-hidden="true"></i>', '<i class="fa fa-instagram" aria-hidden="true"></i>',
];

    $menuItems = [
        ["name" => "Home", "link" => "index.php"],
        ["name" => "About", "link" => "about.php"],
        ["name" => "Treatment", "link" => "treatment.php"],
        ["name" => "Doctors", "link" => "doctor.php"],
        ["name" => "Testimonial", "link" => "testimonial.php"],
        ["name" => "Contact Us", "link" => "contact.php"]
    ];

    foreach ($menuItems as $item) {
        $isActive = isCurrentPage($item['link']) ? 'active' : '';
        echo '<a href="' . $item['link'] . '" class="' . $isActive . '">' . $item['name'] . '</a>';
    }

    $socialMediaLinks = [
        ["icon" => "fa fa-facebook", "link" => "https://www.facebook.com/"],
        ["icon" => "fa fa-twitter", "link" => "https://www.twitter.com/"],
        ["icon" => "fa fa-linkedin", "link" => "https://www.linkedin.com/"],
        ["icon" => "fa fa-instagram", "link" => "https://www.instagram.com/"]
    ];

    foreach ($socialMediaLinks as $socialLink) {
        echo '<a href="' . $socialLink['link'] . '"><i class="' . $socialLink['icon'] . '" aria-hidden="true"></i></a>';
    }

    ?>


