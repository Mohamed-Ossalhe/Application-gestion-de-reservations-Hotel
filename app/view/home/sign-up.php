<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pestana :: Log-in</title>
    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- flowbite -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- core css -->
    <link rel="stylesheet" href="<?= BASE_URL?>/public/assets/css/core.css">
</head>
<body class="bg-white">
    <!-- content -->
    <div class="container flex items-center justify-between h-screen md:pl-8 montserrat-font">
        <!-- col1 -->
        <div class="log-in-form mx-7 w-full md:w-2/4">
            <a href="../home/"><img src="<?= BASE_URL?>/public/assets/img/logo-1.png" alt="" class="-translate-y-9"></a>
            <h2 class="text-3xl font-medium mb-5 wilkysta-font"><span class="montserrat-font">Hello! </span>Welcome to Pestana</h2>
            <form action="../client/clientSignUp" method="POST">
                <p class="text-red-600"><?php echo $this->view_data["error"]?></p>
                <div class="relative z-0 mb-6 w-full md:w-4/5 group">
                    <input type="email" name="email" id="floating_email" class="form-inputs block py-2.5 px-0 w-full text-sm text-main-clr bg-transparent border-0 border-b-2 border-color border-seco appearance-none focus:outline-none focus:ring-0 focus:border-clr peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-secondary-clr peer-focus:text-secondary-clr peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
                    <p class="email-error error"></p>
                </div>
                <div class="relative z-0 mb-6 w-full md:w-4/5 group">
                    <input type="password" name="password" id="floating_password" class="form-inputs block py-2.5 px-0 w-full text-sm text-main-clr bg-transparent border-0 border-b-2 border-color border-seco appearance-none focus:outline-none focus:ring-0 focus:border-clr peer" placeholder=" " required />
                    <i class='bx absolute bx-hide hide translate-x-72 md:translate-x-96 -translate-y-8 text-xl cursor-pointer'></i>
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-secondary-clr peer-focus:text-secondary-clr peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                    <p class="pass-error error"></p>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6 w-full md:w-4/5">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="first_name" id="floating_first_name" class="form-inputs block py-2.5 px-0 w-full text-sm text-main-clr bg-transparent border-0 border-b-2 border-color border-seco appearance-none focus:outline-none focus:ring-0 focus:border-clr peer" placeholder=" " required />
                        <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-secondary-clr peer-focus:text-secondary-clr peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
                        <p class="first-n-error error"></p>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="last_name" id="floating_last_name" class="form-inputs block py-2.5 px-0 w-full text-sm text-main-clr bg-transparent border-0 border-b-2 border-color border-seco appearance-none focus:outline-none focus:ring-0 focus:border-clr peer" placeholder=" " required />
                        <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-secondary-clr peer-focus:text-secondary-clr peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
                        <p class="last-n-error error"></p>
                    </div>
                </div>
                <div class="relative z-0 mb-6 w-full md:w-4/5 group">
                    <input type="tel" name="phone_n" id="floating_phone" class="form-inputs block py-2.5 px-0 w-full text-sm text-main-clr bg-transparent border-0 border-b-2 border-color border-seco appearance-none focus:outline-none focus:ring-0 focus:border-clr peer" placeholder=" " required />
                    <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-secondary-clr peer-focus:text-secondary-clr peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number</label>
                    <p class="phone-error error"></p>
                </div>
                <div class="flex items-center justify-between flex-col md:flex-row w-full md:w-4/5">
                    <a href="../home/log_in" class="underline decoration-dotted">Already have an account?</a>
                    <button type="submit" name="submit" id="submit" class="text-white bg-black transition border border-2 border-main-clr hover:bg-white hover:text-black hover:border-main-clr focus:outline-none font-medium text-sm w-full sm:w-auto px-7 py-2.5 text-center order-first md:order-last mb-4 md:mb-0">Sign Up</button>
                </div>
            </form>
        </div>
        <!-- col2 -->
        <div class="image h-full w-2/4 hidden md:block">
            <img src="<?= BASE_URL?>/public/assets/img/2.jpg" alt="" class="h-full w-full">
            <p class="capitalize wilkysta-font text-5xl text-white w-11/12 translate-x-4 -translate-y-44">
                Try Out The CR7 lifstyle with Pestana Hotel.
                <span class="text-sm block">" CR7 Hotels Chain "</span>
            </p>
        </div>
    </div>
<?php include 'includes/footer.php'?>