<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h2>User Information</h2>

        <a class="logout" href="logout.php">Logout</a>

        <p><b>Welcome:</b> <?php echo $user['firstname'] . " " . $user['lastname']; ?></p>
        <p><b>Birthday:</b> <?php echo $user['birthday']; ?></p>
        <p><b>Email:</b> <?php echo $user['email']; ?></p>
        <p><b>Contact:</b> <?php echo $user['contact']; ?></p>

        <hr>

        <form action="resetpassword.php" method="POST">
            <input type="password" name="current" placeholder="Current Password" required>
            <input type="password" name="new" placeholder="New Password" required>
            <input type="password" name="renew" placeholder="Re-enter Password" required>
            <input type="submit" name="reset" value="Reset Password">
        </form>
    </div>
</body>
</html>