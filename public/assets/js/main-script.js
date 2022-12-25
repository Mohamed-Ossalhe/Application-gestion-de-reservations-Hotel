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
    $(".suite-type").hide();
    $("#room-type").change(function(){
        if(this.value === "suite") {
            $(".suite-type").fadeIn("fast");
        }else {
            $(".suite-type").fadeOut("fast");
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
        "email" : /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/
    };
    function validateInput(field, regex){
        if(regex.test(field.value)) {
            console.log("valid");
        }else {
            console.log("invalid");
        }
    }
    const inputFields = $(".form-inputs");
    inputFields.focusout(function(e){
            // console.log(e.target.name);
        validateInput(e.target, rgxPatterns[e.target.name]);
    });
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
