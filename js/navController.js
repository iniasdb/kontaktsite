

function openNav() {
    let nav = document.querySelector("#navLinks");
    let button = document.querySelector("#navButton");

    try {
        if (window.innerWidth >= 1000) {
            let logo = document.querySelector(".logo");
            logo.style.top = "0";    
        } else {
            let logo = document.querySelector(".logo");
            logo.style.display = "none";    
        }
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
        if (window.innerWidth >= 1000) {
            let logo = document.querySelector(".logo");
            logo.style.top = "25%";    
        } else {
            let logo = document.querySelector(".logo");
            logo.style.display = "block";    
        }
    } catch (err) {

    }

    nav.style.display = "none";
    button.classList.remove("fa-times");
    button.classList.add("fa-bars");

    button.setAttribute("onclick", "javascript: openNav();");
} 