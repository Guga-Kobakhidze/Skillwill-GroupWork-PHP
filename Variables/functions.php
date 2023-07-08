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


// ---> function 3 

$testimonialcarousel= [
    [ 
        'main-title' => ' Morijorch' ,
        'title' => 'Default model text',
        'text' => 'editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will
                   uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their
                   default model text, and a search for lorem ipsum will uncover many web sites still in
                   their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search
                   for lorem ipsum will uncover many web sites still in their infancy. Various' ,
        
    ],
    [ 
        'main-title' => 'Rochak' ,
        'title' => 'Default model text',
        'text' => 'Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem
        ipsum will uncover many web sites still in their infancy. Variouseditors now use Lorem
        Ipsum as their default model text, and a search for lorem ipsum will uncover many web
        sites still in their infancy. editors now use Lorem Ipsum as their default model text, and
        a
        search for lorem ipsum will uncover many web sites still in their infancy.' ,
        
    ],
    [ 
        'main-title' => 'Brad Johns' ,
        'title' => 'Default model text',
        'text' => 'Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem
        ipsum will uncover many web sites still in their infancy, editors now use Lorem Ipsum as
        their default model text, and a search for lorem ipsum will uncover many web sites still
        in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a
        search for lorem ipsum will uncover many web sites still in their infancy. Various' ,
        
    ],
];
 function getTestimonial ($testimonialcarousel) {
    for ($i=0; $i< sizeof($testimonialcarousel); $i++) 
     {
     if ($i == 0) {
     $carouselClass = 'carousel-item active';
     } else {
     $carouselClass = 'carousel-item';
     }
     echo '<div class="'.$carouselClass.'">
     <div class="box">
     <div class="client_info">
     <div class="client_name">
     <h5>
     '. $testimonialcarousel[$i]['main-title'].'
     </h5>
     <h6>
     '. $testimonialcarousel[$i]['title'].'
     </h6>
     </div>
     <i class="fa fa-quote-left" aria-hidden="true"></i>
     </div>
     <p>
     '. $testimonialcarousel[$i]['text'].'
     </p>
     </div>
     </div>';
    }
    return $testimonialcarousel ;
 } 


 
 /* function 4 */ 


 $footer1 = [
    [
       
        'image' => 'images/post1.jpg',
        'text' =>  'Normal distribution',
    ],
    [
       
        'image' => 'images/post2.jpg',
        'text' =>  'Normal distribution',
    ],
    
];

$footer2 = [
    [
       
        'image' => 'images/post3.jpg',
        'text' =>  'Normal distribution',
    ],
    [
       
        'image' => 'images/post4.png',
        'text' =>  'Normal distribution',
    ],
    
];
function getMergeFooter($footer1, $footer2) {
    $mergeFooter = array_merge($footer1, $footer2);
     for ($i = 0; $i < sizeof($mergeFooter); $i++ ) {
        echo ' <div class="post_box">
        <div class="img-box">
            <img src=" ' . $mergeFooter[$i]['image'] . ' " alt="">
        </div>
        <p>
        ' . $mergeFooter[$i]['text'] . ' 
        </p>
    </div>';
    } return $mergeFooter;
}
;



