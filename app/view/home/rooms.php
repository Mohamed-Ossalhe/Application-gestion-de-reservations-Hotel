<?php include 'includes/header.php'?>
    <!-- ! start hero -->
    <div class="hero">
        <div class="container mx-auto">
            <div class="hero-text wilkysta-font text-center mt-9 mb-3">
                <h1 class="capitalize text-4xl md:text-6xl">Release Stress With Our Comfort Rooms</h1>
            </div>
            <div class="hero-search mt-2">
                <!-- search form -->
                <div class="search bg-white w-4/5 mx-auto py-4 px-3 md:translate-y-12 drop-shadow-xl">
                    <form class="flex items-left flex-col md:items-center md:flex-row justify-between md:gap-3" method="POST">
                        <!-- room type -->
                        <div class="input-field mb-4 md:mb-0">
                            <label for="room-type" class="montserrat-font">Room Type</label>
                            <select id="room-type" name="room_type" class="text-main-clr w-full md:w-auto text-sm block p-2.5 mt-2 montserrat-font">
                                <option value="single-bed">Single Bed</option>
                                <option value="double-bed">Double Bed</option>
                                <option value="suite">Suite</option>
                            </select>
                        </div>
                        <!-- suite-type -->
                        <div class="input-field suite-type mb-4 md:mb-0">
                            <label for="suite-type" class=" montserrat-font">Suite Type</label>
                            <select id="suite-type" name="suite_type" class="text-main-clr w-full md:w-auto text-sm block p-2.5 mt-2  montserrat-font">
                                <option>SELECT</option>
                                <option value="Standard">Standard suite room</option>
                                <option value="Junior">Junior Suite</option>
                                <option value="Presidential">Presidential suite</option>
                                <option value="Presidential"> Penthouse suites</option>
                                <option value="Honeymoon">Honeymoon suite</option>
                                <option value="Bridal">Bridal suite</option>
                            </select>
                        </div>
                        <!-- date picker -->
                        <div date-rangepicker class="flex items-left flex-col md:items-center md:flex-row mb-4 md:mb-0">
                            <div class="relative">
                                <label for="start_date" class=" montserrat-font">Check in</label>
                                <input name="start_date" type="text" class="montserrat-font mt-2 text-main-clr text-sm block w-full p-2.5" placeholder="SELECT START DATE">
                            </div>
                            <span class="mx-3 mt-7 text-gray-500 hidden md:block"><i class='bx bxs-right-arrow-alt'></i></span>
                            <div class="relative">
                                <label for="end_date" class=" montserrat-font">Check out</label>
                                <input name="end_date" type="text" class="montserrat-font mt-2 text-main-clr text-sm block w-full p-2.5" placeholder="DELECT END DATE">
                            </div>
                        </div>
                        <!-- room number -->
                        <div class="input-field">
                            <label for="room-number" class="montserrat-font">Guest</label>
                            <select id="room-number" name="capacity" class="text-main-clr w-full md:w-auto text-sm block p-2.5 mt-2 montserrat-font">
                                <option value="1">1 Guest</option>
                                <option value="2">2 Guests</option>
                                <option value="3">3 Guests</option>
                                <option value="4">4 Guests</option>
                                <option value="5">5 Guests</option>
                                <option value="6">6 Guests</option>
                            </select>
                        </div>
                        <input type="submit" name="search" id="searchBtn" value="SEARCH" class="uppercase cursor-pointer mt-8 py-2 px-5 bg-black text-white border border-2 border-black wilkysta-font hover:bg-white hover:text-black transition">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ! end hero -->
    <!-- ! start room section -->
    <div class="rooms-section mt-20">
        <div class="container mx-auto">
            <!-- ? use grid here -->
            <div class="rooms-section grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-7 gap-x-10 gap-y-12">
                <!-- *row -->
                <?php
                $searchedrooms = $this->view_data["rooms"];
                // var_dump($rooms);
                if($searchedrooms > 0) {
                    foreach($searchedrooms as $searchedRoom) {
                ?>
                <!-- card -->
                <div class="card bg-secondary-clr">
                    <img src="<?= BASE_URL?>/public/assets/img/rooms/<?=$searchedRoom["room_image"]?>" alt="" class="w-full">
                    <div class="card-text text-white p-3">
                        <h1 class="wilkysta-font text-3xl"><?=$searchedRoom["room_heading"]?></h1>
                        <div class="info montserrat-font flex items-center gap-4 text-sm my-2">
                            <p>Capacity: <?=$searchedRoom["capacity"]?></p>
                            <i class="bx bxs-circle text-xs text-gray-400"></i>
                            <p>Room Type: <?=$searchedRoom["room_type"]?></p>
                            <i class="bx bxs-circle text-xs text-gray-400"></i>
                            <p><?php echo ($searchedRoom["suite_type"]) ? "Suite Type: ".$searchedRoom["suite_type"] : ""?></p>
                        </div>
                        <a href="#" class="wilkysta-font uppercase text-lg underline decoration-dotted">see details</a>
                        <hr class="my-2">
                        <div class="price-btn wilkysta-font flex items-center justify-between">
                            <p class="uppercase text-2xl">$<span><?=$searchedRoom["room_price"]?></span>/night</p>
                            <a href="<?= (isset($_SESSION["logged"]) && $_SESSION["logged"] === true) ? "../home/bookRoom/".$searchedRoom["room_id"] : "../home/log_in" ?>"><button class="border border-2 border-white py-2 px-5 uppercase hover:bg-white hover:text-black transition">book Now</button></a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }?>
            </div>
        </div>
    </div>
    <!-- ! end room section -->
<?php include 'includes/footer.php'?>