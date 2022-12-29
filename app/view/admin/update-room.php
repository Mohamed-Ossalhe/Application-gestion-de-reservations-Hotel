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
            <h1 class="text-2xl uppercase font-bold">Update Room</h1>
        </header>
        <p class="error text-red-600">
            <?php echo $this->view_data["error"]?>
        </p>
        <?php $room = $this->view_data["room"];?>
        <form class="w-96" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="heading" class="block mb-2 text-sm font-medium">Room Heading</label>
                <input type="text" value="<?=$room["room_heading"]?>" name="heading" id="heading" min="0" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Room Heading">
            </div>

            <div class="mb-3">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Room Description</label>
                <textarea id="message" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Room Description"><?=$room["room_description"]?></textarea>
            </div>
            
            <div class="flex items-center gap-5">
                <div class="mb-3 w-full">
                    <label for="room-type" class="block mb-2 text-sm font-medium text-gray-900">Select Room Type</label>
                    <select id="room-type" name="room_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="single-bed" <?php echo ($room["room_type"] === "single-bed") ? "selected" : "" ?>>Single Bed</option>
                        <option value="double-bed" <?php echo ($room["room_type"] === "double-bed") ? "selected" : "" ?>>Double Bed</option>
                        <option value="suite" <?php echo ($room["room_type"] === "suite") ? "selected" : "" ?>>Suite</option>
                    </select>
                </div>

                <div class="mb-3 suite-type w-full">
                    <label for="suite-type" class="block mb-2 text-sm font-medium text-gray-900">Select Suite Type</label>
                    <select id="suite-type" name="suite_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Standard" <?php echo ($room["suite_type"] === "Standard") ? "selected" : "" ?>>Standard suite room</option>
                        <option value="Junior" <?php echo ($room["suite_type"] === "Junior") ? "selected" : "" ?>>Junior Suite</option>
                        <option value="Presidential" <?php echo ($room["suite_type"] === "Presidential") ? "selected" : "" ?>>Presidential suite</option>
                        <option value="Penthouse" <?php echo ($room["suite_type"] === "Penthouse") ? "selected" : "" ?>> Penthouse suites</option>
                        <option value="Honeymoon" <?php echo ($room["suite_type"] === "Honeymoon") ? "selected" : "" ?>>Honeymoon suite</option>
                        <option value="Bridal" <?php echo ($room["suite_type"] === "Bridal") ? "selected" : "" ?>>Bridal suite</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="capacity" class="block mb-2 text-sm font-medium">Room Capacity</label>
                <input type="number" value="<?=$room["capacity"]?>" name="capacity" id="capacity" min="0" max="6" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Room Capacity">
            </div>

            <div class="mb-3">
                <label for="price" class="block mb-2 text-sm font-medium">Room Price / Night</label>
                <input type="number" value="<?=$room["room_price"]?>" name="price" id="price" min="0" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Room Price">
            </div>

            <div class="mb-3">
                <label class="block mb-2 text-sm font-medium" for="file_input">Upload file</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" name="image" id="file_input" type="file">
            </div>
            <div class="btns flex items-center justify-between">
                <a href="../../admin/Dashbaord_Rooms">
                    <button type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 text-center">Cancel</button>
                </a>
                <button type="submit" name="submit" class="text-white bg-black hover:bg-black-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save Room</button>
            </div>
        </form>
    </div>

<?php include 'includes/admin-footer.php';?>