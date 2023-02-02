<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pestana :: CR7 Hotels</title>
    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- core css -->
    <link rel="stylesheet" href="<?= BASE_URL?>/public/assets/css/core.css">
</head>
<body class="bg-main-clr flex items-start h-screen font-montserrat">
    <!-- side menu start -->
    <aside class="fixed md:relative z-10 md:w-80 sidebar bg-secondary-clr w-full montserrat-font px-4 h-full">
        <div class="brand w-full flex justify-center md:justify-center pt-5 mb-7">
            <img src="<?= BASE_URL?>/public/assets/img/logo-3.png" alt="" class="h-20 md:h-10">
        </div>
        <div class="sidemenu w-full">
            <ul class="w-full flex flex-col gap-5 md:gap-3">
                <h4 class="text-accent-clr text-lg md:text-xs uppercase">reservations</h4>
                <li class="text-2xl md:text-base capitalize text-white hover:bg-accent-clr/30 hover:text-white transition py-2 pl-3">
                    <a href="./Dashbaord_Guests" class="aside-menu-item flex gap-4 items-center">
                        <i class="bx bx-book-open text-accent-clr"></i>
                        <span>Your Reservations</span>
                    </a>
                </li>
                <h4 class="text-accent-clr text-lg md:text-xs uppercase">Profile Info</h4>
                <li class="text-2xl md:text-base capitalize text-white hover:bg-accent-clr/30 hover:text-white transition py-2 pl-3">
                    <a href="../home/" class="aside-menu-item flex gap-4 items-center">
                        <i class='bx bx-home text-accent-clr'></i>
                        <span>Back to Home</span>
                    </a>
                </li>
                <li class="text-2xl md:text-base capitalize text-white hover:bg-accent-clr/30 hover:text-white transition py-2 pl-3">
                    <a href="./Dashbaord_Settings" class="aside-menu-item flex gap-4 items-center">
                        <i class='bx bx-cog text-accent-clr'></i>
                        <span>Settings</span>
                    </a>
                </li>
                <li class="text-2xl md:text-base capitalize text-white hover:bg-accent-clr/30 hover:text-white transition py-2 pl-3">
                    <a href="../admin/adminLogOut" class="flex gap-4 items-center">
                        <i class='bx bx-power-off text-accent-clr' ></i>
                        <span>log out</span>
                    </a>
                </li>
            </ul>
            <div class="side-user w-full mt-6 text-white flex items-center gap-4">
                <i class="bx bx-user-circle text-8xl md:text-4xl"></i>
                <div class="user">
                    <h3 class="text-2xl md:text-lg">skjdfljksdf</h3>
                    <small class="text-sm md:text-xs">sldkcksd</small>
                </div>
            </div>
        </div>
    </aside>
    <!-- side menu end -->