function show(imgId, img2Id) {
    let img = document.querySelector("#" + imgId);
    let img2 = document.querySelector("#" + img2Id);
    img.classList.add("show");
    img2.classList.add("hide");

    // let temp = document.querySelector(".choice");
    // temp.style.animation = "show 2s 1   "; 
    console.log("show " + imgId);
}

function hide(imgId, img2Id) {
    let img = document.querySelector("#" + imgId);
    let img2 = document.querySelector("#" + img2Id);

    img.classList.remove("show");
    img2.classList.remove("hide");

    console.log("hide " + imgId);
}