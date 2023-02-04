<?php include 'includes/client-menu.php'?>
<!-- dashboard content start -->
    <div class="main-content h-full relative w-full md:w-full">
        <header class="header flex items-center gap-5 px-2 py-4 mb-10">
            <h1 class="capitalize text-3xl font-bold">Client reservations</h1>
        </header>
        <div class="content overflow-y-auto h-4/5 px-20">
            <?php $client = $this->view_data["client"]?>
            <form action="../client/updateClientInfo" method="POST" class="pt-12">
                <p class="text-red-600"><?php echo $this->view_data["error"]?></p>
                <div class="relative z-0 mb-6 w-full md:w-4/5 group">
                    <input type="email" name="email" id="floating_email" class="form-inputs block py-2.5 px-0 w-full text-sm text-secondary-clr bg-transparent border-0 border-b-2 border-color border-seco appearance-none focus:outline-none focus:ring-0 focus:border-clr peer" value="<?=$client["email"]?>" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-accent-clr peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
                    <p class="email-error error"></p>
                </div>
                <div class="relative z-0 mb-6 w-full md:w-4/5 group">
                    <input type="password" name="password" id="floating_password" class="form-inputs block py-2.5 px-0 w-full text-sm text-secondary-clr bg-transparent border-0 border-b-2 border-color border-seco appearance-none focus:outline-none focus:ring-0 focus:border-clr peer" value="<?=$client["password"]?>" placeholder=" " required />
                    <i class='bx absolute bx-hide hide translate-x-72 md:translate-x-96 -translate-y-8 text-xl cursor-pointer'></i>
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-accent-clr peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                    <p class="password-error error"></p>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6 w-full md:w-4/5">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="first_name" id="floating_first_name" class="form-inputs block py-2.5 px-0 w-full text-sm text-secondary-clr bg-transparent border-0 border-b-2 border-color border-seco appearance-none focus:outline-none focus:ring-0 focus:border-clr peer" value="<?=$client["first_name"]?>" placeholder=" " required />
                        <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-accent-clr peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
                        <p class="first_name-error error"></p>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="last_name" id="floating_last_name" class="form-inputs block py-2.5 px-0 w-full text-sm text-secondary-clr bg-transparent border-0 border-b-2 border-color border-seco appearance-none focus:outline-none focus:ring-0 focus:border-clr peer" value="<?=$client["last_name"]?>" placeholder=" " required />
                        <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-accent-clr peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
                        <p class="last_name-error error"></p>
                    </div>
                </div>
                <div class="relative z-0 mb-6 w-full md:w-4/5 group">
                    <input type="tel" name="phone_n" id="floating_phone" class="form-inputs block py-2.5 px-0 w-full text-sm text-secondary-clr bg-transparent border-0 border-b-2 border-color border-seco appearance-none focus:outline-none focus:ring-0 focus:border-clr peer" value="<?=$client["phone_number"]?>" placeholder=" " required />
                    <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-accent-clr peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number</label>
                    <p class="phone_n-error error"></p>
                </div>
                <div class="flex items-center justify-between flex-col md:flex-row w-full md:w-4/5">
                    <button type="submit" name="submit" id="submit" class="text-white bg-black transition border-2 border-secondary-clr hover:bg-white hover:text-black hover:border-main-clr focus:outline-none font-medium text-sm w-full sm:w-auto px-7 py-2.5 text-center order-first md:order-last mb-4 md:mb-0">Update</button>
                </div>
            </form>
        </div>
    </div>
<?php require_once "includes/footer.php"?>