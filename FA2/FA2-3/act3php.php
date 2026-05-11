<!DOCTYPE html>
<html>
<head>
    <title>Activity 3</title>
    <link rel="stylesheet" href="act3css.css">
</head>
<body>
    <!-- ACTIVITY 3 -->
    <div class="activity3">
        <h2>Activity 3: Two-Digit Decimal Combinations</h2>
        <div class="combination-box">
            <?php
            for ($i = 0; $i <= 99; $i++) {
                echo sprintf("%02d", $i);
                if ($i < 99) {
                    echo ", ";
                } else {
                    echo ",";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
 