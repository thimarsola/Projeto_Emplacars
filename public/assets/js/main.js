//// menu toggle
//let show = true;
//
//const menuSection = document.querySelector(".header_menu_section")
//const menuToggle = menuSection.querySelector(".header_menu_section_toggle")
//
//menuToggle.addEventListener("click", () => {
//
//	document.body.style.overflow = show ? "hidden" : "initial"
//
//	menuSection.classList.toggle("on", show)
//    show = !show;
//})
//
//// Stick navbar
//window.addEventListener("scroll", function(){
//    const headerContact = document.querySelector(".header_contact");
//    const header = document.querySelector("#header");
//
//    headerContact.classList.toggle("hide", window.scrollY > 0)
//    header.classList.toggle("dark", window.scrollY > 0)
//})

// GoTo
const menuItens = document.querySelectorAll(['nav ul li a[href^="#"]', '#main a[href^="#"]']);
menuItens.forEach(item =>{
    item.addEventListener('click', scrollToIdOnClick);
});
function scrollToIdOnClick(){
    event.preventDefault();
    const to = getScrollTopByHref(event.target) - 150;
    scrollToPosition(to);
}
function scrollToPosition(to){
    smoothScrollTo(0, to, 800);
}
function getScrollTopByHref(element){
    const id = element.getAttribute('href');
    return document.querySelector(id).offsetTop;
}
// GoTo Browser antigos
function smoothScrollTo(endX, endY, duration) {
    const startX = window.scrollX || window.pageXOffset;
    const startY = window.scrollY || window.pageYOffset;
    const distanceX = endX - startX;
    const distanceY = endY - startY;
    const startTime = new Date().getTime();
    duration = typeof duration !== 'undefined' ? duration : 400;
    // Easing function
    const easeInOutQuart = (time, from, distance, duration) => {
        if ((time /= duration / 2) < 1) return distance / 2 * time * time * time * time + from;
        return -distance / 2 * ((time -= 2) * time * time * time - 2) + from;
    };
    const timer = setInterval(() => {
        const time = new Date().getTime() - startTime;
        const newX = easeInOutQuart(time, startX, distanceX, duration);
        const newY = easeInOutQuart(time, startY, distanceY, duration);
        if (time >= duration) {
            clearInterval(timer);
        }
        window.scroll(newX, newY);
    }, 1000 / 60); // 60 fps
}