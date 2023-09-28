<?php
include "nav.php";
include "footer.php";
navigationforall("Active User - Deer.GO",0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add the link to the Tailwind CSS CDN or import it based on your project setup -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<h1 class="text-3xl font-bold mb-4 text-center mt-5">Active Users</h1>
<div id="activeUsers" class="max-w-lg mx-auto mt-5 mb-5">
    <!-- The active users will be displayed here -->
</div>
</body>
<script>
    // Function to fetch and display the active users
    function displayActiveUsers() {
        fetch('active_users.json') // Replace 'active_users.json' with the correct path to your JSON file
            .then(response => response.json())
            .then(data => {
                // Access the JSON array and create an HTML list of active users
                const activeUsersDiv = document.getElementById('activeUsers');
                const userList = document.createElement('ul');
                userList.classList.add('space-y-2'); // Add space between list items

                data.forEach(user => {
                    const listItem = document.createElement('li');
                    listItem.textContent = `User ID: ${user.userid}, Username: ${user.username}`;
                    listItem.classList.add('bg-blue-100', 'p-2', 'rounded'); // Add background color, padding, and rounded corners
                    userList.appendChild(listItem);
                });

                activeUsersDiv.appendChild(userList);
            })
            .catch(error => console.error('Error:', error));
    }

    // Call the function to display the active users when the page loads
    window.onload = displayActiveUsers;
</script>
</html>
<?php
footer();
?>
