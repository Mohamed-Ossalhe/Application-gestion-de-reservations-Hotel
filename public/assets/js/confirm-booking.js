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
                console.log(response)
                // location.assign("http://localhost/Application-gestion-de-reservations-Hotel/public/home/rooms");
            },
            error: (error) => {
                console.log(error);
            }
        });
    });
});