<?php
include "db.php";

$message = "";

if (isset($_POST['register'])) {
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    if ($password != $confirm) {
        $message = "Password and Confirm Password are not the same.";
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(firstname, middlename, lastname, username, password, birthday, email, contact)
                VALUES('$fname', '$mname', '$lname', '$username', '$password', '$birthday', '$email', '$contact')";

        if ($conn->query($sql)) {
            $message = "Registration Successful";
        } else {
            $message = "Username already exists.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>

        <form method="POST">
            <input type="text" name="fname" placeholder="First Name" required>
            <input type="text" name="mname" placeholder="Middle Name">
            <input type="text" name="lname" placeholder="Last Name" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm" placeholder="Confirm Password" required>
            <input type="text" name="birthday" placeholder="Birthday">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="contact" placeholder="Contact Number">
            <input type="submit" name="register" value="Register">
        </form>

        <p><?php echo $message; ?></p>
        <a href="login.php">Login Here</a>
    </div>
</body>
</html>