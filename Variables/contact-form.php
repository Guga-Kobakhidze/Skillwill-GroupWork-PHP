 <!-- Luka, Teo, Giorgi  -->

 <body style="display: flex; justify-content: center; align-items: center; height: 100vh;">
     <div class="contact_form-s" style="width: 500px; height: 450px; display: flex; flex-direction: column;
     justify-content: center; align-items: center; text-align: center;
     padding: 40px; box-shadow: 0 0 15px 20px rgba(0, 0, 0, 0.07);">

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
             <button type="submit" style="margin-top:20px; padding: 10px; border-radius: 10px; 
            border: 1px solid #00c6a9;
            background: #00c6a9; cursor: pointer;"> Go to the Contact us </button>
         </form>

     </div>
 </body>

 </html>