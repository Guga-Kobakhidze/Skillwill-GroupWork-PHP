 <!-- Luka, Teo, Giorgi  -->


 <html>
 <link rel="stylesheet" href="variables.css">

 <body class="variables_body ">
     <div class="contact_form-s">

         <?php
            if ($_GET['FullName'] && $_GET['Email'] && $_GET['PhoneNumber'] && $_GET['Message']) {
                echo '<h1> Hello ' . $_GET['FullName'];
                echo '<h1> Your form is submetted </h1> ';
            } else {
                echo '<h1> Hello ' . $_GET['FullName'];
                echo '<h1> Please fill all of the form </h1> ';
            }
            ?>

         <form action="../contact.php">
             <button type="submit" class="variables_button">
                 <h1 class="submit_text"> Go to the Contact us </h1>
             </button>
         </form>

     </div>
 </body>

 </html>