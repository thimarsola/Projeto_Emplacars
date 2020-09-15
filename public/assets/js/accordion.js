let showAccordion = true;

const accordions = document.querySelectorAll(".main_doubts_content_article");
const accordionHeaders = document.querySelectorAll(".main_doubts_content_article_header");

accordionHeaders.forEach(accordionHeader => {
   accordionHeader.addEventListener('click', () => {
                        console.log(accordions);
       accordions.forEach(accordion => {
          accordion.classList.toggle("click", showAccordion); 
          showAccordion = !showAccordion;          
       });
   });
});