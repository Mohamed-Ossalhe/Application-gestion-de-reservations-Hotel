<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pestana :: Log-in</title>
    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- flowbite -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- core css -->
    <link rel="stylesheet" href="<?= BASE_URL?>/public/assets/css/core.css">
</head>
<body class="bg-white">
    <!-- content -->
    <div class="container flex items-center justify-between h-screen montserrat-font">
        <!-- col1 -->
        <div class="log-in-form mx-7 w-full md:w-2/4 p-0 md:pl-8">
            <a href="./"><img src="<?= BASE_URL?>/public/assets/img/logo-1.png" alt="" class="-translate-y-9"></a>
            <h2 class="text-3xl font-medium mb-5 wilkysta-font"><span class="montserrat-font">Hey! </span>Welcome Back to Pestana</h2>
            <form class="mt-20">
                <div class="relative z-0 mb-6 w-full md:w-4/5 group">
                    <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-main-clr bg-transparent border-0 border-b-2 border-color border-seco appearance-none focus:outline-none focus:ring-0 focus:border-clr peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-secondary-clr peer-focus:text-secondary-clr peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
                </div>
                <div class="relative z-0 mb-6 w-full md:w-4/5 group">
                    <input type="password" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-main-clr bg-transparent border-0 border-b-2 border-color border-seco appearance-none focus:outline-none focus:ring-0 focus:border-clr peer" placeholder=" " required />
                    <i class='bx absolute bx-hide hide translate-x-72 md:translate-x-96 -translate-y-8 text-xl cursor-pointer'></i>
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-secondary-clr peer-focus:text-secondary-clr peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                </div>
                <div class="flex items-center justify-between flex-col md:flex-row w-full md:w-4/5 mt-20">
                    <a href="./sign_up" class="underline decoration-dotted">Don't have an account, Sign Up?</a>
                    <button type="submit" class="text-white bg-black transition border border-2 border-main-clr hover:bg-white hover:text-black hover:border-main-clr focus:outline-none font-medium text-sm w-full sm:w-auto px-7 py-2.5 text-center order-first md:order-last mb-4 md:mb-0">Log in</button>
                </div>
            </form>
        </div>
        <!-- col2 -->
        <div class="image h-full w-2/4 order-first hidden md:block">
            <img src="<?= BASE_URL?>/public/assets/img/3.jpg" alt="" class="h-full w-full">
            <p class="capitalize wilkysta-font text-6xl text-white w-11/12 translate-x-4 -translate-y-44">
                giving the best just for you.
                <span class="text-sm block">" CR7 Hotels Chain "</span>
            </p>
        </div>
    </div>
<?php include 'includes/footer.php'?>