<?php
include "nav.php";
include "footer.php";
session_start();
$username = $_SESSION['username'];
$userlevel = '';
if (isset($_SESSION['userLevel'])){
    $userlevel = $_SESSION['userLevel'];
}
navigationforall("Profile - Deer.GO",0);
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
<div class="max-w-lg mx-auto my-10 bg-white rounded-lg shadow-md p-5">
    <img class="w-32 h-32 rounded-full mx-auto" src="https://picsum.photos/200" alt="Profile picture">
    <h2 class="text-center text-2xl font-semibold mt-3"><?php echo $username; ?></h2>
    <p class="text-center text-gray-600 mt-1">Student of <?php echo $userlevel; ?></p>
    <div class="flex justify-center mt-5">
        <a href="logout.php" class="text-indigo-600 hover:text-blue-700 ">Log out</a>
    </div>
    <div class="mt-5">
        <h3 class="text-xl font-semibold text-center">Deerwalk Institude of Technology</h3>
        <p class="text-gray-600 mt-2">Deerwalk Institute of Technology (DIT) offers a dynamic learning environment for students like <?php echo $username; ?>. They can be found exploring a well-stocked library, participating in coding competitions, and engaging in diverse extracurricular activities, including various clubs and societies. This holistic approach to education at DIT fosters academic excellence and personal development, setting students up for future success.</p>
    </div>
</div>
</body>
</html>
<?php
footer();
?>
