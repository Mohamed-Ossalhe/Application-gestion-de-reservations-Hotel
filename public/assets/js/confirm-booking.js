$(document).ready(()=>{
    $(".confirm-booking").submit((e) => {
        e.preventDefault();
        let guestsTotal = $(".guests-form").children().length;
        let roomId = parseInt($(".booked-room").attr("id"));
        let roomPrice = parseInt($(".room-price").text());
        let date = JSON.parse(localStorage.getItem("date"));
        let checkinDate = new Date(date.check_in).getDate();
        let checkoutDate = new Date(date.check_out).getDate();
        let totalDays = (checkoutDate - checkinDate);
        let totalPrice = (roomPrice * totalDays);
        $.ajax({
            url: "http://localhost/Application-gestion-de-reservations-Hotel/public/client/bookRoom",
            type: "post",
            data: {
                check_in: date.check_in,
                check_out: date.check_out,
                room_id: roomId,
                total_guests: guestsTotal,
                total_price: totalPrice
            },
            success: (response) => {
                let responseParsed = $.parseJSON(response);
                console.log(responseParsed)
                if(responseParsed.booked !== false) {
                    addGuests();
                    $(".book-message").text(responseParsed.message);
                    setTimeout(()=>{
                        $(".book-message").text("");
                    }, 10000);
                    location.assign("http://localhost/Application-gestion-de-reservations-Hotel/public/home/rooms");
                }else {
                    $(".book-message").text(responseParsed.message);
                    setTimeout(()=>{
                        $(".book-message").text("");
                    }, 3000);
                }
            },
            error: (error) => {
                console.log(error);
            }
        });
    });
});

function addGuests() {
    // let guestsForm = $(".add-guests-form");
    let guestsFirstNames = [];
    let guestsLastNames = [];
    let guestsBirthDate = [];
    $(".guest-f-name").each(function() {
        guestsFirstNames.push($(this).val());
    });
    $(".guest-l-name").each(function() {
        guestsLastNames.push($(this).val());
    });
    $(".guest-b-date").each(function() {
        guestsBirthDate.push($(this).val());
    });
    $.ajax({
        url: "http://localhost/Application-gestion-de-reservations-Hotel/public/client/addGuests",
        type: "post",
        data: {
            guestsFnames: guestsFirstNames,
            guestsLnames: guestsLastNames,
            guestsBdates: guestsBirthDate
        },
        success: (response) => {
            console.log(response);
        },
        error: (error) => {
            console.log(error);
        }
    });
}