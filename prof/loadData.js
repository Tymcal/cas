document.addEventListener("DOMContentLoaded", function () {
    // Make an AJAX request to fetch data from PHP file
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Parse the JSON response
            var data = JSON.parse(this.responseText);

            // Display the data on the HTML page
            var container = document.getElementById("container");
            container.innerHTML = "<pre>" + JSON.stringify(data, null, 2) + "</pre>";
        }
    };

    // Replace 'load_data.php' with the correct path to your PHP file
    xhr.open("GET", "loadData.php", true);
    xhr.send();
});
