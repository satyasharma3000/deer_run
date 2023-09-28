<?php
include "nav.php";
include "footer.php";
//session
session_start();
navigationforall("Chat - Deer.GO",0);
//initial
$conn = new mysqli("localhost", "root", "root", "DeerRun");
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$userId = $_SESSION['userid'];
if ($userId == ""){
    header("Location:login.php");
}
$sender = "SELECT name from Users where id = '$userId'";
$resultName = $conn->query($sender);
if ($resultName) {
    // Fetch the single value
    $row = $resultName->fetch_assoc();
    if ($row) {
        // Access the value
        $sender = $row['name'];
    }
}
$message = "";
$level = $_SESSION['userLevel'];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $message = $_POST["message"];
}
if ($message != ""){
    $insertMessage = "INSERT INTO Chat(id, sender, message,level) values ('$userId','$sender','$message','$level')";
    if ($conn->query($insertMessage) === TRUE) {
    }
    else {
        echo "Error: " . $conn->error;
    }
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive Buttons with Tailwind CSS</title>
        <!-- Add the link to the Tailwind CSS CDN or import it based on your project setup -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-100">
<h1 class="text-3xl font-bold text-center mt-5">Class Chat</h1>
    <div class="container mx-auto p-4 max-w-lg">
        <div class="bg-white p-4 rounded shadow">
            <div id="chat-messages" class="mb-4 p-2 border border-gray-300 rounded h-100 overflow-y-auto">
                <?php

                // Retrieve usernames and messages from the database
                $sql = "SELECT sender, message, time FROM Chat where level = '$level'";
                $result = $conn->query($sql);

                // Check if there are messages
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $username = $row['sender'];
                        $message = $row['message'];
                        $time = $row['time'];
                        // Display the retrieved data in HTML with Tailwind CSS styling
                        echo '<div class="mb-4">';
                        echo '<p class="text-gray-700 text-sm"><strong>' . htmlspecialchars($username) . ':</strong></p>';
                        echo '<p class="text-gray-900">' . htmlspecialchars($message) . '</p>';
                        echo '<p class="text-gray-900 text-base/6">' . htmlspecialchars($time) . '</p>';
                        echo '</div>';
                    }
                } else {
                    echo "No messages found.";
                }

                // Close the database connection
                $conn->close();
                ?>
            </div>
            <form method="post" action="chat.php">
                <textarea id="message" name="message" class="w-full p-2 mb-2 border border-gray-300 rounded" placeholder="Message"></textarea>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none">Send</button>
            </form>
        </div>
    </div>
    </body>
</html>
<?php
footer();
?>