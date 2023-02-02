let html = "";
const content = $(".rooms-wrapper");

$(document).ready(() => {
    loadAllRooms();
});

function submitSearch(event) {
    event.preventDefault();
    const roomType = $("#room-type").val();
    const suiteType = $("#suite-type").val();
    const check_in_date = $("#check_in_date").val();
    const check_out_date = $("#check_out_date").val();
    if(!localStorage.getItem("date")) {
        localStorage.setItem("date", '{}');
    }
    let date = {
        check_in: check_in_date,
        check_out: check_out_date
    };
    localStorage.setItem("date", JSON.stringify(date));
    $.ajax({
        url: 'http://localhost/Application-gestion-de-reservations-Hotel/public/home/searchRoom',
        type: 'POST',
        data: {
            room_type: roomType,
            suite_type: suiteType,
            check_in: check_in_date,
            check_out: check_out_date
        },
        success: function(responce) {
            let responseJSON = $.parseJSON(responce);
            console.log(responseJSON);
            if(responseJSON.length !== 0) {
                responseJSON.forEach((item, index)=>{
                    let dataSuiteType = (item.suite_type !== null) ? "Suite Type: " + item.suite_type : "" ;
                    html += `
                    <div class="card bg-secondary-clr rounded">
                        <img src="http://localhost/Application-gestion-de-reservations-Hotel/public/assets/img/rooms/${item.room_image}" alt="" class="w-full">
                        <div class="card-text text-white p-4">
                            <h1 class="font-wilkysta text-3xl">${item.room_heading}</h1>
                            <div class="info font-montserrat flex items-center gap-4 text-sm my-2">
                                <p>Capacity: ${item.capacity}</p>
                                <i class="bx bxs-circle text-xs text-gray-400"></i>
                                <p>Room Type: ${item.room_type}</p>
                                <i class="bx bxs-circle text-xs text-gray-400"></i>
                                <p>${dataSuiteType}</p>
                            </div>
                            <a href="#" class="font-wilkysta uppercase text-lg underline decoration-dotted">see details</a>
                            <hr class="my-2">
                            <div class="price-btn font-wilkysta flex items-center justify-between">
                                <p class="uppercase text-2xl">$<span>${item.room_price}</span>/night</p>
                                <a href="../home/bookRoom/${item.room_id}"><button class="border-2 border-white py-2 px-5 uppercase hover:bg-white hover:text-black transition">book Now</button></a>
                            </div>
                        </div>
                    </div>`;
                });
            }else {
                if(roomType === "all") {
                    loadAllRooms();
                }else {
                    html += `<h1 class="pl-20">Sorry! No ${suiteType} Rooms Available for the moment</h1>`;
                }
            }
            content.html(html);
            html = "";
        },
        error: function(error) {
            console.log(error);
        }
    });
}

function loadAllRooms() {
    $.ajax({
        url: 'http://localhost/Application-gestion-de-reservations-Hotel/public/home/display_Rooms',
        type: 'GET',
        success: function(responce) {
            let responseJSON = $.parseJSON(responce);
            if(responseJSON.length !== 0) {
                responseJSON.forEach((item, index)=>{
                    let dataSuiteType = (item.suite_type !== null) ? "Suite Type: " + item.suite_type : "" ;
                    html += `
                    <div class="card bg-secondary-clr rounded">
                        <img src="http://localhost/Application-gestion-de-reservations-Hotel/public/assets/img/rooms/${item.room_image}" alt="" class="w-full rounded-t-full">
                        <div class="card-text text-white p-4">
                            <h1 class="font-wilkysta text-3xl">${item.room_heading}</h1>
                            <div class="info font-montserrat flex items-center gap-4 text-sm my-2">
                                <p>Capacity: ${item.capacity}</p>
                                <i class="bx bxs-circle text-xs text-gray-400"></i>
                                <p>Room Type: ${item.room_type}</p>
                                <i class="bx bxs-circle text-xs text-gray-400"></i>
                                <p>${dataSuiteType}</p>
                            </div>
                            <a href="#" class="font-wilkysta uppercase text-lg underline decoration-dotted">see details</a>
                            <hr class="my-2">
                            <div class="price-btn font-wilkysta flex items-center justify-between">
                                <p class="uppercase text-2xl">$<span>${item.room_price}</span>/night</p>
                                <a href="../home/bookRoom/${item.room_id}"><button class="border-2 border-white py-2 px-5 uppercase hover:bg-white hover:text-black transition">book Now</button></a>
                            </div>
                        </div>
                    </div>`;
                });
            }else {
                html += `<h1 class="pl-20">Sorry! No Rooms Available for the moment</h1>`;
            }
            content.html(html);
            html = "";
        },
        error: function(error) {
            console.log(error);
        }
    });
}