<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OceanRespect</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

    @include('partials.navbar')


    <script src="/js/app.js"></script>

    <script>
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



    </script>
</body>
</html>
