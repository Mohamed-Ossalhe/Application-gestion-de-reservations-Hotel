// ! Dynamic Form using jQuery
// let suiteTypeDiv = document.querySelector(".suite-type");
// let suiteTypeSelect = document.querySelector("#suite-type");
// let roomTypeSelect = document.querySelector("#room-type");

$(document).ready(function () {
    let suiteTypeDiv = $(".suite-type");
    let suiteTypeSelect = $("#suite-type");
    let roomTypeSelect = $("#room-type");
    suiteTypeDiv.hide();
    suiteTypeSelect.attr('disabled', 'disabled');
    suiteTypeSelect.removeAttr('required');
    suiteTypeSelect.val('');
    if(roomTypeSelect.val() === "suite") {
        suiteTypeDiv.show();
        suiteTypeSelect.removeAttr("disabled");
        suiteTypeSelect.attr('required', 'required');
    }else {
        suiteTypeDiv.hide();
        suiteTypeSelect.attr('disabled', 'disabled');
        suiteTypeSelect.removeAttr('required');
        suiteTypeSelect.val('');
    }
    roomTypeSelect.change(()=>{
        if(roomTypeSelect.val() === 'suite') {
            suiteTypeDiv.show();
            suiteTypeSelect.removeAttr("disabled");
            suiteTypeSelect.attr('required', 'required');
        }else {
            suiteTypeDiv.hide();
            suiteTypeSelect.attr('disabled', 'disabled');
            suiteTypeSelect.removeAttr('required');
            suiteTypeSelect.val('');
        }
    });
});
// document.addEventListener("DOMContentLoaded", ()=>{
//     suiteTypeDiv.style.display = 'none';
//     suiteTypeSelect.setAttribute("disabled", "disabled");
//     suiteTypeSelect.value = '';
//     if(roomTypeSelect.value === "suite") {
//         suiteTypeDiv.style.display = 'block';
//         suiteTypeSelect.removeAttribute("disabled");
//     }else {
//         suiteTypeDiv.style.display = 'none';
//         suiteTypeSelect.setAttribute("disabled", "disabled");
//         suiteTypeSelect.value = '';
//     }
//     roomTypeSelect.addEventListener("change", (e)=>{
//         if(e.target.value === "suite") {
//             suiteTypeDiv.style.display = 'block';
//             suiteTypeSelect.removeAttribute("disabled");
//         }else {
//             suiteTypeDiv.style.display = 'none';
//             suiteTypeSelect.setAttribute("disabled", "disabled");
//             suiteTypeSelect.value = '';
//         }
//     });
// })
