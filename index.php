<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    // Redirect to the login page if not logged in
    header("Location: auth/index.html");
    exit();
}

// Display the dashboard content
$id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.cdnfonts.com/css/helvetica-neue-55" rel="stylesheet">
    <title>CAS - Home</title>
</head>
<body>
    <h1>Welcome, <?php echo $id; ?>!</h1>
    <p>This is your dashboard content. Rechtig?</p>
    <!-- Add more dashboard content as needed -->
    
    <!-- <button onclick="getTimeAndLocation()">Try It</button> -->
    <p id="time"></p>
    <p id="location"></p>
    <a href="auth/logout.php">Logout</a>
<script>
    const t = document.getElementById("time");
    const l = document.getElementById("location");

    // Get current date and time
    var now = new Date();
    var datetime = now.toLocaleString();
    t.innerHTML = datetime;

    //Get location
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        l.innerHTML = "Geolocation is not supported by this browser.";
    }

    function showPosition(position) {
        l.innerHTML = "Latitude: " + position.coords.latitude +
    "<br>Longitude: " + position.coords.longitude;
    }
</script>
</body>
</html>
