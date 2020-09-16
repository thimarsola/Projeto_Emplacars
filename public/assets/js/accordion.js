const accordionHeaders = document.querySelectorAll(".main_doubts_content_article_header");

accordionHeaders.forEach(accordionHeader => {
    accordionHeader.addEventListener("click", event => {
        accordionHeader.classList.toggle("active");
    });
});