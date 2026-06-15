<?php

session_start();

if (isset($_POST['submit'])) {
    $_SESSION['color1'] = $_POST['color1'];
    $_SESSION['color2'] = $_POST['color2'];
    $_SESSION['color3'] = $_POST['color3'];
    $_SESSION['color4'] = $_POST['color4'];
    $_SESSION['color5'] = $_POST['color5'];
    header("Location: ResultColors.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Favorite Colors</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
            }

            input {
                width: 200px;
                padding: 8px;
                margin: 5px;
                text-align: center;
                font-weight: bold;
            }
        </style>
        <script>
            function changeColor(input) {
                input.style.color = input.value;
            }
        </script>
    </head>
    <body>
        <h2>Enter Your Favorite Colors</h2>
        <form method="post">
            <p>
                <label>Favorite Color 1:</label>
                <input type="text" name="color1" onkeyup="changeColor(this)">
            </p>

            <p>
                <label>Favorite Color 2:</label>
                <input type="text" name="color2" onkeyup="changeColor(this)">
            </p>

            <p>
                <label>Favorite Color 3:</label>
                <input type="text" name="color3" onkeyup="changeColor(this)">
            </p>

            <p>
                <label>Favorite Color 4:</label>
                <input type="text" name="color4" onkeyup="changeColor(this)">
            </p>

            <p>
                <label>Favorite Color 5:</label>
                <input type="text" name="color5" onkeyup="changeColor(this)">
            </p>

            <p>
                <input type="submit" name="submit" value="Send Colors">
            </p>
        </form>
    </body>
</html>
 