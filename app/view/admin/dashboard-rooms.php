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
            <?php 
                if($this->view_data["rooms"]) {
                    foreach($this->view_data["rooms"] as $room){
            ?>
            <!-- ! Card -->
            <div class="card bg-white flex items-center justify-between px-4 py-4 mx-3 mb-4 rounded">
                <div class="room-info flex items-center gap-5 w-3/4">
                    <div class="room-image">
                        <img src="<?= BASE_URL?>/public/assets/img/rooms/<?=$room["room_image"]?>" alt="" class="w-80 h-32">
                    </div>
                    <div class="room-text">
                        <h1 class="wilkysta-font text-xl">Room #<?=$room["room_id"]?></h1>
                        <p class="text-sm text-gray-500 my-2">
                            <?=$room["room_description"]?>
                        </p>
                        <ul class="flex items-center gap-8 text-secondary-clr">
                            <li>Room Type: <?=$room["room_type"]?></li>
                            <?php if($room["suite_type"] !== null):?>
                                <li>Suite Type: <?=$room["suite_type"]?></li>
                            <?php else:?>
                                <li></li>
                            <?php endif;?>
                            <li>Capacity: <?=$room["capacity"]?></li>
                        </ul>
                    </div>
                </div>
                <!-- operations & price -->
                <div class="opeartions-price flex flex-col items-end w-1/4">
                    <!-- operations -->
                    <div class="operation">
                        <ul class="py-1 flex items-center text-sm text-gray-700">
                            <li>
                                <a href="../admin/updateRoom/<?=$room["room_id"]?>" class="block py-2 px-2 hover:bg-gray-100 rounded text-2xl dark:hover:bg-gray-600 dark:hover:text-white"><i class='bx bx-edit' ></i></a>
                            </li>
                            <li>
                                <a href="../admin/delete_Room/<?=$room["room_id"]?>" class="block py-2 px-2 hover:bg-gray-100 rounded text-2xl dark:hover:bg-gray-600 dark:hover:text-white"><i class='bx bx-trash-alt' ></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- price -->
                    <strong class="wilkysta-font text-2xl mt-7">$<?=$room["room_price"]?>/night</strong>
                </div>
            </div>
            <?php 
                    }
                }
            ?>
        </div>
    </div>
    <!-- dashboard content end -->
    <?php include 'includes/admin-footer.php'?>