<?php
session_start();
require_once('../auth/db.php');

$id = $_SESSION['id'];
// Query to fetch data from your database table
$sql = "SELECT subjectId, sec FROM assignedClass WHERE profId = '{$id}' ";
$result = $conn->query($sql);

// Output data as JSON
$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row['subjectId'];
    }
}

echo json_encode($data);

// Close connection
$conn->close();
?>
