let sale = document.querySelectorAll(".sale");
let nazvanie = document.querySelectorAll(".nazvanie");
let zakaz = document.querySelector(".comment");



for (let i = 0; i < sale.length; i++) {
    sale[i].onclick = function() {
        zakaz.textContent += nazvanie[i].textContent.replace("  ", " ") + " ";

    }
}