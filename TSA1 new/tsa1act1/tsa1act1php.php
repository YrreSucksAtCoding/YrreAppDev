<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="tsa1cssact1.css">
</head>
<body>
    <div class="container">
        <h1>Student Registration Form</h1>
        <form method="POST" action="">
            <label>Full Name:</label>
            <input type="text" name="fullname" required>

            <label>Student Number:</label>
            <input type="text" name="student_number" required>

            <label>Age:</label>
            <input type="number" name="age" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Course:</label>
            <select name="course" required>
                <option value="">Select Course</option>
                <option value="BS Cybersecurity">BS Cybersecurity</option>
                <option value="BS Information Technology">BS Information Technology</option>
                <option value="BS Computer Science">BS Computer Science</option>
            </select>

            <label>Gender:</label>
            <div class="radio-group">
                <input type="radio" name="gender" value="Male" required> Male
                <input type="radio" name="gender" value="Female"> Female
            </div>

            <label>Skills:</label>
            <div class="checkbox-group">
                <input type="checkbox" name="skills[]" value="HTML"> HTML
                <input type="checkbox" name="skills[]" value="CSS"> CSS
                <input type="checkbox" name="skills[]" value="PHP"> PHP
                <input type="checkbox" name="skills[]" value="JavaScript"> JavaScript
            </div>

            <label>Address:</label>
            <textarea name="address" required></textarea>

            <button type="submit" name="submit">Register</button>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $fullname = $_POST['fullname'];
            $student_number = $_POST['student_number'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            $course = $_POST['course'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];

            if (isset($_POST['skills'])) {
                $skills = implode(", ", $_POST['skills']);
            } else {
                $skills = "No skills selected";
            }

            echo "<div class='output'>";
            echo "<h2>Registration Output</h2>";
            echo "<p><strong>Name:</strong> " . ucwords(strtolower($fullname)) . "</p>";
            echo "<p><strong>Student Number:</strong> " . strtoupper($student_number) . "</p>";
            echo "<p><strong>Age:</strong> " . number_format($age) . "</p>";
            echo "<p><strong>Email:</strong> " . strtolower($email) . "</p>";
            echo "<p><strong>Course:</strong> " . strtoupper($course) . "</p>";
            echo "<p><strong>Gender:</strong> " . $gender . "</p>";
            echo "<p><strong>Skills:</strong> " . $skills . "</p>";
            echo "<p><strong>Address:</strong> " . ucwords(strtolower($address)) . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
 