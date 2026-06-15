<?php

$first = $_GET['firstname'] ?? '';
$middle = $_GET['middlename'] ?? '';
$last = $_GET['lastname'] ?? '';
$dob = $_GET['dob'] ?? '';
$address = $_GET['address'] ?? '';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Personal Information - GET</title>
    </head>
    <body>
        <h2>Personal Information using $_GET</h2>
        <form method="get">
            <label>First Name:</label>
            <input type="text" name="firstname"><br><br>

            <label>Middle Name:</label>
            <input type="text" name="middlename"><br><br>

            <label>Last Name:</label>
            <input type="text" name="lastname"><br><br>

            <label>Date of Birth:</label>
            <input type="date" name="dob"><br><br>

            <label>Address:</label>
            <input type="text" name="address"><br><br>

            <input type="submit" value="Submit">
        </form>
<?php

if (!empty($first)) {
    echo "<h3>Submitted Information</h3>";
    echo "First Name: $first <br>";
    echo "Middle Name: $middle <br>";
    echo "Last Name: $last <br>";
    echo "Date of Birth: $dob <br>";
    echo "Address: $address <br>";
}

?>
    </body>
</html>
 