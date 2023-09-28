<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['userid']) && isset($_SESSION['username'])) {
    $userIdToRemove = $_SESSION['userid'];

    // Define the file path where the JSON data is stored
    $filePath = 'active_users.json';

    // Read the existing JSON data
    $jsonData = file_get_contents($filePath);

    if ($jsonData !== false) {
        // Decode the JSON data into an array
        $activeUsers = json_decode($jsonData, true);

        // Find the index of the user to remove
        $indexToRemove = array_search($userIdToRemove, array_column($activeUsers, 'userid'));

        if ($indexToRemove !== false) {
            // Remove the user from the array
            array_splice($activeUsers, $indexToRemove, 1);

            // Encode the updated array back to JSON
            $updatedJsonData = json_encode($activeUsers);

            if ($updatedJsonData !== false) {
                // Write the updated JSON data back to the file
                if (file_put_contents($filePath, $updatedJsonData)) {
                    echo 'User logged out successfully.';
                    header('Location: login.php');
                } else {
                    echo 'Failed to update JSON file.';
                }
            } else {
                echo 'JSON encoding failed.';
            }
        } else {
            header('Location: login.php');
        }
    } else {
        echo 'Failed to read JSON file.';
    }

    // Unset session variables to log out the user
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
} else {
    echo 'User is not logged in.';
    header('Location : login.php');
}
?>
