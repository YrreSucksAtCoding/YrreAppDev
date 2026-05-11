<?php
$firstname = "Yrre";
$lastname = "Suguitan";
$course = "BS Cybersecurity";
$school = "FEU TECH";
$about = "I am a cybersecurity student passionate about web development and digital security.";
$skills = [
    "HTML",
    "CSS",
    "JavaScript",
    "PHP",
    "C++",
    "Python"
];
$email = "yrre@example.com";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1><?php echo htmlspecialchars($firstname . " " . $lastname, ENT_QUOTES, 'UTF-8'); ?></h1>
        <p class="course"><?php echo htmlspecialchars($course, ENT_QUOTES, 'UTF-8'); ?></p>

        <img src="images/profile.jpg" alt="Profile Picture" class="profile-pic">

        <section>
            <h2>About Me</h2>
            <p><?php echo htmlspecialchars($about, ENT_QUOTES, 'UTF-8'); ?></p>
        </section>

        <section>
            <h2>Education</h2>
            <p><?php echo htmlspecialchars($course . " - " . $school, ENT_QUOTES, 'UTF-8'); ?></p>
        </section>

        <section>
            <h2>Skills</h2>
            <ul>
                <?php foreach ($skills as $skill) : ?>
                    <li><?php echo htmlspecialchars($skill, ENT_QUOTES, 'UTF-8'); ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section>
            <h2>Contact</h2>
            <p>Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></p>
        </section>

        <button onclick="showMessage()">Click Me</button>
    </div>

    <script src="js/main.js"></script>
</body>
</html>
 