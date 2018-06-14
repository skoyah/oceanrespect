
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

// require('./bootstrap');

require('./navbar.js');

const nav = document.querySelector('.navbar');
const navCoords = nav.getBoundingClientRect();
const loader = document.querySelector('.loading');
const footer = document.querySelector('footer');

loader.style.height = `calc(100vh - ${navCoords.bottom}px)`;





window.addEventListener("load", () => {

    const loadingAnimation = document.querySelector('#is-loading');

    loadingAnimation.classList.add('opacity-0');

    setTimeout(() => {
        document.querySelector('#wrapper').classList.remove('opacity-0');
        document.querySelector('#wrapper').classList.add('opacity-1');
    }, 300);


    document.body.removeChild(loadingAnimation);
});

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
