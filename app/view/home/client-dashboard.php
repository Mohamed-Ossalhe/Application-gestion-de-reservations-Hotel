<?php include 'includes/client-menu.php'?>
<!-- dashboard content start -->
    <div class="main-content h-full relative w-full md:w-full">
        <header class="header flex items-center gap-5 px-2 py-4 mb-10">
            <h1 class="capitalize text-3xl font-bold">Client reservations</h1>
        </header>
        <div class="content overflow-y-auto h-4/5">
            <?php $i = 1; foreach($this->view_data["reservations"] as $reservation){?>
                <!-- ! Card -->
                <div class="card bg-white flex items-center justify-between px-4 py-4 mx-3 mb-4 rounded">
                    <div class="flex items-center gap-12">
                        <div class="id text-lg text-gray-500"><?=$i++?></div>
                        <div class="flex flex-col items-start">
                            <small>Room Number:</small>
                            <div class="user-name flex items-center gap-3">
                                <i class="bx bx-bookmark text-2xl text-secondary-clr"></i>
                                <div class="name text-xl">Room #<?=$reservation["room_id"]?></div>
                            </div>
                        </div>
                        <div class="flex flex-col items-start">
                            <small>Check in:</small>
                            <div class="user-name flex items-center gap-3">
                                <i class="bx bx-time-five text-2xl text-secondary-clr"></i>
                                <div class="name text-xl"><?=$reservation["check_in_date"]?></div>
                            </div>
                        </div>
                        <div class="flex flex-col items-start">
                            <small>Check Out:</small>
                            <div class="user-name flex items-center gap-3">
                                <i class="bx bx-time text-2xl text-secondary-clr"></i>
                                <div class="name text-xl"><?=$reservation["check_out_date"]?></div>
                            </div>
                        </div>
                        <div class="flex flex-col items-start">
                            <small>Total Guests:</small>
                            <div class="user-name flex items-center gap-3">
                                <i class="bx bx-user text-2xl text-secondary-clr"></i>
                                <div class="name text-xl"><?=$reservation["guests_count"]?></div>
                            </div>
                        </div>
                        <div class="flex flex-col items-start">
                            <small>Total Price</small>
                            <div class="user-name flex items-center gap-3">
                                <i class="bx bx-money text-2xl text-secondary-clr"></i>
                                <div class="name text-xl"><?=$reservation["total_price"]?></div>
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
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show Guests</a>
                                </li>
                                <li>
                                    <a class="edit-res-btn block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit Reservation</a>
                                </li>
                                <li>
                                    <a href="<?=BASE_URL?>public/client/cancelReservation/<?=$reservation["reserve_id"]?>" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cancel Reservation</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
<?php require_once "includes/footer.php"?>