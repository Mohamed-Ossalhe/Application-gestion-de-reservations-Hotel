<?php include 'includes/admin-menu.php'?>
<!-- dashboard content start -->
    <div class="main-content h-full relative w-full md:w-full">
        <header class="header flex items-center justify-between px-2 py-4 mb-10">
            <div class="flex items-center gap-5">
                <div class="side-menu-btn z-20 cursor-pointer bg-white h-10 w-10 flex items-center justify-center text-2xl transition"><i class='bx bx-chevrons-left'></i></div>
                <h1 class="capitalize text-3xl font-bold">hotel rooms</h1>
            </div>
            <a href="../admin/addRoom">
                <button class="add-room py-2 px-6 bg-black text-white rounded flex items-center gap-2 hover:bg-white hover:text-black transition">
                    <i class='bx bx-plus'></i>
                    Add Room
                </button>
            </a>
        </header>
        <div class="content overflow-y-auto h-4/5">
            <!-- ! Card -->
            <div class="card bg-white flex items-center justify-between px-4 py-4 mx-3 mb-4 rounded">
                <div class="room-info flex items-center gap-5 w-3/4">
                    <div class="room-image">
                        <img src="<?= BASE_URL?>/public/assets/img/bed-1.jpg" alt="" class="w-80">
                    </div>
                    <div class="room-text">
                        <h1 class="wilkysta-font text-xl">Room #2309</h1>
                        <p class="text-sm text-gray-500 my-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                        </p>
                        <ul class="flex items-center gap-8 text-secondary-clr">
                            <li>2 beds</li>
                            <li>1 bathroom</li>
                            <li>balcony</li>
                        </ul>
                    </div>
                </div>
                <!-- operations & price -->
                <div class="opeartions-price flex flex-col items-end w-1/4">
                    <!-- operations -->
                    <div class="operation">
                        <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded hover:bg-gray-100 focus:outline-none" type="button"> 
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                        </button>
                        
                        <!-- Dropdown menu -->
                        <div id="dropdownDots" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
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
                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated link</a>
                            </div>
                        </div>
                    </div>
                    <!-- price -->
                    <strong class="wilkysta-font text-2xl mt-7">$200/night</strong>
                </div>
            </div>
            <!-- ! Card -->
            <div class="card bg-white flex items-center justify-between px-4 py-4 mx-3 mb-4 rounded">
                <div class="room-info flex items-center gap-5 w-3/4">
                    <div class="room-image">
                        <img src="<?= BASE_URL?>/public/assets/img/bed-1.jpg" alt="" class="w-80">
                    </div>
                    <div class="room-text">
                        <h1 class="wilkysta-font text-xl">Room #2309</h1>
                        <p class="text-sm text-gray-500 my-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                        </p>
                        <ul class="flex items-center gap-8 text-secondary-clr">
                            <li>2 beds</li>
                            <li>1 bathroom</li>
                            <li>balcony</li>
                        </ul>
                    </div>
                </div>
                <!-- operations & price -->
                <div class="opeartions-price flex flex-col items-end w-1/4">
                    <!-- operations -->
                    <div class="operation">
                        <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded hover:bg-gray-100 focus:outline-none" type="button"> 
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                        </button>
                        
                        <!-- Dropdown menu -->
                        <div id="dropdownDots" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
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
                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated link</a>
                            </div>
                        </div>
                    </div>
                    <!-- price -->
                    <strong class="wilkysta-font text-2xl mt-7">$200/night</strong>
                </div>
            </div>
        </div>
    </div>
    <!-- dashboard content end -->
    <?php include 'includes/admin-footer.php'?>