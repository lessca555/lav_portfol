const navbarNav = document.querySelector(".navbar-nav");

//ketika hambuerger menu di klik
document.getElementById("hamburger").onclick = () => {
    navbarNav.classList.toggle("active");
};

//klik diluar sidebar untuk menghilangkan nav
const hamburger = document.getElementById("hamburger");

document.addEventListener("click", function (e) {
    if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove("active");
    }
});

let waktu = document.querySelector(".waktu");
let date = new Date();
let hours = date.getHours();

if (hours >= 6 && hours < 12) {
    waktu.textContent = "pagi";
    waktu.style.color = "#fff";
} else if (hours >= 12 && hours < 15) {
    waktu.textContent = "siang";
    waktu.style.color = "#fff2cc";
} else if (hours >= 15 && hours < 18) {
    waktu.textContent = "sore";
    waktu.style.color = "#cfe2f3";
} else {
    waktu.textContent = "malam";
    waktu.style.color = "#000";
}


