<?php
session_start();
include "nav.php";
include "footer.php";

if (isset($_SESSION['username'])){
    $name = $_SESSION['username'];
    navigationforall("Home - Deer.GO", 0);
}
else {
    navigationforall("Home - Deer.GO", 1);
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
<h1 class="text-center text-3xl font-bold mt-5 mb-5">Deerwalk Institute of Technology</h1>
<div class="container">
    <div class="w-screen h-screen flex items-center justify-center">
        <img src="Photos/deerwakl.jpg" alt="Full-Screen Image" class="w-full h-full object-cover" />
    </div>
</div>
<div class="container mx-auto py-8 text-center">
    <h1 class="text-3xl font-semibold mb-6">Our Teachers</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <!-- Team Member Card 1 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
            <img src="Photos/rudrarajpandey.jpg" alt="Team Member 1" class="w-32 h-32 rounded-full mx-auto mb-4" />
            <h2 class="text-xl font-semibold">Rudra Raj Pandey</h2>
            <p class="text-gray-600">Chairman</p>
        </div>

        <!-- Team Member Card 2 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
            <img src="Photos/bijayashrestha.jpg" alt="Team Member 2" class="w-32 h-32 rounded-full mx-auto mb-4" />
            <h2 class="text-xl font-semibold">Bijaya Shrestha</h2>
            <p class="text-gray-600">Principal</p>
        </div>

        <!-- Team Member Card 3 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
            <img src="Photos/ujjwal.png" alt="Team Member 3" class="w-32 h-32 rounded-full mx-auto mb-4" />
            <h2 class="text-xl font-semibold">Ujjwal Poudel</h2>
            <p class="text-gray-600">Vice-Principal</p>
        </div>

        <!-- Team Member Card 4 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
            <img src="Photos/nirmal.jpg" alt="Team Member 4" class="w-32 h-32 rounded-full mx-auto mb-4" />
            <h2 class="text-xl font-semibold">Nirmal Paudel</h2>
            <p class="text-gray-600">Vice-principal</p>
        </div>

        <!-- Team Member Card 2 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
            <img src="Photos/madhu.png" alt="Team Member 2" class="w-32 h-32 rounded-full mx-auto mb-4" />
            <h2 class="text-xl font-semibold">Madhu Sudhan Bhusal</h2>
            <p class="text-gray-600">HOS</p>
        </div>

        <!-- Team Member Card 3 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
            <img src="Photos/saginamam.png" alt="Team Member 3" class="w-32 h-32 rounded-full mx-auto mb-4" />
            <h2 class="text-xl font-semibold">Sagina Maharjan</h2>
            <p class="text-gray-600">HOS</p>
        </div>

        <!-- Team Member Card 4 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
            <img src="Photos/bishnusir.jpg" alt="Team Member 4" class="w-32 h-32 rounded-full mx-auto mb-4" />
            <h2 class="text-xl font-semibold">Bishnu Pandey</h2>
            <p class="text-gray-600">Math Teacher</p>
        </div>

        <!-- Team Member Card 2 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
            <img src="Photos/aakashsir.jpg" alt="Team Member 2" class="w-32 h-32 rounded-full mx-auto mb-4" />
            <h2 class="text-xl font-semibold">Aakash Sir</h2>
            <p class="text-gray-600">Physics Teacehr</p>
        </div>

        <!-- Team Member Card 3 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
            <img src="https://lh3.googleusercontent.com/a-/ALV-UjUoE-7OVvEYucviKqPZO4CQ3Tuathc43alFts3pY83uEw=s75-c" alt="Team Member 3" class="w-32 h-32 rounded-full mx-auto mb-4" />
            <h2 class="text-xl font-semibold">Dhanshwor Yonghang</h2>
            <p class="text-gray-600">Chemistry Teacher</p>
        </div>

        <!-- Team Member Card 4 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
            <img src="https://lh3.googleusercontent.com/a-/ALV-UjV1UBYCzsqWqBw5pxMEALpBKYJFI65uNBKub1zDUO45pdmfuBogsoGm_-G40aAfKkEQ3C85EGuvV2U3l4rGsC1rcsd0S9MeDBGtZ5XUazGmIm3cxDNap6uKBfvPbMpNhI4UG6X-0JAslBijkQR-uBO-PYchqnb5rVN9IClIuNb1oWnR_Cv0_axKzoCgDBvZtUIjA8d9y2eujJYMMMQf7oxRrfwpdhnrdQlg20G_fAp2zVOnTbrl7_sgNDMxnFnHhV2yUanE6EuWCQrODaixSwjn4g8jhsWepQHSs46cvGnD6iq41k7G5SXiOpwoKoz5QJdO9rGQ8_MlvRchiUGsRz0Jifp6OnPaefoVVRokH-TaXPh3cg0CuYmUGO8zglIYUn5v8dxd-0C9MB3qd7v6-4elkLgvdmSbfpC38MzX5YOANJBYZq1qzmCLK6c8GvUFFpYhSvZ-sjZEg2IqLkoHoL5m4ug_32kq_yL-6dFTv41SKOcfMEYzXlsIBcOxXqDSC48EELEzJn4tFtCLpJljW2YwLt7v5iBbrXzhFCaAxw6cBcH0M6-zxgmTULDOFNEgARh7c1uBtnsA8xFJJS1o6Ovgd98S2G6V76EKWYubQmarlUQAjf18G-_niG__BP7g2tai8eTRmqkUxmL7lB9TfpEYotRUWFQg8dngo0vIyBg8piRfT8gsr0I7rvTmEwlGfuLAtivxgrw6jqqHXPizFaFZQJjE-M2dRQHpi1dBiNyA9iljq9ivKYXHb7FluAXhjoeRlnglrncJlDyrc5v8n0xvz-4TqtTvSNPQAHTjNKo7Py2fCtq0Up_3FcAbV8iu4FDqZ0e15LaaE15wWZ14ilpGSlZM_S7e5tucGpaESprR4THfQ-G-W9G2-KDnXmJXLiJaWIUu2ZRjKsEY8NckafOb5gFzlfanZrFMQZatNdwACkJHJyIh0NLXNPgCo-Qzqw=s75-c" alt="Team Member 4" class="w-32 h-32 rounded-full mx-auto mb-4" />
            <h2 class="text-xl font-semibold">Saishab Bhattarai</h2>
            <p class="text-gray-600">Computer Teacher</p>
        </div>

        <!-- Team Member Card 2 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
            <img src="https://lh3.googleusercontent.com/a-/ALV-UjU-PU_5_XKhkPRKR2hqWwmTS2SpYKB1azd6Jc-1FnpQoMo=s75-c" alt="Team Member 2" class="w-32 h-32 rounded-full mx-auto mb-4" />
            <h2 class="text-xl font-semibold">Youbraj Aryal</h2>
            <p class="text-gray-600">Nepali Teacher</p>
        </div>

        <!-- Team Member Card 3 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
            <img src="https://lh3.googleusercontent.com/a-/ALV-UjWBzs4dMaLEtwWrLue7Avd9K1hgPIx04wclHRl9Ozv1=s75-c" alt="Team Member 3" class="w-32 h-32 rounded-full mx-auto mb-4" />
            <h2 class="text-xl font-semibold">Ganesh Pandey</h2>
            <p class="text-gray-600">English Teacher</p>
        </div>

        <!-- Add more Team Member Cards as needed -->
    </div>
</div>
</body>
</html>

<?php
footer();
?>
