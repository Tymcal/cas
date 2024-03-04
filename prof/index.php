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
    <link rel="stylesheet" href="prof.css">
    <link href="https://fonts.cdnfonts.com/css/helvetica-neue-55" rel="stylesheet">
    <title>CAS - Home</title>
</head>
<body>
    <div id="account-detail">
        <div class="button-container">
            <button class="logout" href="https://tymcal.com/cas/auth/logout.php">sign out</button>
            <button class="cancel" onclick="off()">back</button>
        </div>
    </div>
    <!-- <h1>Welcome, Prof. <?php echo $id; ?>!</h1> -->
    <div class="toolbar">
        <i class="fa-solid fa-arrow-up cancel-class" id=""></i>
        <a class="account" href="#"><i class="fa-solid fa-user" onclick="on()"></i></a>
    </div>
    <div class="date-container">
        <div class="day" id="day"></div>
        <div class="date" id="date"></div>
    </div>
    <div class="container">
        <a class="class">
            <div class="text-container">
                <div class="time-subject-room-container">
                    <div class="time-subject-room">9:00 - 12:00</div>
                    <div class="time-subject-room">Compro</div>
                    <div class="time-subject-room">E12-201</div>
                </div>
                <div class="sec">IoT Y1 sec 27</div>
            </div>
            <div class="next-container">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </a>
        <a class="class">
            <div class="text-container">
                <div class="time-subject-room-container">
                    <div class="time-subject-room">13:00 - 16:00</div>
                    <div class="time-subject-room">Mobile</div>
                    <div class="time-subject-room">E12-109</div>
                </div>
                <div class="sec">IoT Y2 sec 25</div>
            </div>
            <div class="next-container">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
</a>
    </div>
    <!-- Add more dashboard content as needed -->
    
    <!-- <button onclick="getTimeAndLocation()">Try It</button> -->
    <!-- <p id="time"></p>
    <p id="location"></p> -->
    <script src="https://kit.fontawesome.com/e1e81ca5ae.js" crossorigin="anonymous"></script>
    <script src="loadLocNTime.js"></script>
    <script src="loadData.js"></script>
</body>
</html>
