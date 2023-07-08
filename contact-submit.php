<!-- Teo -->

<section class="contact_section layout_padding-bottom">
    <div class="container">
        <div class="heading_container">
            <h2>
                Get In Touch
            </h2>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="form_container">
                    <form id="contactForm" action="index.php" method="POST">
                        <div>
                            <input type="text" name="fullName" placeholder="Full Name" />
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Email" />
                        </div>
                        <div>
                            <input type="text" name="phoneNumber" placeholder="Phone Number" />
                        </div>
                        <div>
                            <textarea name="message" class="message-box" placeholder="Message"></textarea>
                        </div>
                        <div class="btn_box">
                            <button actiontype="submit"
                            style="margin-top:20px; padding: 10px; border-radius: 20px; 
            border: 1px solid #00c6a9;
            background: #00c6a9; cursor: pointer;" >send </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="img-box">
                    <img src="images/contact-img.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $message = $_POST['message'];

    echo "Form submitted successfully!";
}
?>
