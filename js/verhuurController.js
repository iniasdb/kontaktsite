let verhuurItems = [];

function addToCart(id) {
    verhuurItems.push(id);
    verhuurItems.sort(function(a, b){return a - b});
    JSON.stringify(verhuurItems)
    console.log(verhuurItems);
}

function createLink(url) {
    for (let i = 0; i < verhuurItems.length; i++) {
        url+=i+"="+verhuurItems[i]+"&";
    }
    console.log(url);
    return url;
}

function submit() {
    console.log("ja");
    let url = createLink("verhuurForm.php?");
    window.open(url, "_self");
}
