<?php include 'includes/header.php'?>
    <!-- ! start hero -->
    <div class="hero">
        <div class="container mx-auto">
            <div class="hero-text wilkysta-font text-center mb-7">
                <p class="capitalize text-2xl md:text-4xl mt-7 mb-5">welcome to pestana</p>
                <h1 class="capitalize text-4xl md:text-6xl">CR7 Hotels for Moments in Emotions</h1>
            </div>
            <div class="hero-search-image relative mt-3">
                <!-- search form -->
                <div class="search bg-white w-4/5 mx-auto py-4 px-3 md:translate-y-12 drop-shadow-xl">
                    <form action="#" class="flex items-left flex-col md:items-center md:flex-row justify-between md:gap-3">
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
                            <select id="suite-type" name="suite-type" class="text-main-clr w-full md:w-auto text-sm block p-2.5 mt-2  montserrat-font">
                                <option value="1">Standard suite room</option>
                                <option value="2">Junior Suite</option>
                                <option value="3">Presidential suite</option>
                                <option value="4"> Penthouse suites</option>
                                <option value="4">Honeymoon suite</option>
                                <option value="4">Honeymoon suite</option>
                                <option value="4">Bridal suite</option>
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
                            <select id="room-number" name="guest" class="text-main-clr w-full md:w-auto text-sm block p-2.5 mt-2  montserrat-font">
                                <option value="1">1 Adult</option>
                                <option value="2">2 Adults</option>
                                <option value="3">1 Adult, 1 Child</option>
                                <option value="4">2 Adults, 2 Childs</option>
                                <option value="4">2 Adults, 3 Childs</option>
                            </select>
                        </div>
                        <input type="submit" value="SEARCH" class="uppercase cursor-pointer mt-8 py-2 px-5 bg-black text-white border border-2 border-black wilkysta-font hover:bg-white hover:text-black transition">
                    </form>
                </div>
                <div class="image mx-7 hidden md:block">
                    <img src="<?= BASE_URL?>/public/assets/img/1.jpg" class="w-full h-full bg-contain" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- ! end hero -->
<?php include 'includes/footer.php'?>