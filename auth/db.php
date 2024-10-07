<?php
$servername = "localhost";
$username = "tymcal";
$password = "Rpi1164741";
$dbname = "cas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
