<!-- Guga -->

<html>
<link rel="stylesheet" href="variables.css">

<body class="variables_body ">
    <div class="contact_form-s">

        <?php
        switch ($_GET) {
            case ($_GET['name'] && $_GET['number'] && $_GET['text']):
                echo '<h1> Hello ' . $_GET['name'] . ' <br><br>  Number - ' . $_GET['number'] . ' </h1>';
                echo '<h1> Your reservation has been accepted </h1> ';
                echo '<h1> With DR. ' . $_GET['Doname'] . '<br><br> To ' . $_GET['Dename'] . '</h1>';
                break;
            case ($_GET['name'] && $_GET['number']):
                echo '<h1> Hello ' . $_GET['name'] . '<h1>';
                echo '<h1> You missed the Symptoms, please try again ! </h1> ';
                break;
            case ($_GET['name'] && $_GET['text']):
                echo '<h1> Hello ' . $_GET['name'] . '<h1>';
                echo '<h1> You missed your number, please try again ! </h1> ';
                break;
            case ($_GET['text'] && $_GET['number']):
                echo '<h1> Hello Unknown <h1>';
                echo '<h1> You missed some links, please try again ! </h1> ';
                break;
            default:
                echo '<h1> Hello ' . $_GET['name'] . ' <br> </h1>';
                echo '<h1> You missed the links, Try again ! </h1> ';
                break;
        }
        ?>

        <form action="../index.php">
            <button type="submit" class="variables_button">
                <h1 class="submit_text"> Go to the main </h1>
            </button>
        </form>

    </div>
</body>

</html>