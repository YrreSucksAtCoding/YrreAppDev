<?php

if (isset($_POST['submit'])) {
    setcookie("firstname", $_POST['firstname'], time() + 10);
    setcookie("middlename", $_POST['middlename'], time() + 20);
    setcookie("lastname", $_POST['lastname'], time() + 30);
    header("Refresh:0");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cookies Activity</title>
    </head>
    <body>
        <h2>Personal Information using Cookies</h2>
        <form method="post">
            <label>First Name:</label>
            <input type="text" name="firstname"><br><br>

            <label>Middle Name:</label>
            <input type="text" name="middlename"><br><br>

            <label>Last Name:</label>
            <input type="text" name="lastname"><br><br>

            <input type="submit" name="submit" value="Set Cookies">
        </form>

        <h3>Cookie Values</h3>

        <p>
            <strong>First Name:</strong>
            <?php echo $_COOKIE['firstname'] ?? "Not Available"; ?>
        </p>

        <p>
            <strong>Middle Name:</strong>
            <?php echo $_COOKIE['middlename'] ?? "Not Available"; ?>
        </p>

        <p>
            <strong>Last Name:</strong>
            <?php echo $_COOKIE['lastname'] ?? "Not Available"; ?>
        </p>
    </body>
</html>
 