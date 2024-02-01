function togglenav() {
    let nav = document.querySelector("#mytopnav");
    if(nav.className === "topnav") {
        nav.classList += " responsive";
    } else {
        nav.classList = " topnav";
    } 
}
function ractogglenav() {
let nav = document.querySelector("#myracnav");
    if(nav.className === "racnav") {
        nav.classList += " responsive";
    } else {
        nav.classList = " racnav";
    }
}