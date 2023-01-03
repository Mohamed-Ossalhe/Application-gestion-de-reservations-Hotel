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
<!-- ! start hero -->
<!-- info -->
<div class="container mx-auto px-20">
    <div class="infos bg-amber-100 my-5 py-4 rounded drop-shadow-xl flex items-start justify-evenly">
        <div class="">
            <h2 class="text-2xl font-bold mb-6">Room Info:</h2>
            <div class="room-info flex gap-5">
                <div class="img w-52"><img class="rounded" src="<?=BASE_URL?>/public/assets/img/rooms/pexels-pixabay-271618.jpg" alt=""></div>
                <div class="info">
                    <div class="room-number font-medium">Room #19</div>
                    <div class="room-desc text-base">snvksdvjndfkjnvskjfnvojsfdozjefo</div>
                    <div class="capacity text-base">capacity: 3</div>
                    <div class="price text-xl my-3">price: 200/night</div>
                </div>
            </div>
        </div>
        <div class="client-info">
            <h2 class="text-2xl font-bold mb-6">Client Info:</h2>
            <div class="client-name"><span class="font-medium">Client Name:</span> Mohamed Ossalhe</div>
            <div class="client-email"><span class="font-medium">Client Email:</span> mohamed@gmail.com</div>
        </div>
    </div>
</div>
<!-- form -->
    <div class="book-form hidden container mx-auto px-96 h-screen">
        <form method="post" class="h-full">
            <div class="mb-6">
                <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                <input type="text" id="first-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="First Name" required>
            </div>
            <div class="mb-6">
                <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                <input type="text" id="last-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Last Name" required>
            </div>
            
            <div class="mb-6">
                <label for="date-of-birth" class="block mb-2 text-sm font-medium text-gray-900">Birth Date</label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input datepicker id="date-of-birth" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Select date">
                </div>
            </div>
        </form>
    </div>
    <!-- ! end hero -->
<?php include 'includes/footer.php'?>