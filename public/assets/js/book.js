$(document).ready(function(){
    // let formData = [];
    let capacity = $(".capacity").text();
    let guestsFormDiv = $(".book-form");
    let guestsForm = $(".guests-form");
    let addGuestBtn = $(".add-guest");
    let capacityNum = parseInt(capacity.charAt(9));
    let guestsAdded = 1;
    if(capacityNum > 1) {
        addGuestBtn.show();
    }else {
        addGuestBtn.hide();
    }
    addGuestBtn.click(()=>{
        if(guestsAdded >= capacityNum) {
            addGuestBtn.hide();
            return;
        }
        addGuestForm();
        guestsAdded++;
    });
    function addGuestForm() {
        let guestForm = `
        <div class="guest">
            <div>Guest n°: ${guestsAdded}</div>
            <div class="mb-6">
                <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                <input type="text" id="first-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="First Name" required>
            </div>
            <div class="mb-6">
                <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                <input type="text" id="last-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Last Name" required>
            </div>
            
            <div class="mb-6">
                <label for="date-of-birth" class="block mb-2 text-sm font-medium text-gray-900">Birth Date</label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input id="date-of-birth" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Select date">
                </div>
            </div>
        </div>`;
        guestsFormDiv.removeClass("hidden");
        guestsForm.prepend(guestForm);
    }
});