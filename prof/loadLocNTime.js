const today = document.getElementById("todaysdate");
    const d = document.getElementById("day");
    const dmy = document.getElementById("date");
    const l = document.getElementById("location");
    const account = document.getElementById("account-detail");

    function on() {
        account.style.display = "block";
    }

    function off() {
        account.style.display = "none";
    }

    // Get current date and time
    var currentDate = new Date();

    const daysOfWeek = ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'];
    const months = ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];

    d.innerHTML = daysOfWeek[currentDate.getDay()];
    dmy.innerHTML = currentDate.getDate() + ' ' + months[currentDate.getMonth()] + ' ' + currentDate.getFullYear();

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