<?php
include "nav.php";
include "footer.php";
navigationforall("Contact - Deer.GO",0);
session_start();
$conn = new mysqli("localhost", "root", "root", "DeerRun");
$id = $_SESSION['userid'];
$name = $_SESSION['username'];
$subject = 0;
$message = 0;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $level = $_SESSION["userLevel"];
    $insertContact = "INSERT INTO contact(id, name, subject, message,level) values ('$id', '$name','$subject','$message','$level')";
    if ($conn->query($insertContact) === TRUE) {
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
    <body>
    <section class="text-gray-600 body-font relative">
        <div class="absolute inset-0 bg-gray-300">
            <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.1512236921644!2d85.342503!3d27.7126168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1970d2e43e4b%3A0x946fac63019d2903!2sDeerwalk%20Institute%20of%20Technology!5e0!3m2!1sen!2snp!4v1694267999568!5m2!1sen!2snp" style=""></iframe>
        </div>
        <div class="container px-5 py-24 mx-auto flex">
            <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback / Contact Us</h2>
                <form action="contact.php" method="post">
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                    <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
                </form>
            </div>
        </div>
    </section>
    </body>
</html>
<?php
footer();
?>