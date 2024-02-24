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
    <h1>Welcome, Prof. <?php echo $id; ?>!</h1>
    <h1 id="todaysdate"></h1>
    <p>This is your dashboard content. Rechtig?</p>
    <!-- Add more dashboard content as needed -->
    
    <!-- <button onclick="getTimeAndLocation()">Try It</button> -->
    <p id="time"></p>
    <p id="location"></p>
    <a href="https://tymcal.com/cas/auth/logout.php">Logout</a>
<script>
    const today = document.getElementById("todaysdate");
    const t = document.getElementById("time");
    const l = document.getElementById("location");

    // Get current date and time
    var currentDate = new Date();
    var datetime = currentDate.toLocaleString();
    t.innerHTML = datetime;

    const daysOfWeek = ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'];
    const months = ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];

    const formattedDate = daysOfWeek[currentDate.getDay()] + 'ที่ ' + currentDate.getDate() + ' ' + months[currentDate.getMonth()];
    today.innerHTML = formattedDate;

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

//     $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
//     }
// } else {
//     echo "0 results";
// }
</script>
</body>
</html>
