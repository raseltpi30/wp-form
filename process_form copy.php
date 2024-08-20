<?php
// ajax-handler.php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // Perform your operations here, e.g., saving data to the database

    // Example response
    $response = array('status' => 'success', 'message' => 'Operation completed successfully.');

    // Return the response as JSON
    echo json_encode($response);
    exit();
} else {
    // Handle other request methods if needed
    $response = array('status' => 'error', 'message' => 'Invalid request method.');
    echo json_encode($response);
    exit();
}
?>
