<?php
session_start();
include "conn.php";
// Define the file path where you want to save the JSON data
$filePath = 'active_users.json';

// Initialize the $activeUsers array with existing data from the JSON file if it exists
if (file_exists($filePath)) {
    $jsonData = file_get_contents($filePath);
    $activeUsers = json_decode($jsonData, true);
    if ($activeUsers === null) {
        die('JSON decoding failed');
    }
} else {
    // If the file doesn't exist, create an empty array
    $activeUsers = array();
}

// Check if a user is logged in (you might want to replace this with your actual authentication logic)
if (isset($_SESSION['userid']) && isset($_SESSION['username'])) {
    // Check if the user is not already in the activeUsers array
    if (!in_array($_SESSION['userid'], array_column($activeUsers, 'userid'))) {
        // Add the user to the array
        $activeUsers[] = array(
            'userid' => $_SESSION['userid'],
            'username' => $_SESSION['username']
        );

        // Convert the updated array to a JSON string
        $jsonData = json_encode($activeUsers);

        if ($jsonData === false) {
            die('JSON encoding failed');
        }

        // Write the JSON string back to the file
        if (file_put_contents($filePath, $jsonData)) {
            echo 'Data written to JSON file successfully.';
            header('Location: activeuser.php');
        } else {
            echo 'Failed to write data to JSON file.';
        }
    } else {
        header('Location: activeuser.php');
    }
} else {
    echo 'User is not logged in.';
}
?>
