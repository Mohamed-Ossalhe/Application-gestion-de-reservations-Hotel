
// const roomType = document.getElementById("room-type").value;
// const suiteType = document.getElementById("suite-type").value;
// const check_in_date = document.getElementById("check_in_date").value;
// const check_out_date = document.getElementById("check_out_date").value;



// searchForm.submit(function(event) {
    //     event.preventDefault();
    //     console.log(roomType, suiteType, check_in_date, check_out_date)
    // })
    
function submitSearch(event) {
    event.preventDefault();
    let html = "";
    const content = $(".rooms-wrapper");
    // content = "";
    const roomType = $("#room-type").val();
    const suiteType = $("#suite-type").val();
    const check_in_date = $("#check_in_date").val();
    const check_out_date = $("#check_out_date").val();
    // console.log(roomType, suiteType, check_in_date, check_out_date)
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
            // html = `<div class="rooms-wrapper grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-7 gap-x-10 gap-y-12">`;
            if(responseJSON.length !== 0) {
                // ? finished!!!
                responseJSON.forEach((item, index)=>{
                    let dataSuiteType = (item.suite_type !== null) ? "Suite Type: " + item.suite_type : "" ;
                    html += `
                    <div class="card bg-secondary-clr">
                        <img src="http://localhost/Application-gestion-de-reservations-Hotel/public/assets/img/rooms/${item.room_image}" alt="" class="w-full">
                        <div class="card-text text-white p-3">
                            <h1 class="wilkysta-font text-3xl">${item.room_heading}</h1>
                            <div class="info montserrat-font flex items-center gap-4 text-sm my-2">
                                <p>Capacity: ${item.capacity}</p>
                                <i class="bx bxs-circle text-xs text-gray-400"></i>
                                <p>Room Type: ${item.room_type}</p>
                                <i class="bx bxs-circle text-xs text-gray-400"></i>
                                <p>${dataSuiteType}</p>
                            </div>
                            <a href="#" class="wilkysta-font uppercase text-lg underline decoration-dotted">see details</a>
                            <hr class="my-2">
                            <div class="price-btn wilkysta-font flex items-center justify-between">
                                <p class="uppercase text-2xl">$<span>${item.room_price}</span>/night</p>
                                <a href="../home/bookRoom/${item.room_id}"><button class="border border-2 border-white py-2 px-5 uppercase hover:bg-white hover:text-black transition">book Now</button></a>
                            </div>
                        </div>
                    </div>`;
                    // html += `<h1>${item.room_id}</h1>`;
                    // console.log(html);
                    console.log(item.room_id);
                });
                // html = "</div>";
            }else {
                // content.html(`<p>No Rooms Available</p>`);
                html += `<h1 class="pl-20">Sorry! No ${suiteType} Rooms Available for the moment</h1>`;
            }
            content.html(html);
            // console.log("responce")
            // console.log(responce)
        },
        error: function(error) {
            console.log(error);
        }
    })
    console.log("submite")
}

