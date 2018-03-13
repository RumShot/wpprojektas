// ---- burger button ----
function myFunction(navh) {
    var x = document.getElementById("navbar");
    if (x.className === "ul") {
        x.className += " responsive";
    } else {
        x.className = "ul";
    }
}
