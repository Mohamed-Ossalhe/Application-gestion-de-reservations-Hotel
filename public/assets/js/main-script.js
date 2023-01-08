$(document).ready(function() {
    // ! switch Dashbaord sidemenu active class
    const activeDashboardPage = window.location.pathname;
    const dashbaordMenuLinks = $(".aside-menu-item");
    $.each(dashbaordMenuLinks, function(el) {
        if(dashbaordMenuLinks[el].href.includes(`${activeDashboardPage}`)) {
            dashbaordMenuLinks[el].classList.add("side-menu-li-active");
        }
    })
    // ! Dynamic Form using jQuery
    let suiteTypeDiv = $(".suite-type");
    let suiteType = $("#suite-type");
    let roomType = $("#room-type");
    suiteTypeDiv.hide();
    suiteType.attr("disabled", "disabled");
    suiteType.val('');
    if(roomType.val() === "suite") {
        suiteTypeDiv.show();
        suiteType.removeAttr("disabled");
    }else {
        suiteTypeDiv.hide();
        suiteType.attr("disabled", "disabled");
        suiteType.val('');
    }
    roomType.change(function(){
        if(roomType.val() === "suite") {
            suiteTypeDiv.show();
            suiteType.removeAttr("disabled");
        }else {
            suiteTypeDiv.hide();
            suiteType.attr("disabled", "disabled");
            suiteType.val('');
        }
    });

    // ! Show Hide Password
    $(".hide").click(function() {
        $(this).toggleClass("bx-show");
        if($(this).hasClass("bx-show")) {
            $("#floating_password").attr("type", "text");
        }else{
            $("#floating_password").attr("type", "password");
        }
    });
    // ! dashboard side menu
    $(".side-menu-btn").click(function(){
        $(".side-menu-btn i").toggleClass("bx-chevrons-right");
        if($(".side-menu-btn i").hasClass("bx-chevrons-right")) {
            $(".sidebar").hide(200);
        }else {
            $(".sidebar").show(200);
        }
    });

    // ! validating form inputs fields
    let rgxPatterns = {
        "email" : /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
        "password": /^[\w@-]{8,20}$/,
        "phone_n": /^[0-9]{3}[0-9]{3}[0-9]{4}$/,
        "first_name": /^[A-Za-z\d]{5,20}$/,
        "last_name": /^[A-Za-z\d]{5,20}$/
    };
    function validateInput(field, regex){
        if(regex.test(field.value)) {
            if(field.name === "email") {
                $(".email-error").text("valide email");
                $(".email-error").css("color","green");
            }else if(field.name === "password") {
                $(".pass-error").text("valide password");
                $(".pass-error").css("color","green");
            }else if(field.name === "phone_n") {
                $(".phone-error").text("valide Phone number");
                $(".phone-error").css("color","green");
            }else if(field.name === "first_name") {
                $(".first-n-error").text("valide First Name");
                $(".first-n-error").css("color","green");
            }else if(field.name === "last_name") {
                $(".last-n-error").text("valide Last Name");
                $(".last-n-error").css("color","green");
            }
        }else {
            if(field.name === "email") {
                $(".email-error").text("invalide email");
                $(".email-error").css("color","red");
            }else if(field.name === "password") {
                $(".pass-error").text("invalide password");
                $(".pass-error").css("color","red");
            }else if(field.name === "phone_n") {
                $(".phone-error").text("invalide Phone number");
                $(".phone-error").css("color","red");
            }else if(field.name === "first_name") {
                $(".first-n-error").text("invalide First Name");
                $(".first-n-error").css("color","red");
            }else if(field.name === "last_name") {
                $(".last-n-error").text("invalide Last Name");
                $(".last-n-error").css("color","red");
            }
        }
    }
    const inputFields = $(".form-inputs");
    inputFields.focusout(function(e){
            // console.log(e.target.name);
        if(e.target.value === "") {
            $(".error").text("This Field Can't be Empty");
        }else {
            validateInput(e.target, rgxPatterns[e.target.name]);
        }
    });


    // ! search rooms
    $("#search-form").on('submit', function($e){
        $e.preventDefault();
        let roomTypeValue = roomType.val();
        let suiteTypeValue = suiteType.val();
        $.ajax({
            url: 'http://localhost/Application-gestion-de-reservations-Hotel/public/home/searchRoom',
            type: 'post',
            data: {
                room_type: roomTypeValue,
                suite_type: suiteTypeValue
            },
            success: function(data, status){
                const dataParsed = JSON.parse(data);
                let rooms = [];
                let roomCard = ``;
                let dataSuiteType = '';
                let bookBtn = '';
                for(let room of dataParsed) {
                    if(room.suite_type !== null) {
                        dataSuiteType = "Suite Type: " + room.suite_type;
                    }else {
                        dataSuiteType = '';
                    }
                    roomCard = `
                    <div class="card bg-secondary-clr">
                        <img src="http://localhost/Application-gestion-de-reservations-Hotel/public/assets/img/rooms/${room.room_image}" alt="" class="w-full">
                        <div class="card-text text-white p-3">
                            <h1 class="wilkysta-font text-3xl">${room.room_heading}</h1>
                            <div class="info montserrat-font flex items-center gap-4 text-sm my-2">
                                <p>Capacity: ${room.capacity}</p>
                                <i class="bx bxs-circle text-xs text-gray-400"></i>
                                <p>Room Type: ${room.room_type}</p>
                                <i class="bx bxs-circle text-xs text-gray-400"></i>
                                <p>${dataSuiteType}</p>
                            </div>
                            <a href="#" class="wilkysta-font uppercase text-lg underline decoration-dotted">see details</a>
                            <hr class="my-2">
                            <div class="price-btn wilkysta-font flex items-center justify-between">
                                <p class="uppercase text-2xl">$<span>${room.room_price}</span>/night</p>
                                <a href="../home/bookRoom/${room.room_id}"><button class="border border-2 border-white py-2 px-5 uppercase hover:bg-white hover:text-black transition">book Now</button></a>
                            </div>
                        </div>
                    </div>
                    `;
                    rooms.push(roomCard);
                }
                for(let room in rooms) {
                    $('.rooms-wrapper').html(rooms[room]);
                    console.log(room);
                }
                return
                console.log(status);
            }
        })
    })
});

// ! Dynamic Form using Vanilla Js

// document.addEventListener("DOMContentLoaded", ()=>{
//     const suiteTypeSelect = document.querySelector(".suite-type");
//     suiteTypeSelect.style.display = 'none';
//     const roomTypeSelect = document.querySelector("#room-type");
//     roomTypeSelect.addEventListener("change", ()=>{
//         if(roomTypeSelect.value === "suite") {
//             console.log(roomTypeSelect.value)
//             suiteTypeSelect.style.display = 'block';
//         }else {
//             suiteTypeSelect.style.display = 'none';
//         }
//     });
// });
