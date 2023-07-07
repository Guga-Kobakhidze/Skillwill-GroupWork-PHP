<html>

<body style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div class="contact_form-s" style="width: 500px; height: 450px; display: flex; flex-direction: column;
     justify-content: center; align-items: center; text-align: center;
     padding: 40px; box-shadow: 0 0 15px 20px rgba(0, 0, 0, 0.07);">
        <?php

        if ($_GET['name'] && $_GET['number'] && $_GET['text']) {
            echo '<h1> Hello ' . $_GET['name'] . ' <br><br>  Number - ' . $_GET['number'] . ' </h1>';
            echo '<h1> Your reservation has been accepted </h1> ';
            echo '<h1> With DR. ' . $_GET['Doname'] . '<br><br> To ' . $_GET['Dename'] . '</h1>';
        } elseif ($_GET['name'] && $_GET['number']) {
            echo '<h1> Hello ' . $_GET['name'] . '<h1>';
            echo '<h1> You missed the Symptoms, please try again ! </h1> ';
        } elseif ($_GET['name'] && $_GET['text']) {
            echo '<h1> Hello ' . $_GET['name'] . '<h1>';
            echo '<h1> You missed your number, please try again ! </h1> ';
        } elseif ($_GET['text'] && $_GET['number']) {
            echo '<h1> Hello Unknown <h1>';
            echo '<h1> You missed some links, please try again ! </h1> ';
        } else {
            echo '<h1> Hello ' . $_GET['name'] . ' <br> </h1>';
            echo '<h1> You missed the links, Try again ! </h1> ';
        }
        ?>

        <form action="./index.php">
            <button type="submit" style="margin-top:20px; padding: 10px; border-radius: 10px; 
            border: 1px solid #00c6a9;
            background: #00c6a9; cursor: pointer;">
                Go to the main </button>
        </form>

    </div>
</body>

</html>