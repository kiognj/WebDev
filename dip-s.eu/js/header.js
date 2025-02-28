
window.onscroll = function() {
    const header = document.querySelector('header');
    const logo = document.getElementById("logo");
    const burger = document.querySelector(".burger");

    if (window.scrollY > 50) {
        header.classList.add('scrolled');
        logo.src = "img/logo_rev.webp";
        burger.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
        logo.src = "img/logo.webp";
        burger.classList.remove('scrolled');
    }
};

function toggleMenu() {
    const nav = document.querySelector(".navigation-mob");
    const burger = document.querySelector(".burger")
    
    nav.classList.toggle("active");
    burger.classList.toggle("active");
}
