<?php
$conn = mysqli_connect("localhost", "root", "", "dogdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>