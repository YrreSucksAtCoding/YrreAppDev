<?php

session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Result Colors</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
            }

            .color-box {
                font-size: 25px;
                font-weight: bold;
                margin: 15px;
            }
        </style>
    </head>
    <body>
        <h2>My Favorite Colors</h2>
        <?php

        for ($i = 1; $i <= 5; $i++) {
            $color = $_SESSION["color$i"] ?? '';
            echo "<div class='color-box' style='color:$color'>My Favorite Color $i: $color</div>";
        }

        ?>
    </body>
</html>
 