// menu toggle
let show = true;

const menuSection = document.querySelector(".header_navbar_section");
const menuToggle = menuSection.querySelector(".header_navbar_section_toggle");
const menuItem = document.querySelectorAll(".header_navbar_section_nav ul li a");

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