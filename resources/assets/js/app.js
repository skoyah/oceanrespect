
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

// require('./bootstrap');

require('./navbar.js');

document.addEventListener("DOMContentLoaded", () => {
    const accordions = document.querySelectorAll('.accordion');

    accordions.forEach(accordion => {
        accordion.addEventListener('click', toggleAccordion);
    });

    function toggleAccordion() {
        const accordionContent = this.parentElement.nextElementSibling;

        accordionContent.classList.remove('flex');

        const accordionHeight = `${accordionContent.scrollHeight}px`;

        accordionContent.classList.add('flex');

        if (accordionContent.style.maxHeight) {
            // accordion is open, we need to close it
            accordionContent.style.maxHeight = null;
            accordionContent.style.opacity = 0;
        } else {
            // accordion is closed, we need to open it
            accordionContent.style.maxHeight = accordionHeight;
            accordionContent.style.opacity = 1;
        }
    }
});
