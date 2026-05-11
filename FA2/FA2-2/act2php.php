<!DOCTYPE html>
<html>
<head>
    <title>Activity 2 - Grade Ranking</title>
    <link rel="stylesheet" href="act2css.css">
</head>
<body>
    <!-- ACTIVITY 2 -->
    <div class="activity2">
        <?php
        $name = "Yrre Sylvestre M. Suguitan";
        $grade = 57;
        $happy = "https://cdn-icons-png.flaticon.com/512/742/742751.png";
        $neutral = "https://cdn-icons-png.flaticon.com/512/742/742774.png";
        $sad = "https://cdn-useast1.kapwing.com/static/templates/crying-cat-meme-template-thumbnail-4e806a85.webp";

        if ($grade >= 93) {
            $rank = "A";
            $picture = $happy;
        } elseif ($grade >= 90) {
            $rank = "A-";
            $picture = $happy;
        } elseif ($grade >= 87) {
            $rank = "B+";
            $picture = $happy;
        } elseif ($grade >= 83) {
            $rank = "B";
            $picture = $happy;
        } elseif ($grade >= 80) {
            $rank = "B-";
            $picture = $happy;
        } elseif ($grade >= 77) {
            $rank = "C+";
            $picture = $neutral;
        } elseif ($grade >= 73) {
            $rank = "C";
            $picture = $neutral;
        } elseif ($grade >= 70) {
            $rank = "C-";
            $picture = $neutral;
        } elseif ($grade >= 67) {
            $rank = "D+";
            $picture = $neutral;
        } elseif ($grade >= 63) {
            $rank = "D";
            $picture = $neutral;
        } elseif ($grade >= 60) {
            $rank = "D-";
            $picture = $neutral;
        } else if ($grade <= 60) {
            $rank = "F";
            $picture = $sad;
        }
        ?>
        <h2>Activity 2: Grade Ranking Program</h2>
        <div class="sample-box">
            <div class="name-card">
                Name: <?php echo $name; ?>
            </div>
            <div class="bottom-row">
                <div class="rank-card">
                    <p>Rank:</p>
                    <span><?php echo $rank; ?></span>
                </div>
                <div class="grade-card">
                    <p>Grade:</p>
                    <span><?php echo $grade; ?></span>
                </div>
                <div class="picture-card">
                    <img src="<?php echo $picture; ?>" alt="Grade Picture">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
</html>
 