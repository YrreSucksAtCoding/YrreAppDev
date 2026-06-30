<?php
$conn = new mysqli("localhost", "root", "", "activityb");

if ($conn->connect_error) {
    die("Connection Failed");
}
?>