
const link = document.getElementsByClassName("iframe-link");
const frame = document.getElementById("iframe");
let i;

for (i = 0; i < link.length; i++) {
    link[i].addEventListener("click", function() {
        const url = this.getAttribute("data-link");
        frame.src = url;
    });
}