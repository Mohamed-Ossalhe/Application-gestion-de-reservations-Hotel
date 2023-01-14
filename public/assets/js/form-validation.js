$(document).ready(function (){
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
            $(`p.${field.name}-error`).text("valide " + field.name);
            $(`p.${field.name}-error`).css("color","green");
        }else {
            $(`p.${field.name}-error`).text("invalide " + field.name);
            $(`p.${field.name}-error`).css("color","red");
        }
    }

    // check if inputs are empty
    const inputFields = $(".form-inputs");
    // console.log(inputFields);
    for(let element of inputFields) {
        // console.log(element)
        element.addEventListener("focusout",function(e){
            // console.log(e.target.name);
            if(e.target.value === "") {
                $(`p.${e.target.name}-error`).text("This Field Can't be Empty");
                // console.log($(`p.${e.target.name}-error`));
            }else {
                validateInput(e.target, rgxPatterns[e.target.name]);
            }
        });
    }

    // ! Show Hide Password
    $(".hide").click(function() {
        $(this).toggleClass("bx-show");
        if($(this).hasClass("bx-show")) {
            $("#floating_password").attr("type", "text");
        }else{
            $("#floating_password").attr("type", "password");
        }
    });
});