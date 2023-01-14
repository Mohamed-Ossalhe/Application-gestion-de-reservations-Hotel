$(document).ready(function(){
    let sideMenuBtn = $(".side-menu-btn");
    let sideMenuBtnIcon = $(".side-menu-btn i");
    let sideMenu = $(".sidebar");
    const activeDashboardPage = window.location.pathname;
    const dashbaordMenuLinks = $(".aside-menu-item");

    // ! dashboard menu open/close
    sideMenuBtn.click(function(){
        sideMenuBtnIcon.toggleClass("bx-chevrons-right");
        if(sideMenuBtnIcon.hasClass("bx-chevrons-right")) {
            sideMenu.hide(300);
        }else {
            sideMenu.show(300);
        }
    });
    // ! switch dashboard sidemenu active page
    $.each(dashbaordMenuLinks, function(index, element){
        console.log(element);
        if(element.href.includes(`${activeDashboardPage}`)) {
            console.log(element.href);
            element.classList.add("side-menu-li-active");
        }
    });
});


// document.addEventListener("DOMContentLoaded", ()=>{
//     sideMenuBtn.addEventListener("click",function(){
//         sideMenuBtnIcon.classList.toggle("bx-chevrons-right");
//         if(sideMenuBtnIcon.classList.contains("bx-chevrons-right")) {
//             sideMenu.style.display = 'none';
//             sideMenu.style.transition = 300;
//         }else {
//             sideMenu.style.display = 'block';
//         }
//     });
    
//     // ! switch Dashbaord sidemenu active class
//     dashbaordMenuLinks.forEach((link)=>{
//         if(link.href.includes(`${activeDashboardPage}`)) {
//             link.classList.add("side-menu-li-active");
//         }
//     })
// })