// ! Dynamic Form using jQuery
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