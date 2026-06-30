<?php
session_start();

include "db.php";

$error = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $row;

            header("Location: home.php");
            exit();
        }
    }

    $error = "Invalid Username or Password";
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="login" value="Login">
        </form>

        <p class="error"><?php echo $error; ?></p>
        <a href="register.php">Create Account</a>
    </div>
</body>
</html>