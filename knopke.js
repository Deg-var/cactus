let acc = document.getElementsByClassName("accordion");


for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("mouseenter", function() {
        let panel = this.childNodes[1];
        panel.style.maxHeight = 10000 + "px";
        panel.style.display = "grid";

    });
    acc[i].addEventListener("mouseleave", function() {
        let panel = this.childNodes[1];
        panel.style.maxHeight = 0;
        panel.style.display = "none";


    });
}