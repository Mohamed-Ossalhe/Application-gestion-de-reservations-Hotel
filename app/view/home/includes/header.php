<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pestana :: CR7 Hotels</title>
    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- flowbite -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- core css -->
    <link rel="stylesheet" href="<?= BASE_URL?>/public/assets/css/core.css">
</head>
<body class="bg-main-clr">
    <!-- ! start header -->
    <div class="top-bar">
        <div class="container py-1 mx-auto flex items-left lg:items-center flex-col md:flex-row justify-between montserrat-font px-4">
            <div class="info flex items-start md:items-center flex-col md:flex-row text-sm gap-0 md:gap-5">
                <div class="phone flex items-center gap-1">
                    <i class='bx bx-phone text-lg' ></i>
                    <p>+0 123 456 789</p>
                </div>
                <i class='bx bxs-circle text-xs text-secondary-clr hidden md:block' ></i>
                <div class="email flex items-center gap-1">
                    <i class='bx bx-envelope text-lg' ></i>
                    <p>pestana@cr7hotels.com</p>
                </div>
            </div>
            <div class="language flex items-center gap-4">
                <?php if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true):?>
                <div class="profile">
                    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-6 h-6 rounded-full cursor-pointer" src="https://randomuser.me/api/portraits/men/86.jpg" alt="User dropdown">

                    <!-- Dropdown menu -->
                    <div id="userDropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                        <div class="py-3 px-4 text-sm text-gray-900 dark:text-white">
                            <div><?php echo ($_SESSION["username"]) ? $_SESSION["username"] : "no user" ?></div>
                            <div class="font-medium truncate"><?php echo ($_SESSION["email"]) ? $_SESSION["email"] : "no email" ?></div>
                        </div>
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                            <li>
                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <a href="../client/clientLogOut" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                        </div>
                    </div>
                </div>
                <?php else:?>
                    <div></div>
                <?php endif;?>
                <div class="lang flex items-center gap-1 cursor-pointer">
                    <i class='bx bx-globe text-lg' ></i>
                    <p>EN</p>
                </div>
            </div>
        </div>
    </div>
    <nav class="border border-y-2 border-clr px-2 sm:px-4 py-2.5 wilkysta-font">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="./" class="flex items-center">
                <img src="<?= BASE_URL?>/public/assets/img/logo-1.png" class="h-12 mr-3" alt="Flowbite Logo" />
            </a>
            <button data-collapse-toggle="mobile-menu-language-select" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-language-select" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" aria-hidden="true" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 gap-10" id="mobile-menu-language-select">
                <ul class="flex flex-col mt-4 uppercase border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-lg md:font-medium md:border-0">
                    <li>
                        <a href="./" class="block py-2 pl-3 pr-4 text-main-clr md:p-0 hover:text-secondary-clr" aria-current="page">Home</a>
                    </li>
                    <i class='bx bxs-circle text-secondary-clr text-sm hidden md:block' ></i>
                    <li>
                    <a href="./rooms" class="block py-2 pl-3 pr-4 text-main-clr hover:text-secondary-clr md:p-0">Rooms</a>
                    </li>
                    <i class='bx bxs-circle text-secondary-clr text-sm hidden md:block' ></i>
                    <li>
                    <a href="./about" class="block py-2 pl-3 pr-4 text-main-clr hover:text-secondary-clr md:p-0">About</a>
                    </li>
                    <!-- <i class='bx bxs-circle text-secondary-clr text-sm hidden md:block' ></i>
                    <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-main-clr hover:text-secondary-clr md:hover:text-secondary-clr md:p-0">Pricing</a>
                    </li> -->
                    <i class='bx bxs-circle text-secondary-clr text-sm hidden md:block' ></i>
                    <li>
                        <a href="./contact" class="block py-2 pl-3 pr-4 text-main-clr hover:text-secondary-clr md:p-0">Contact</a>
                    </li>
                    <?php if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true):?>
                        <li></li>
                    <?php else:?>
                        <i class='bx bxs-circle text-secondary-clr text-sm hidden md:block' ></i>
                        <li>
                            <a href="./sign_up" class="block py-2 pl-3 pr-4 text-main-clr hover:text-secondary-clr md:p-0">sign up</a>
                        </li>
                    <?php endif;?>
                </ul>
                <a href="<?php echo (isset($_SESSION["logged"]) && $_SESSION["logged"] === true) ? "./rooms" : "./log_in"?>"><button class="uppercase py-2 px-5 border border-2 border-black hover:bg-black hover:text-white transition">book now</button></a>
            </div>
        </div>
    </nav>
    <!-- ! end header -->