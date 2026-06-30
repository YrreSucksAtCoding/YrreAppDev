<?php
$result = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["first_name"];
    $middleName = $_POST["middle_name"];
    $lastName = $_POST["last_name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];
    $birthday = $_POST["birthday"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];

    if ($password != $confirmPassword) {
        $error = "Password and confirm password are not the same.";
    } else {
        $result = "
        <div class='result'>
            Full Name: $firstName $middleName $lastName <br>
            Username: $username <br>
            Password: $password <br>
            Birthday: $birthday <br>
            Email: $email <br>
            Contact Number: $contact
        </div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Module</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form method="POST">
        <p>My Personal Information</p>

        First Name
        <input type="text" name="first_name" required>

        Middle Name
        <input type="text" name="middle_name" required>

        Last Name
        <input type="text" name="last_name" required>

        Username
        <input type="text" name="username" required>

        Password
        <input type="password" name="password" required>

        Confirm Password
        <input type="password" name="confirm_password" required>

        Birthday
        <input type="text" name="birthday" required>

        Email
        <input type="email" name="email" required>

        Contact Number
        <input type="text" name="contact" required>

        <button type="submit">Submit</button>

    </form>
</div>

<p class="error"><?php echo $error; ?></p>

<?php echo $result; ?>

</body>
</html>