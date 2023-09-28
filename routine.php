<?php
include "nav.php";
include "footer.php";
session_start();
if (isset($_SESSION['username'])){
    $name = $_SESSION['username'];
    navigationforall("Routine - Deer.GO",0);
}
else{
    navigationforall("Routine - Deer.GO",1);
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
    <h1 class="text-3xl font-bold mb-4 text-center">Routine</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mb-2">
        <!-- Button 1 -->
        <button onclick="changeImage(1)" class="btn bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded">
            IX - Nilgiri
        </button>
        <button onclick="changeImage(2)" class="btn bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            X - Machhapuchre
        </button>
        <button onclick="changeImage(3)" class="btn bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded">
            XI - Changla
        </button>
        <button onclick="changeImage(4)" class="btn bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            XI - Khumbutse
        </button>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mb-2">
        <!-- Button 1 -->
        <button onclick="changeImage(5)" class="btn bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            XI - Pangboche
        </button>
        <button onclick="changeImage(6)" class="btn bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded">
            XII - Lobuche
        </button>
        <button onclick="changeImage(7)" class="btn bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            XII - Kumbila
        </button>
        <button onclick="changeImage(8)" class="btn bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            XII- Yala
        </button>
    </div>
    <div class="container mx-auto mt-4">
        <table class="w-full">
            <tr class="w-full flex flex-col md:flex-row">
                <td class="w-full md:w-3/4">
                    <img src="Photos/7.png" id="sectionImage" alt="Full-Width Image" class="w-full">
                </td>
                <td class="w-full md:w-1/4">
                    <div class="md:flex md:flex-col items-center">
                        <img src="Photos/saginamam.png" id="teacherimage" alt="Full-Width Image" class="w-full p-4 ml-4 md:ml-0">
                        <h1 class="w-full p-4 content-center" id="teachername" style="margin-left: 50%">Sagina Maharjan</h1>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
<script>
    function changeImage(image) {
        // Get the image element by its ID
        var imageElement = document.getElementById("sectionImage");
        var teacherimage = document.getElementById("teacherimage");
        var teachername = document.getElementById("teachername");
        if (image === 1){
            imageElement.src = 'Photos/1.png';
            teacherimage.src = 'Photos/';
            teachername.innerHTML = 'Saraj R';
        }
        else if(image === 2){
            imageElement.src = 'Photos/2.png';
            teacherimage.src = 'Photos/';
            teachername.innerHTML = 'Samyo HR';
        }
        else if(image === 3){
            imageElement.src = 'Photos/3.png';
            teacherimage.src = 'Photos/.jpg';
            teachername.innerHTML = 'Mazina R';
        }
        else if(image === 4){
            imageElement.src = 'Photos/4.png';
            teacherimage.src = 'Photos/.jpg';
            teachername.innerHTML = 'Rohit G';
        }
        else if(image === 5){
            imageElement.src = 'Photos/5.png';
            teacherimage.src = 'https://lh3.googleusercontent.com/a-/ALV-UjUoE-7OVvEYucviKqPZO4CQ3Tuathc43alFts3pY83uEw=s75-c';
            teachername.innerHTML = 'Dhanshwor Y';
        }
        else if(image === 6){
            imageElement.src = 'Photos/6.png';
            teacherimage.src = 'Photos/aakashsir.jpg';
            teachername.innerHTML = 'Aakash Giri';
        }
        else if(image === 7){
            imageElement.src = 'Photos/7.png';
            teacherimage.src = 'Photos/saginamam.png';
            teachername.innerHTML = 'Sagina Maharjan';
        }
        else if(image === 8){
            imageElement.src = 'Photos/8.png';
            teacherimage.src = 'Photos/bishnusir.jpg';
            teachername.innerHTML = 'Bishnu Pandey';
        }
    }
</script>
</html>

<?php
footer();
?>
