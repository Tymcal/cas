<?php

session_start();
require_once('db.php');
// Your PHP code to fetch data from PHPMyAdmin goes here
// For example, you might use MySQLi or PDO to connect to your database

// Replace the following with your database connection details
// $servername = "localhost";
// $username = "your_username";
// $password = "your_password";
// $database = "your_database";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
$storedId = $_SESSION['id'];
// Query to fetch data from your database table
$sql = "SELECT subjectId, sec FROM assignedClass WHERE profId = '{$storedId}' ";
$result = $conn->query($sql);

// Output data as JSON
$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);

// Close connection
$conn->close();
?>
