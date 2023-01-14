<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pestana :: Admin Login</title>
    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- flowbite -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- core css -->
    <link rel="stylesheet" href="<?= BASE_URL?>/public/assets/css/core.css">
</head>
<body>
    <div class="container flex items-center justify-center h-screen py-7">
        <div class="log-in-form mx-auto w-1/2 h-full ">
            <div class="flex flex-col items-center text-center">
                <a href="./"><img src="<?= BASE_URL?>/public/assets/img/logo-1.png" alt="" class=""></a>
                <h2 class="text-2xl font-medium my-5"><span class="montserrat-font">AdminPanel</span></h2>
            </div>
            <form class="mt-20 flex flex-col items-center" action="../admin/LogIn" method="POST">
                <p class="text-red-600 warn"><?php echo $this->view_data["error"]?></p>
                <div class="relative z-0 mb-6 w-full md:w-3/5 group">
                    <input type="email" name="email" id="floating_email" class="form-inputs block py-2.5 px-0 w-full text-sm text-main-clr bg-transparent border-0 border-b-2 border-color border-seco appearance-none focus:outline-none focus:ring-0 focus:border-clr peer" placeholder=" " required/>
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-secondary-clr peer-focus:text-secondary-clr peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
                    <p class="email-error error"></p>
                </div>
                <div class="relative z-0 mb-6 w-full md:w-3/5 group">
                    <input type="password" name="password" id="floating_password" class="form-inputs block py-2.5 px-0 w-full text-sm text-main-clr bg-transparent border-0 border-b-2 border-color border-seco appearance-none focus:outline-none focus:ring-0 focus:border-clr peer" placeholder=" " required />
                    <i class='bx absolute bx-hide hide translate-x-72 md:translate-x-96 -translate-y-8 text-xl cursor-pointer'></i>
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-secondary-clr peer-focus:text-secondary-clr peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                    <p class="password-error error"></p>
                </div>
                <div class="flex items-center justify-between flex-col md:flex-row w-full md:w-3/5 mt-20">
                    <a href="../home/" class="underline decoration-dotted">Go Back To Home?</a>
                    <button type="submit" id="submit" name="submit" class="text-white bg-black transition border border-2 border-main-clr hover:bg-white hover:text-black hover:border-main-clr focus:outline-none font-medium text-sm w-full sm:w-auto px-7 py-2.5 text-center order-first md:order-last mb-4 md:mb-0">Log in</button>
                </div>
            </form>
        </div>
    </div>
<?php include 'includes/admin-footer.php';?>