<?php

// ---> function 1

$carousels = [
    [
        'title' =>  ['Mico', 'Mico', 'Mico'],
        'prof'  =>  ['Nurse', 'Hospital', 'Ultrasound'],
        'text'  =>  [
            ' consectetur adipisicing elit. Eius illum, laboriosam
                    when looking at its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters, as opposed to.',
            'when looking at its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters, as opposed to, Lorem ipsum dolor sit
                    amet,
                    consectetur adipisicing elit. Eius illum, laboriosam.',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius illum,
                    laboriosam labore quo reprehenderit tenetur. Inventore, nostrum! Nam obcaecati
                    quo placeat consequatur minima, maiores natus cumque, totam nihil, dignissimos
                    ipsam.'
        ],
        'link'  =>  ['Contact Us', 'Contact Us', 'Contact Us',],
        'img'   =>  ['images/slider-img.jpg', 'images/hospital.jpg', 'images/hospitalpeople.jpg'],
    ]
];

function getCarousels($carousels)
{
    $carouselCount = count($carousels[0]['title']);
    for ($i = 0; $i < $carouselCount; $i++) {
        $carousel = $carousels[0];
        if ($i == 0) {
            $carouselClass = 'carousel-item active';
        } else {
            $carouselClass = 'carousel-item';
        }
        echo '<div class="' . $carouselClass . '">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <div class="play_btn">
                                        <button>
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <h1>' . $carousel['title'][$i] . '<br><span>' . $carousel['prof'][$i] . '</span></h1>
                                    <p>' . $carousel['text'][$i] . '</p>
                                    <a href="./contact.php">' . $carousel['link'][$i] . '</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img class="new_img" src="' . $carousel['img'][$i] . '" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
    }
    return $carousels;
}



// --->> function 2 

$doctorName = ['Steven Moffat', 'Jenny Flint', 'Catrin Stewart', 'Richard E. Grant',];
$departmentName = ['Medical Department', 'Rehabilitation Department', 'Radiology Department', 'Outpatient Department',];

function getCombineLable($names)
{
    foreach ($names as $name) {
        echo '<option value="' . $name . '">' . $name . '</option>';
    }
}



// treatment page function //

$treatments =   [
                'imgsrc' => [
                            '"images/t1.png"', "images/t2.png", "images/t3.png","images/t4.png"
                            ],
                'h4' => [
                        'Nephrologist care', 'Eye Care', 'Pediatrician Clinic', 'Parental Care'
                        ],
                'p' =>  [
                        "alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isn't anything",
                        "alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isn't anything",
                        "alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isn't anything",
                        "alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isn't anything",
                        ],
                'href' => ['','','','']
                ];

function makeTreatments(){
    global $treatments;
    for($i=0; $i<sizeof($treatments); $i++){
        echo    '<div class="col-md-6 col-lg-3">
                    <div class="box ">
                        <div class="img-box">
                           <img src= '.$treatments['imgsrc'][$i].' alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                '.$treatments['h4'][$i].'
                            </h4>
                            <p>
                                '.$treatments['p'][$i].'
                            </p>
                            <a href="'.$treatments['href'][$i].'">
                                Read More
                            </a>
                     </div>
                 </div>
             </div>';
    }
}
