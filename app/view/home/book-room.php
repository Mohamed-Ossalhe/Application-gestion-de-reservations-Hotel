<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pestana :: Log-in</title>
    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- core css -->
    <link rel="stylesheet" href="<?= BASE_URL?>/public/assets/css/core.css">
</head>
<body>
    <!-- ! start hero -->
    <!-- info -->
    <div class="container mx-auto px-20">
        <?php $roomDetails = $this->view_data["roomDetails"];?>
        <a href="../rooms"><button class="py-2 px-4 border border-2 border-black text-black mt-4 rounded hover:bg-black hover:text-white transition">Go Back</button></a>
        <div class="infos bg-orange-100 my-5 py-4 rounded drop-shadow-xl flex items-start justify-evenly">
            <div class="booked-room" id="<?=$roomDetails["room_id"]?>">
                <h2 class="text-2xl font-bold mb-6">Room Info:</h2>
                <div class="room-info flex gap-5">
                    <div class="img w-64"><img class="rounded" src="<?=BASE_URL?>/public/assets/img/rooms/<?=$roomDetails["room_image"]?>" alt=""></div>
                    <div class="info">
                        <div class="room-number font-medium">Room #<?=$roomDetails["room_id"]?></div>
                        <div class="room-desc text-base break-all w-64"><span class="font-medium">Description:</span> <?=$roomDetails["room_description"]?></div>
                        <div class="room-desc text-base"><span class="font-medium">Room Type:</span> <?=$roomDetails["room_type"]?></div>
                        <div class="room-desc text-base"><?=($roomDetails["suite_type"] !== null) ? "<span class=\"font-medium\">Suite Type:</span> ".$roomDetails["suite_type"] : ''?></div>
                        <div class="capacity text-base"><span class="font-medium">Capacity:</span><?=$roomDetails["capacity"]?></div>
                        <div class="price text-xl my-3"><span class="font-medium">Price:</span> $<span class="room-price"><?=$roomDetails["room_price"]?></span>/night</div>
                    </div>
                </div>
            </div>
            <div class="client-info">
                <h2 class="text-2xl font-bold mb-6">Client Info:</h2>
                <div class="client-name"><span class="font-medium">Client Name:</span> <?=$_SESSION["username"]?></div>
                <div class="client-email"><span class="font-medium">Client Email:</span> <?=$_SESSION["email"]?></div>
                <div class="client-email"><span class="font-medium">Client Phone Number:</span> <?=$_SESSION["phone_number"]?></div>
                <div class="book-btns flex items-center gap-3  mt-20">
                    <button class="add-guest hidden py-2 px-4 bg-black text-white border border-2 border-black hover:bg-transparent hover:text-black hover:border hover:border-2 hover:border-black transition rounded">Add Guest</button>
                    <form class="confirm-booking" method="post">
                        <button type="submit" name="try" class="py-2 px-4 bg-black text-white border border-2 border-black rounded hover:bg-transparent hover:text-black hover:border-black transition">Confirm Booking</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- form -->
    <div class="book-form hidden container mx-auto px-96 h-100 my-12">
        <form method="post" class="h-full">
            <div class="guests-form"></div>
            <input type="submit" value="Add Guests" class="py-2 px-4 bg-black text-white rounded">
        </form>
    </div>
    <!-- ! end hero -->
    <?php include 'includes/footer.php'?>