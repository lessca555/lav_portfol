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

let waktu = document.getElementById("waktu");
let date = new Date();
let hours = date.getHours();

if (hours >= 6 && hours < 12) {
    waktu.textContent = "pagi";
} else if (hours >= 12 && hours < 15) {
    waktu.textContent = "siang";
} else if (hours >= 15 && hours < 18) {
    waktu.textContent = "sore";
} else {
    waktu.textContent = "malam";
}

$(function () {
    var path = window.location.href; // Mengambil data URL pada Address bar
    $(".lang a").each(function () {
        // Jika URL pada menu ini sama persis dengan path...
        if (this.href === path) {
            // Tambahkan kelas "active" pada menu ini
            $(this).addClass("activeL");
        } else {
            $(this).removeClass("activeL");
        }
    });
});


