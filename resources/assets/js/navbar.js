document.addEventListener("DOMContentLoaded", () => {
    const nav = document.querySelector('.navbar');
    const navDropdowns = document.querySelectorAll('.nav-dropdown');
    const dropdownButtons = document.querySelectorAll('.dropdown-btn');
    const navCoords = nav.getBoundingClientRect();

    // Getting navbar coords to position dropdown menus
    navDropdowns.forEach(navDropdown => {
        navDropdown.style.top = `${navCoords.bottom}px`;
    });


    //! Dropdown menu needs improvement!!!!
    // Toggling dropdowns
    dropdownButtons.forEach(button => {
        button.addEventListener('click', toggleDropdown);
        button.addEventListener('mouseover', showDropdown);
        button.addEventListener('mouseout', hideDropdown);
    });



    function toggleDropdown() {
        this.querySelector('.nav-dropdown').classList.toggle('hidden');
    }

    function showDropdown() {
        this.querySelector('.nav-dropdown').classList.remove('hidden');
    }

    function hideDropdown() {
        this.querySelector('.nav-dropdown').classList.add('hidden');
    }
});
