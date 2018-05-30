const nav = document.querySelector('.navbar');
const navDropdowns = document.querySelectorAll('.nav-dropdown');
const dropdownButtons = document.querySelectorAll('.dropdown-btn');
const navCoords = nav.getBoundingClientRect();

// Getting navbar coords to position dropdown menus
navDropdowns.forEach(navDropdown => {
    navDropdown.style.top = `${navCoords.bottom}px`;
});

// Toggling dropdowns
dropdownButtons.forEach(button => {
    button.addEventListener('click', toggleDropdown);
});


function toggleDropdown() {
    this.querySelector('.nav-dropdown').classList.toggle('hidden');
}
