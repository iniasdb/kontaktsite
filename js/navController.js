

function openNav() {
    let nav = document.querySelector("#navLinks");
    let button = document.querySelector("#navButton");

    try {
        let logo = document.querySelector(".logo");
        logo.style.top = "25%";
    } catch (err) {
    }
    
    nav.style.display = "grid";
    button.classList.remove("fa-bars");
    button.classList.add("fa-times");

    button.setAttribute("onclick", "javascript: closeNav();");
}

function closeNav() {
    let nav = document.querySelector("#navLinks");
    let button = document.querySelector("#navButton");

    try {
        let logo = document.querySelector(".logo");
        logo.style.top = "25%";
    } catch (err) {

    }

    nav.style.display = "none";
    button.classList.remove("fa-times");
    button.classList.add("fa-bars");

    button.setAttribute("onclick", "javascript: openNav();");
} 