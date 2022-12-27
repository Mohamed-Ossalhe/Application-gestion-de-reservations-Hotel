<?php include 'includes/admin-menu.php'?>
<!-- dashboard content start -->
    <div class="main-content h-full relative w-full md:w-full">
        <header class="header flex items-center gap-5 px-2 py-4 mb-10">
            <div class="side-menu-btn z-20 cursor-pointer bg-white h-10 w-10 flex items-center justify-center text-2xl transition"><i class='bx bx-chevrons-left'></i></div>
            <h1 class="capitalize text-3xl font-bold">hotel Settings</h1>
        </header>
        <div class="content overflow-y-auto h-4/5 mt-20 px-5 md:pl-12">
            <?php
            $data = $this->view_data["adminData"];?>
            <form class="md:w-3/5 pt-4" method="POST" action="#">
                <div class="relative z-0 mb-6 w-full md:w-4/5 group">
                    <input type="email" name="floating_email" id="floating_email" value="<?= $data["admin_email"]?>" class="block py-2.5 px-0 w-full text-sm text-main-clr bg-transparent border-0 border-b-2 border-color border-seco appearance-none focus:outline-none focus:ring-0 focus:border-clr peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-secondary-clr peer-focus:text-secondary-clr peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
                </div>
                <div class="relative z-0 mb-6 w-full md:w-4/5 group">
                    <input type="password" name="floating_password" id="floating_password" value="<?= $data["admin_password"]?>" class="block py-2.5 px-0 w-full text-sm text-main-clr bg-transparent border-0 border-b-2 border-color border-seco appearance-none focus:outline-none focus:ring-0 focus:border-clr peer" placeholder=" " required />
                    <i class='bx absolute bx-hide hide translate-x-72 md:translate-x-96 -translate-y-8 text-xl cursor-pointer'></i>
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-secondary-clr peer-focus:text-secondary-clr peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                </div>
                <div class="relative z-0 mb-6 w-full md:w-4/5 group">
                    <input type="text" name="floating_first_name" id="floating_first_name" value="<?= $data["admin_name"]?>" class="block py-2.5 px-0 w-full text-sm text-main-clr bg-transparent border-0 border-b-2 border-color border-seco appearance-none focus:outline-none focus:ring-0 focus:border-clr peer" placeholder=" " required />
                    <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-secondary-clr peer-focus:text-secondary-clr peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Full name</label>
                </div>
                <div class="flex items-center justify-between flex-col md:flex-row w-full md:w-4/5">
                    <button type="submit" class="w-full bg-black text-white hover:bg-white hover:text-black transition py-3 px-5">Update</button>
                </div>
            </form>
        </div>
    </div>
    <!-- dashboard content end -->
    <?php include 'includes/admin-footer.php'?>