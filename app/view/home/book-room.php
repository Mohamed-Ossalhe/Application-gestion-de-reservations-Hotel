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
    <?php $roomDetails = $this->view_data["roomDetails"];?>
    <a href="../rooms"><button class="py-2 px-4 border border-2 border-black text-black mt-4 rounded hover:bg-black hover:text-white transition">Go Back</button></a>
    <div class="infos bg-orange-100 my-5 py-4 rounded drop-shadow-xl flex items-start justify-evenly">
        <div class="">
            <h2 class="text-2xl font-bold mb-6">Room Info:</h2>
            <div class="room-info flex gap-5">
                <div class="img w-64"><img class="rounded" src="<?=BASE_URL?>/public/assets/img/rooms/<?=$roomDetails["room_image"]?>" alt=""></div>
                <div class="info">
                    <div class="room-number font-medium">Room #<?=$roomDetails["room_id"]?></div>
                    <div class="room-desc text-base break-all w-64"><span class="font-medium">Description:</span> <?=$roomDetails["room_description"]?></div>
                    <div class="room-desc text-base"><span class="font-medium">Room Type:</span> <?=$roomDetails["room_type"]?></div>
                    <div class="room-desc text-base"><?=($roomDetails["suite_type"] !== null) ? "<span class=\"font-medium\">Suite Type:</span> ".$roomDetails["suite_type"] : ''?></div>
                    <div class="capacity text-base"><span class="font-medium">Capacity:</span><?=$roomDetails["capacity"]?></div>
                    <div class="price text-xl my-3"><span class="font-medium">Price:</span> $<?=$roomDetails["room_price"]?>/night</div>
                </div>
            </div>
        </div>
        <div class="client-info">
            <h2 class="text-2xl font-bold mb-6">Client Info:</h2>
            <div class="client-name"><span class="font-medium">Client Name:</span> <?=$_SESSION["username"]?></div>
            <div class="client-email"><span class="font-medium">Client Email:</span> <?=$_SESSION["email"]?></div>
        <button class="add-guest hidden py-2 px-4 bg-black text-white hover:bg-transparent hover:text-black hover:border hover:border-2 hover:border-black transition rounded mt-20">Add Guest</button>
        </div>
    </div>
</div>
<!-- form -->
    <div class="book-form hidden container mx-auto px-96 h-screen">
        <form method="post" class="h-full form">
            <input type="submit" value="Add Guests" class="py-2 px-4 bg-black text-white rounded">
        </form>
    </div>
    <script>
        let formData = [];
        let capacity = document.querySelector(".capacity").textContent;
        let guestsFormDiv = document.querySelector(".book-form");
        let guestsForm = document.querySelector(".form");
        let addGuestBtn = document.querySelector(".add-guest");
        let capacityNum = parseInt(capacity.charAt(9));
        let guestsAdded = 0;
        if(capacityNum > 1) {
            addGuestBtn.classList.remove("hidden");
        }else {
            addGuestBtn.classList.add("hidden");
        }
            addGuestBtn.addEventListener("click", ()=>{
                if(guestsAdded === capacityNum-1) {
                    addGuestBtn.classList.add("hidden");
                    return;
                }
                addGuestForm();
                guestsAdded++;
            });
        function addGuestForm() {
            let guestForm = `
            <div>Guest n°: ${guestsAdded+1}</div>
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
                    <input id="date-of-birth" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Select date">
                </div>
            </div>`;
            guestsFormDiv.classList.remove("hidden");
            guestsForm.insertAdjacentHTML("afterbegin", guestForm);
            let guestFirstName = document.querySelector("#first-name");
            let guestLastName = document.querySelector("#last-name");
            let guestBirthDate = document.querySelector("#date-of-birth");
            guestsForm.addEventListener("submit", (e)=>{
                e.preventDefault();
                let guestData = {
                    "firstName": guestFirstName.value,
                    "lastName": guestLastName.value,
                    "birthDate": guestBirthDate.value
                }
            })
        }
        </script>
    <!-- ! end hero -->
    <?php include 'includes/footer.php'?>