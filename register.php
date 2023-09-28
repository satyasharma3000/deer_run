<?php
include "nav.php";
include "footer.php";
navigationforall("Register - Deer.GO",1);
$conn = new mysqli('localhost', 'root', 'root', 'DeerRun');
if (isset($_POST["selected_level"])){
    $name = $_POST["name"];
    $level = $_POST["selected_level"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    if ($level != ''){
        $insertQuery = "Insert Into Users(name,email,password,level) values('$name','$email','$password','$level')";
        if ($conn->query($insertQuery) === TRUE) {
            header('Location: login.php');
        }
        else {
            echo "Failed";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto w-auto" src="Photos/logo.png" alt="Your Company" style="width: 25%; height: 25%">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register your account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="register.php" method="POST">
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Full Name</label>
                <div class="mt-2">
                    <input id="text" placeholder="Enter your name " name="name" type="text" required class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="my-custom-class relative inline-block text-left">
                <div class="my-text-class flex">
                    <div class="py-2 pl-3 leading-5 text-gray-700 mr-2">Select Level : </div>
                    <select name="selected_level" required class="block w-48 py-2 pl-3 rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                        <option value="">Click to select</option>
                        <option value="Class_9">Class 9</option>
                        <option value="Class_10">Class 10</option>
                        <option value="Class_11">Class 11</option>
                        <option value="Class_12">Class 12</option>
                        <option value="Teacher">Teacher</option>
                    </select>
                </div>
            </div>


            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" name="email" placeholder="Enter your email" type="email" autocomplete="email" required  class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                </div>
                <div class="mt-2">
                    <input id="password" name="password" placeholder="Enter your password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
            </div>
        </form>
    </div>
</div>
</body>

</html>
<?php
footer();
?>
