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
    $("#searchBtn").click(function (){
        let roomTypeValue = $("#room-type").val();
        let suiteTypeValue = $("#suite-type").val();
        if(roomTypeValue && suiteTypeValue) {
            $.ajax({
                url: 'http://localhost/Application-gestion-de-reservations-Hotel/public/home/searchRoom',
                method: 'POST',
                data: {roomTypeValue:roomTypeValue, suiteTypeValue:suiteTypeValue},
                success:function(data){
                    $(".rooms-section").html(data);
                }
            })
        }else {
            $(".rooms-section").css("display", "none");
        }
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
