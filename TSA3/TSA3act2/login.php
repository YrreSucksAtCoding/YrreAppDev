<?php
session_start();

// If already logged in
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}

// Static Username and Password
$validUsername = "user123";
$validPassword = "password123";

// Load cookies
$username = "";
$password = "";

if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
}

if (isset($_COOKIE['password'])) {
    $password = $_COOKIE['password'];
}

$error = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Remember Me
    if (isset($_POST['remember'])) {
        setcookie("username", $username, time() + 86400 * 30, "/");
        setcookie("password", $password, time() + 86400 * 30, "/");
    } else {
        setcookie("username", "", time() - 3600, "/");
        setcookie("password", "", time() - 3600, "/");
    }

    // Check Login
    if ($username == $validUsername && $password == $validPassword) {
        $_SESSION['username'] = $username;

        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Module</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">Y</div>
            <div class="menu">&#9776;</div>
        </div>

        <form method="POST">
            <label>Username</label>
            <input
                type="text"
                name="username"
                value="<?php echo $username; ?>"
                required
            >

            <label>Password</label>
            <input
                type="password"
                name="password"
                value="<?php echo $password; ?>"
                required
            >

            <div class="bottom">
                <label class="remember">
                    <input type="checkbox" name="remember">
                    Remember Me
                </label>

                <input type="submit" name="login" value="Submit">
            </div>

            <?php
            if ($error != "") {
                echo "<p class='error'>$error</p>";
            }
            ?>
        </form>

        <p class="footer"></p>
    </div>
</body>
</html>