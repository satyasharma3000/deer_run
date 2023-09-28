<?php
session_start();
//adding navigation to page
include "nav.php";
//adding footer to page
include "footer.php";
$conn = new mysqli('localhost', 'root', 'root', 'DeerRun');
if ($conn->connect_error) {
    //if not connected then return false
    die("Connection failed: " . $conn->connect_error);
}
navigationforall("Login - Deer.GO",1);
?>
<?php
$username = 0;
$password = 0;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM Users WHERE email = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        //id
        $temUserId = "SELECT id from Users where email = $username";
        $resultOfId = $conn->query($temUserId);
        if ($result) {
            // Fetch the single value
            $row = $result->fetch_assoc();

            if ($row) {
                $_SESSION['userid'] = $row['id'];
                $id = $_SESSION['userid'];
                //name
                $name = "SELECT name from Users where id = '$id'";
                $resultName = $conn->query($name);
                if ($resultName) {
                    // Fetch the single value
                    $row = $resultName->fetch_assoc();
                    if ($row) {
                        // Access the value
                        $_SESSION['username'] = $row['name'];
                        $level = "SELECT level from Users where id = '$id'";
                        $resultOfLevel = $conn->query($level);
                        if ($resultOfLevel) {
                            // Fetch the single value
                            $row1 = $resultOfLevel->fetch_assoc();
                            if ($row1) {
                                $_SESSION['userLevel'] = $row1['level'];
                                header('Location: home.php');
                            }
                        }
                    }
                }
            }
        }
    } else {
        $_SESSION['userid'] = null;
        echo 'Invalid username and password';
    }
    //$conn->close();
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
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto w-auto" src="Photos/logo.png" alt="Your Company" style="width: 25%; height: 25%">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Log in to your account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="login.php" method="POST">
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" name="email" placeholder="Enter your email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                </div>
                <div class="mt-2">
                    <input id="password" placeholder="Enter your password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 pl-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Log in</button>
            </div>
        </form>
    </div>
</div>
</body>
<?php
footer();
?>

