<?php include 'includes/header.php'?>
    <!-- ! start hero -->
    <div class="hero">
        <div class="container mx-auto">
            <div class="hero-text font-wilkysta text-center mt-9 mb-3">
                <h1 class="capitalize text-4xl md:text-6xl">Release Stress With Our Comfort Rooms</h1>
            </div>
            <div class="hero-search mt-2">
                <!-- search form -->
                <div class="search bg-white w-4/5 mx-auto py-4 px-3 md:translate-y-12 drop-shadow-xl">
                    <form onsubmit="submitSearch(event)" id="search-form" class="flex items-left flex-col md:items-center md:flex-row justify-between md:gap-3" method="POST">
                        <!-- room type -->
                        <div class="input-field mb-4 md:mb-0">
                            <label for="room-type" class="font-montserrat">Room Type</label>
                            <select id="room-type" name="room_type" class="text-secondary-clr w-full md:w-auto text-sm block p-2.5 mt-2 font-montserrat" required>
                                <option value="all">All</option>
                                <option value="single-bed">Single Bed</option>
                                <option value="double-bed">Double Bed</option>
                                <option value="suite">Suite</option>
                            </select>
                        </div>
                        <!-- suite-type -->
                        <div class="input-field suite-type mb-4 md:mb-0">
                            <label for="suite-type" class="font-montserrat">Suite Type</label>
                            <select id="suite-type" name="suite_type" class="text-secondary-clr w-full md:w-auto text-sm block p-2.5 mt-2 font-montserrat">
                                <option value="">SELECT</option>
                                <option value="Standard">Standard suite</option>
                                <option value="Junior">Junior Suite</option>
                                <option value="Presidential">Presidential suite</option>
                                <option value="Penthouse"> Penthouse suites</option>
                                <option value="Honeymoon">Honeymoon suite</option>
                                <option value="Bridal">Bridal suite</option>
                            </select>
                        </div>
                        <!-- date picker -->
                        <div date-rangepicker class="flex items-left flex-col md:items-center md:flex-row mb-4 md:mb-0">
                            <div class="relative">
                                <label for="start_date" class="font-montserrat">Check in</label>
                                <input id="check_in_date" name="start_date" type="text" class="font-montserrat mt-2 text-secondary-clr text-sm block w-full p-2.5" placeholder="SELECT START DATE" required>
                            </div>
                            <span class="mx-3 mt-7 text-gray-500 hidden md:block"><i class='bx bxs-right-arrow-alt'></i></span>
                            <div class="relative">
                                <label for="end_date" class="font-montserrat">Check out</label>
                                <input id="check_out_date" name="end_date" type="text" class="font-montserrat mt-2 text-secondary-clr text-sm block w-full p-2.5" placeholder="DELECT END DATE" required>
                            </div>
                        </div>
                        <!-- room number -->
                        <div class="input-field">
                            <label for="room-number" class="font-montserrat">Guest</label>
                            <select id="room-number" name="capacity" class="text-secondary-clr w-full md:w-auto text-sm block p-2.5 mt-2 font-montserrat">
                                <option value="1">1 Guest</option>
                                <option value="2">2 Guests</option>
                                <option value="3">3 Guests</option>
                                <option value="4">4 Guests</option>
                                <option value="5">5 Guests</option>
                                <option value="6">6 Guests</option>
                            </select>
                        </div>
                        <?php if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true):?>
                            <input type="submit" name="search" id="searchBtn" value="SEARCH" class="uppercase cursor-pointer mt-8 py-2 px-5 bg-black text-white border-2 border-black font-wilkysta hover:bg-white hover:text-black transition">
                        <?php else:?>
                            <a href="../home/log_in" class="uppercase cursor-pointer mt-8 py-2 px-5 bg-black text-white border-2 border-black font-wilkysta hover:bg-white hover:text-black transition">SEARCH</a>
                        <?php endif;?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ! end hero -->
    <!-- ! start room section -->
    <div class="rooms-section mt-20">
        <div class="container mx-auto rooms-available">
            <!-- ? use grid here -->
            <div class="rooms-wrapper grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-7 gap-x-10 gap-y-12">
                <!-- *row -->
                
            </div>
        </div>
    </div>
    <!-- ! end room section -->
<?php include 'includes/footer.php'?>