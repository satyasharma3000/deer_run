<?php
include "nav.php";
include "footer.php";
session_start();
if (isset($_SESSION['username'])){
    $name = $_SESSION['username'];
    navigationforall("DeerwalkFood - Deer.GO",0);
}
else{
    navigationforall("DeerwalkFood - Deer.GO",1);
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
<body>
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4 text-center">Deerwalk Food</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
        <a href="https://dfs.deerwalk.edu.np" class="btn bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded">Login to your account</a>
    </div>
    <div class="container mx-auto mt-4">
        <table class="w-full">
            <tr class="w-full flex flex-col md:flex-row">
                <td class="w-full md:w-3/4">
                    <img src="Photos/dfs_sample.png" id="sectionImage" alt="Full-Width Image" class="w-full">
                </td>
                <td class="w-full md:w-1/4">
                    <div class="md:flex md:flex-col items-center">
                        <img src="Photos/qrcode_sifal.png" id="teacherimage" alt="Full-Width Image" class="w-full p-4 ml-4 md:ml-0">
                        <div class="text-center md:text-left"> <!-- Center text on mobile, left-align on desktop -->
                            <h1 class="w-full p-4" id="teachername">Add money to your account</h1>
                            <h1 class="w-full p-4" id="teachername"><strong>"Enter your Name, Roll No, Food Account Number carefully in remarks"</strong></h1>
                            <h1 class="w-full p-4" id="teachername"><strong>"Sifal School Food"</strong></h1>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<?php
footer();
?>
