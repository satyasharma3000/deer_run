<?php
include "nav.php";
include "footer.php";
session_start();
$conn = new mysqli("localhost", "root", "root", "DeerRun");
$userlevel = $_SESSION['userLevel'];
navigationforall("Homework - Deer.GO", 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
    <!-- Add the link to the Tailwind CSS CDN or import it based on your project setup -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for adding margin between the button and text */
        .homework-container {
            display: flex;
            align-items: center;
        }

        .homework-button {
            margin-top: 10px; /* Adjust the margin as needed */
        }
    </style>
</head>
<body>
<h1 class="text-3xl font-bold mb-4 text-center mt-5">Homework</h1>
<div class="flex justify-center mt-5">
    <a href="uploadhw.php" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-5">Upload Homework</a>
</div>
<div id="chat-messages" class="flex flex-col items-center justify-center mb-4 p-4 border border-gray-300 rounded shadow-lg mx-5">
    <?php
    // Retrieve usernames and messages from the database
    $sql = "SELECT * FROM homework where level = '$userlevel'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $studentName = $row["stdname"];
            $hwsub = $row["subname"];
            $hwtext = $row["subinfo"];
            $fileName = $row["filename"];
            $datetime = $row["event_datetime"]; // Corrected column name

            // Display the retrieved data in HTML with Tailwind CSS styling
            echo '<div class="w-full md:w-2/3 mb-8 p-4 border border-gray-300 rounded shadow-md homework-container">';
            echo '<div>';
            echo '<p class="mb-2 text-gray-700 text-base font-bold">Name: ' . htmlspecialchars($studentName) . '</p>';
            echo '<p class="mb-2 text-gray-700 text-base">Sub Name: ' . htmlspecialchars($hwsub) . '</p>';
            echo '<p class="mb-2 text-gray-700 text-base">About Homework: ' . htmlspecialchars($hwtext) . '</p>';

            // Display the datetime
            echo '<p class="mb-2 text-gray-700 text-base mb-3">Datetime: ' . htmlspecialchars($datetime) . '</p>';
            echo '<a href="uploads/' . $fileName . '" class="mb-5 bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded homework-button" download>Download File</a>';


            echo '<div class="mr-4 mb-5">';

            $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION); // Get the file extension

            if (strtolower($fileExtension) == 'pdf') {
                // Display the PDF using an iframe
                echo '<iframe src="uploads/' . $fileName . '" width="100%" height="300" class="mt-5"></iframe>';
            } else {
                // Display images as you did before
                echo '<img src="uploads/' . $fileName . '" alt="Homework Image" class=" mt-5 cursor-pointer hover:opacity-80" width="400" height="400">';
            }

            echo '</div>';

            echo '</div>';
            echo '</div>';
        }
    }
    ?>
</div>
</body>
</html>

<?php
footer();
?>
