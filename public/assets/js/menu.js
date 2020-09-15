// menu toggle
let show = true;

const menuSection = document.querySelector(".header_menu_section");
const menuToggle = menuSection.querySelector(".header_menu_section_toggle");
const menuItem = document.querySelectorAll(".header_navbar_nav ul li a");

menuToggle.addEventListener("click", () => {

    document.body.style.overflow = show ? "hidden" : "initial";

    menuSection.classList.toggle("on", show);
    show = !show;
});

menuItem.forEach((item) => {
    item.addEventListener('click', () => {
        menuSection.classList.toggle('on');
        document.body.style.overflow = "initial";
    });
});

// Stick navbar
window.addEventListener("scroll", function () {
    const headerContact = document.querySelector(".header_contact");
    const header = document.querySelector("#header");

    headerContact.classList.toggle("hide", window.scrollY > 0);
    header.classList.toggle("dark", window.scrollY > 0);
});