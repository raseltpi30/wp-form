<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pickup_street = $_POST['pickup_street'];
    $pickup_city = $_POST['pickup_city'];
    $pickup_state = $_POST['pickup_state'];
    $destination_street = $_POST['destination_street'];
    $destination_city = $_POST['destination_city'];
    $destination_state = $_POST['destination_state'];
    $travel_date = $_POST['travel_date'];
    $travel_time = $_POST['travel_time'];
    $service_level = $_POST['service_level'];
    $special_needs = $_POST['special_needs'];

    // You can now process the data, e.g., save to a database or send an email

    // Example: Display the collected data
    echo "<h2>Booking Details</h2>";
    echo "Name: $first_name $last_name<br>";
    echo "Date of Birth: $dob<br>";
   
}