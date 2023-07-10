<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $departure = $_POST["departure"];
    $destination = $_POST["destination"];
    $departureDate = $_POST["departure-date"];
    $returnDate = $_POST["return-date"];
    $passengers = $_POST["passengers"];

    // Validate and process the form data
    // ...

    // For this example, we'll just display the form data
    echo "<h2>Booking Details</h2>";
    echo "<p>Departure: $departure</p>";
    echo "<p>Destination: $destination</p>";
    echo "<p>Departure Date: $departureDate</p>";
    echo "<p>Return Date: $returnDate</p>";
    echo "<p>Passengers: $passengers</p>";
}
?>
