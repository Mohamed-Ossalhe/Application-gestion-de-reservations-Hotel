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
<body>
    
    <div class="container mx-auto flex items-center flex-col justify-center h-screen w-screen text-black">
        <header class="flex items-center justify-center w-96">
            <h1 class="text-2xl uppercase font-bold">Add Room</h1>
        </header>
        <form class="w-96" method="POST">
            <div class="mb-3">
                <label for="text" class="block mb-2 text-sm font-medium">Room Number</label>
                <input type="text" id="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Room Number" required>
            </div>
            <div class="mb-3">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Room Description</label>
                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Room Description"></textarea>
            </div>
            
            <div class="flex items-center gap-5">
                <div class="mb-3 w-full">
                    <label for="room-type" class="block mb-2 text-sm font-medium text-gray-900">Select Room Type</label>
                    <select id="room-type" name="room_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="single-bed">Single Bed</option>
                        <option value="double-bed">Double Bed</option>
                        <option value="suite">Suite</option>
                    </select>
                </div>

                <div class="mb-3 suite-type w-full">
                    <label for="suite-type" class="block mb-2 text-sm font-medium text-gray-900">Select Suite Type</label>
                    <select id="suite-type" name="suite-type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="1">Standard suite room</option>
                        <option value="2">Junior Suite</option>
                        <option value="3">Presidential suite</option>
                        <option value="4"> Penthouse suites</option>
                        <option value="4">Honeymoon suite</option>
                        <option value="4">Honeymoon suite</option>
                        <option value="4">Bridal suite</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="price" class="block mb-2 text-sm font-medium">Room Price / Night</label>
                <input type="number" id="price" min="0" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Room Price" required>
            </div>

            <div class="mb-3">
                <label class="block mb-2 text-sm font-medium" for="file_input">Upload file</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" id="file_input" type="file">
            </div>
            <div class="btns flex items-center justify-between">
                <a href="../admin/Dashbaord_Rooms">
                    <button type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 text-center">Cancel</button>
                </a>
                <button type="submit" name="submit" class="text-white bg-black hover:bg-black-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save Room</button>
            </div>
        </form>
    </div>

<?php include 'includes/admin-footer.php';?>