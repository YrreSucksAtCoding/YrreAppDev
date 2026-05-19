<?php require("data.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="resume-table">

    <table>
        <tr>
            <td class="photo-box">
                <img src="profilepicyere.jpg" alt="Profile Picture">
            </td>

            <td class="info-box">
                <h2><?php echo $firstname . " " . $lastname; ?></h2>
                <p>Personal Information</p>
            </td>
        </tr>
    </table>

    <div class="nav">
        <a href="career.php">• Career Objective</a>
        <a href="personal.php">• Personal Information page</a>
        <a href="education.php">• Educational Attainment page</a>
        <a href="skills.php">• Skills page</a>
        <a href="affiliation.php">• Affiliation page</a>
        <a href="experience.php">• Work Experience Page</a>
    </div>