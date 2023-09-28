<?php
include "nav.php";
include "footer.php";
session_start();
if (isset($_SESSION['username'])){
    $name = $_SESSION['username'];
    navigationforall("Gallery - Deer.GO",0);
}
else{
    navigationforall("Gallery - Deer.GO",1);
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
    <h1 class="text-3xl font-bold text-center mt-5">Gallery</h1>
    <h1 class="text-l font-bold text-center mt-5">Class 12</h1>
    <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
        <div class="-m-1 flex flex-wrap md:-m-2">
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="gallery/Class12/1.jpg" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="gallery/Class12/2.jpg" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="gallery/Class12/3.jpg" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="gallery/Class12/4.jpg" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="gallery/Class12/5.jpg" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="gallery/Class12/6.jpg" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="gallery/Class12/7.jpg" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="gallery/Class12/8.jpg" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="gallery/Class12/9.jpg" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="gallery/Class12/10.jpg" />
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="gallery/Class12/11.jpg" />
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
<?php
footer();
?>