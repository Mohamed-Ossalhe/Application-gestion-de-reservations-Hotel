<?php include 'includes/admin-menu.php'?>
<!-- dashboard content start -->
    <div class="main-content h-full relative w-full md:w-full">
        <header class="header flex items-center gap-5 px-2 py-4 mb-10">
            <div class="side-menu-btn cursor-pointer bg-white h-10 w-10 flex items-center justify-center text-2xl transition"><i class='bx bx-chevrons-left'></i></div>
            <h1 class="capitalize text-3xl font-bold">hotel guests</h1>
        </header>
        <div class="content overflow-y-auto h-4/5">
            <!-- ! Card -->
            <div class="card bg-white flex items-center justify-between px-4 py-4 mx-3 mb-4 rounded">
                <div class="flex items-center gap-7">
                    <div class="id text-lg text-gray-500">1</div>
                    <div class="user-name flex items-center gap-3">
                        <i class="bx bx-user-circle text-2xl text-secondary-clr"></i>
                        <div class="name text-xl">John Doe</div>
                    </div>
                </div>
                <!-- info dorpdown -->
                <div class="info-dropdown">
                    <button id="states-button" data-dropdown-toggle="dropdown-states" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-main-clr bg-gray-100 rounded hover:bg-gray-200 focus:outline-none" type="button">
                        <i class='bx bx-file-blank text-xl'></i>
                        <span class="text-md mx-4">Guest Info</span>
                        <i class='bx bx-chevron-down text-lg'></i>
                    </button>
                    <div id="dropdown-states" style="transform: translateX(0) !important;" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-full dark:bg-gray-700">
                        <div class="overflow-x-auto relative">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="py-3 px-6">
                                            Product name
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Color
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Category
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Price
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="py-4 px-6">
                                            Sliver
                                        </td>
                                        <td class="py-4 px-6">
                                            Laptop
                                        </td>
                                        <td class="py-4 px-6">
                                            $2999
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Microsoft Surface Pro
                                        </th>
                                        <td class="py-4 px-6">
                                            White
                                        </td>
                                        <td class="py-4 px-6">
                                            Laptop PC
                                        </td>
                                        <td class="py-4 px-6">
                                            $1999
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Magic Mouse 2
                                        </th>
                                        <td class="py-4 px-6">
                                            Black
                                        </td>
                                        <td class="py-4 px-6">
                                            Accessories
                                        </td>
                                        <td class="py-4 px-6">
                                            $99
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="operations text-2xl cursor-pointer">
                    <!-- <i class="bx bx-cog"></i> -->
                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded hover:bg-gray-100 focus:outline-none" type="button"> 
                        <i class="bx bx-cog text-2xl"></i>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- dashboard content end -->
    <?php include 'includes/admin-footer.php'?>