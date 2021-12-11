function show(imgId, img2Id) {
    if (window.innerWidth > 600) {
        let img = document.querySelector("#" + imgId);
        let img2 = document.querySelector("#" + img2Id);
        img.classList.add("show");
        img2.classList.add("hide");
    }
}

function hide(imgId, img2Id) {
    if (window.innerWidth > 600) {
        let img = document.querySelector("#" + imgId);
        let img2 = document.querySelector("#" + img2Id);
    
        img.classList.remove("show");
        img2.classList.remove("hide");
    }
}