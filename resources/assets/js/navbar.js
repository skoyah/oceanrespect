document.addEventListener("DOMContentLoaded", () => {
    const nav = document.querySelector('.navbar');
    const navDropdowns = document.querySelectorAll('.dropdown');
    const dropdownButtons = document.querySelectorAll('.dropdown-btn');
    const navCoords = nav.getBoundingClientRect();
    const responsiveNav = document.querySelector('.navbar-responsive');
    const burguerIcon = document.querySelector('#burguer-menu');




    // Getting navbar coords to position dropdown menus
    navDropdowns.forEach(dropdown => {
        dropdown.style.top = `${navCoords.bottom}px`;
    });

    // Responsive nav menu gets positioned below navbar
    responsiveNav.style.top = `${navCoords.bottom}px`;

    // Toggling dropdowns
    dropdownButtons.forEach(button => {
        button.addEventListener('click', toggleDropdown);
    });

    // Toggling Responsive Navbar with burguer icon

    burguerIcon.addEventListener('click', toggleResponsiveNav);


    // Functions
    function toggleDropdown() {
        this.querySelector('.dropdown').classList.toggle('hidden');
    }

    function toggleResponsiveNav() {
        const accordions = Array.from(document.querySelectorAll('.navbar-accordion'));


        const accordionsTotalHeight = accordions.reduce((total, accordion) => {
            return total + accordion.scrollHeight;
        }, 0);

        const responsiveNavHeight = `${responsiveNav.scrollHeight + accordionsTotalHeight}px`;

        if (responsiveNav.style.maxHeight) {
            // Responsive nav is open, we need to close it
            responsiveNav.style.maxHeight = null;
        } else {
            // Responsive nav is closed, we need to open it
            responsiveNav.style.maxHeight = responsiveNavHeight;
        }

    }
});
