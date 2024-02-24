<?php
session_start();
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['login_id'];
    $password = $_POST['login_password'];

    $sql = "SELECT * FROM user WHERE id='$id' AND password='$password'";
    $result = $conn->query($sql);
    // echo $result;

    if ($result->num_rows > 0) {
        // Set session variables or perform any necessary actions
        $_SESSION['id'] = $id;

        $sql = "SELECT status FROM user WHERE id='$id' AND password='$password'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $status = $row['status'];

        if ($status === 'stu') {
            header("Location: ../../cas");
        } else if ($status === 'prof') {
            header("Location: ../prof");
        } else {
            header("Location: ../admin");
        }
        exit();
    } else {
        echo "Invalid credentials. Please try again.";
    }
}

$conn->close();
?>
