<?php
function navigationforall($pagename,$check){
    if($check == 0){
    ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $pagename ?></title>
    <nav class="flex items-center justify-between flex-wrap bg-indigo-600 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <img src="Photos/logo.png" alt="Logo" class="h-12 w-12 mr-2"> <!-- Add your logo image source here -->
            <span class="font-semibold text-xl tracking-tight">Deer.GO</span>
        </div>
        <div class="block lg:hidden">
            <button id="mobile-menu-toggle" class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <div id="mobile-menu" class="w-full lg:flex lg:items-center lg:w-auto hidden">
            <div class="text-sm lg:flex-grow">
                <a href="home.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white-900 mr-4">
                    Home
                </a>
                <a href="contact.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                    Contact
                </a>
                <a href="homework.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                    Homework
                </a>
                <a href="chat.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                    Chat
                </a>
                <a href="active_user_backend.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                    Active User
                </a>
                <a href="routine.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                    Routine
                </a>
                <a href="gallery.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                    Gallery
                </a>
                <a href="deerwalkfood.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                    Deerwalk_Food
                </a>
                <a href="qa.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                    Q/A
                </a>
            </div>
            <div>
                <a href="profile.php" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-indigo-600 hover:bg-white mt-4 lg:mt-0">Profile</a>
            </div>
        </div>
    </nav>
        <?php
    }
    else{
        ?>
        <script src="https://cdn.tailwindcss.com"></script>
        <title><?= $pagename ?></title>
        <nav class="flex items-center justify-between flex-wrap bg-indigo-600 p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <img src="Photos/logo.png" alt="Logo" class="h-12 w-12 mr-2"> <!-- Add your logo image source here -->
                <span class="font-semibold text-xl tracking-tight">Deer.GO</span>
            </div>
            <div class="block lg:hidden">
                <button id="mobile-menu-toggle" class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            <div id="mobile-menu" class="w-full lg:flex lg:items-center lg:w-auto hidden">
                <div class="text-sm lg:flex-grow">
                    <a href="home.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white-900 mr-4">
                        Home
                    </a>
                    <a href="routine.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                        Routine
                    </a>
                    <a href="gallery.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                        Gallery
                    </a>
                    <a href="deerwalkfood.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                        Deerwalk_Food
                    </a>
                </div>
                <div>
                    <a href="login.php" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-indigo-600 hover:bg-white mt-4 lg:mt-0">Login</a>
                    <a href="register.php" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-indigo-600 hover:bg-white mt-4 lg:mt-0">Register</a>
                </div>
            </div>
        </nav>
        <?php
    }?>
    <script>
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    <?php
}
?>