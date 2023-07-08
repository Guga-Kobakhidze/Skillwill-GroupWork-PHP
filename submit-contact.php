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
                    <form id="contactForm" action="" method="POST">
                        <div>
                            <input type="text" id="fullName" placeholder="Full Name" />
                        </div>
                        <div>
                            <input type="email" id="email" placeholder="Email" />
                        </div>
                        <div>
                            <input type="text" id="phoneNumber" placeholder="Phone Number" />
                        </div>
                        <div>
                            <textarea id="message" class="message-box" placeholder="Message"></textarea>
                        </div>
                        <div class="btn_box">
                            <button type="submit" id="submitButton">SEND</button>
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

<script>
    // Function to handle form submission
    function submitForm(event) {
        event.preventDefault(); 

        // Get form values
        var fullName = document.getElementById('fullName').value;
        var email = document.getElementById('email').value;
        var phoneNumber = document.getElementById('phoneNumber').value;
        var message = document.getElementById('message').value;

        document.getElementById('contactForm').reset();

        alert('Form submitted successfully!');
    }

    document.getElementById('submitButton').addEventListener('click', submitForm);
</script>
