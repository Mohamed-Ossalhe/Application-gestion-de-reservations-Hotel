<?php require_once "includes/client-menu.php"?>
<!-- dashboard content start -->
<div class="main-content h-full relative w-full md:w-full">
        <header class="header flex items-center gap-5 px-2 py-4 mb-10">
            <h1 class="capitalize text-3xl font-bold">reservation guests</h1>
        </header>
        <div class="content overflow-y-auto h-4/5">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Guests ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Guest First Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Guest Last Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Guests Birth Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach($this->view_data["guests"] as $guest){?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?=$i++?>
                                </th>
                                <td class="px-6 py-4">
                                    <?=$guest["first_name"]?>
                                </td>
                                <td class="px-6 py-4">
                                    <?=$guest["last_name"]?>
                                </td>
                                <td class="px-6 py-4">
                                    <?=$guest["guest_birth_date"]?>
                                </td>
                                <td class="px-6 py-4 flex gap-3">
                                    <a href="#" class="font-medium text-2xl text-secondary-clr"><i class="bx bx-edit"></i></a>
                                    <a href="#" class="font-medium text-2xl text-secondary-clr"><i class="bx bx-trash"></i></a>
                                </td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require_once "includes/footer.php"?>