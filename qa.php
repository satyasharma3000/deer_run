<?php
include "nav.php";
$conn = new mysqli("localhost", "root", "root", "DeerRun");
navigationforall("Q/A - Deer.GO",0);
$userlevel = '';
if (isset($_SESSION['userLevel'])){
    $userlevel = $_SESSION['userLevel'];
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
<div class="flex flex-col md:flex-row items-center justify-center mt-5">

    <!-- First form -->
    <div class="bg-white p-6 rounded-lg shadow-md w-96 md:mx-2 mb-5 md:mb-0">
        <h1 class="text-2xl font-semibold mb-4">Your Answer</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <div class="mb-4">
                    <input type="text" name="homeworksubject" required minlength="2" id="homeworksubject" placeholder="Subject Name" class="border rounded-lg py-2 px-3 w-full mt-2 mb-2">
                    <textarea type="text" name="homeworktext" required minlength="2" id="homeworktext" placeholder="Write something..." class="border rounded-lg py-2 px-3 w-full mt-2 mb-2"></textarea>
                    <label for="homeworkFile" class="block text-gray-700 font-bold mb-2 mt-2">Select a File:</label>
                    <input type="file" name="fileToUpload" id="fileInput" class="border rounded-lg py-2 px-3 w-full">
                </div>
                <div class="mb-4">
                    <input type="submit" value="Upload" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-700">
                </div>
            </form>
        </form>
    </div>

    <!-- Second form -->
    <div class="bg-white p-6 rounded-lg shadow-md w-96 md:mx-2">
        <h1 class="text-2xl font-semibold mb-4">Questions</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <div class="mb-4">
                    <input type="text" name="homeworksubject" required minlength="2" id="homeworksubject" placeholder="Subject Name" class="border rounded-lg py-2 px-3 w-full mt-2 mb-2">
                    <textarea type="text" name="homeworktext" required minlength="2" id="homeworktext" placeholder="Write something..." class="border rounded-lg py-2 px-3 w-full mt-2 mb-2"></textarea>
                    <label for="homeworkFile" class="block text-gray-700 font-bold mb-2 mt-2">Select a File:</label>
                    <input type="file" name="fileToUpload" id="fileInput" class="border rounded-lg py-2 px-3 w-full">
                </div>
                <div class="mb-4">
                    <input type="submit" value="Upload" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-700">
                </div>
            </form>
        </form>
    </div>

</div>

</body>
</html>
<?php
include "footer.php";
footer();
?>
