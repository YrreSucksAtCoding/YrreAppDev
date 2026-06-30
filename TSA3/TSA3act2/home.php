<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">Y</div>
            <div class="menu">&#9776;</div>
        </div>

        <div class="home">
            <h2>Welcome!</h2>

            <p>Hello,
                <b><?php echo $_SESSION['username']; ?></b>
            </p>

            <a href="logout.php" class="logout">
                Logout
            </a>
        </div>
    </div>
</body>
</html>