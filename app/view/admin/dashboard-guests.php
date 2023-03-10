<?php include 'includes/admin-menu.php'?>
<!-- dashboard content start -->
    <div class="main-content h-full relative w-full md:w-full">
        <header class="header flex items-center gap-5 px-2 py-4 mb-10">
            <div class="side-menu-btn z-20 cursor-pointer bg-white h-10 w-10 flex items-center justify-center text-2xl transition"><i class='bx bx-chevrons-left'></i></div>
            <h1 class="capitalize text-3xl font-bold">hotel guests</h1>
        </header>
        <div class="content overflow-y-auto h-4/5 px-6">
            <div class="relative">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs bg-black text-white uppercase">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Guest ID
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Full Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Email
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Phone Number
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Operations
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $guests = $this->view_data["guests"];
                    foreach($guests as $guest):?>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?=$guest["client_id"]?>
                            </th>
                            <td class="py-4 px-6">
                                <?=$guest["first_name"].' '.$guest["last_name"]?>
                            </td>
                            <td class="py-4 px-6">
                                <?=$guest["email"]?>
                            </td>
                            <td class="py-4 px-6">
                                <?=$guest["phone_number"]?>
                            </td>
                            <td class="flex justify-center">
                                <div class="operations text-2xl cursor-pointer">
                                    <a href="../admin/deleteClient/<?=$guest["client_id"]?>" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><i class='bx bx-trash-alt'></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>

            
        </div>
    </div>
    <!-- dashboard content end -->
    <?php include 'includes/admin-footer.php'?>