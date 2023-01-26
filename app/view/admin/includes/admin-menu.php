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
            <div class="side-user w-full mb-6 text-white flex items-center gap-4">
                <i class="bx bx-user-circle text-8xl md:text-4xl"></i>
                <div class="user">
                    <h3 class="text-2xl md:text-lg"><?php echo $_SESSION["admin_name"];?></h3>
                    <small class="text-sm md:text-xs"><?php echo $_SESSION["admin_email"];?></small>
                </div>
            </div>
            <ul class="w-full flex flex-col gap-5 md:gap-3">
                <h4 class="text-accent-clr text-lg md:text-xs uppercase">reservations</h4>
                <li class="text-2xl md:text-base capitalize text-white hover:bg-accent-clr/30 hover:text-white transition py-2 pl-3">
                    <a href="./Dashbaord_Guests" class="aside-menu-item flex gap-4 items-center">
                        <i class="bx bx-user text-accent-clr"></i>
                        <span>guests</span>
                    </a>
                </li>
                <li class="text-2xl md:text-base capitalize text-white hover:bg-accent-clr/30 hover:text-white transition py-2 pl-3">
                    <a href="./Dashbaord_Bookings" class="aside-menu-item flex gap-4 items-center">
                        <i class="bx bx-book-open text-accent-clr"></i>
                        <span>Booking</span>
                    </a>
                </li>
                <h4 class="text-accent-clr text-lg md:text-xs uppercase">management</h4>
                <li class="text-2xl md:text-base capitalize text-white hover:bg-secondary-clr/30 hover:text-white transition py-2 pl-3">
                    <a href="./Dashbaord_Rooms" class="aside-menu-item flex gap-4 items-center">
                        <i class="bx bx-hotel text-accent-clr"></i>
                        <span>rooms</span>
                    </a>
                </li>
                <li class="text-2xl md:text-base capitalize text-white hover:bg-accent-clr/30 hover:text-white transition py-2 pl-3">
                    <a href="./Dashbaord_Analytics" class="aside-menu-item flex gap-4 items-center">
                        <i class='bx bx-bar-chart-square text-accent-clr'></i>
                        <span>Analytics</span>
                    </a>
                </li>
                <li class="text-2xl md:text-base capitalize text-white hover:bg-accent-clr/30 hover:text-white transition py-2 pl-3">
                    <a href="../home/" class="aside-menu-item flex gap-4 items-center">
                        <i class='bx bx-home text-accent-clr'></i>
                        <span>Client View</span>
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
        </div>
    </aside>
    <!-- side menu end -->