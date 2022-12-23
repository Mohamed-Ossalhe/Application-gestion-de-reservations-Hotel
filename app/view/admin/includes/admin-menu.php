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
<body class="bg-main-clr flex items-start h-screen">
    <!-- side menu start -->
    <aside class=" relative md:w-80 sidebar bg-secondary-clr w-full montserrat-font px-4 h-full">
        <div class="brand w-full flex justify-center md:justify-center pt-5 mb-7">
            <img src="<?= BASE_URL?>/public/assets/img/logo-3.png" alt="" class="h-20 md:h-10">
        </div>
        <div class="sidemenu w-full">
            <div class="side-user w-full mb-6 text-white flex items-center gap-4">
                <i class="bx bx-user-circle text-8xl md:text-4xl"></i>
                <div class="user">
                    <h3 class="text-2xl md:text-lg">Admin</h3>
                    <small class="text-sm md:text-xs">Admin</small>
                </div>
            </div>
            <ul class="w-full flex flex-col gap-5 md:gap-3">
                <h4 class="text-secondary-clr text-lg md:text-xs uppercase">reservations</h4>
                <li class="text-2xl md:text-sm capitalize text-white hover:bg-main-clr hover:text-main-clr transition py-2 pl-3">
                    <a href="./Dashbaord_Guests" class="flex gap-4 items-center">
                        <i class="bx bx-user"></i>
                        <span>guests</span>
                    </a>
                </li>
                <li class="text-2xl md:text-sm capitalize text-white hover:bg-main-clr hover:text-main-clr transition py-2 pl-3">
                    <a href="./Dashbaord_Bookings" class="flex gap-4 items-center">
                        <i class="bx bx-book-open"></i>
                        <span>Booking</span>
                    </a>
                </li>
                <h4 class="text-secondary-clr text-lg md:text-xs uppercase">management</h4>
                <li class="text-2xl md:text-sm capitalize text-white hover:bg-main-clr hover:text-main-clr transition py-2 pl-3">
                    <a href="./Dashbaord_Rooms" class="flex gap-4 items-center">
                        <i class="bx bx-hotel"></i>
                        <span>rooms</span>
                    </a>
                </li>
                <li class="text-2xl md:text-sm capitalize text-white hover:bg-main-clr hover:text-main-clr transition py-2 pl-3">
                    <a href="./Dashbaord_Analytics" class="flex gap-4 items-center">
                        <i class='bx bx-bar-chart-square'></i>
                        <span>Analytics</span>
                    </a>
                </li>
                <li class="text-2xl md:text-sm capitalize text-white hover:bg-main-clr hover:text-main-clr transition py-2 pl-3">
                    <a href="./Dashbaord_Settings" class="flex gap-4 items-center">
                        <i class='bx bx-cog'></i>
                        <span>Settings</span>
                    </a>
                </li>
                <li class="text-2xl md:text-sm capitalize text-white hover:bg-main-clr hover:text-main-clr transition py-2 pl-3">
                    <a href="#" class="flex gap-4 items-center">
                        <i class='bx bx-power-off' ></i>
                        <span>log out</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- side menu end -->