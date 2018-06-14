<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OceanRespect</title>
    <link rel="stylesheet" href="css/app.css">
    <style>
        body {
            background-image: url('/img/hero/hero_01.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top center;
        }

    </style>
</head>
<body class="h-screen flex flex-col">

    <div id="is-loading" class="flex items-center justify-center w-screen bg-black h-screen absolute pin-t z-50">
        <div id="loading-content"></div>
    </div>

    @include('partials.navbar')

    <div id="wrapper" class="hero mx-auto px-8 md:px-6 lg:px-0 flex-1 flex pt-8">
        <div>
        <h1 class="text-white font-extrabold uppercase tracking-wide text-5xl leading-normal mt-10"><span class="italic">" </span>The sea, once it casts its spell, holds one in its net of wonder forever.<span class="italic">"</span></h1>
        <h2 class="text-grey-light font-normal tracking-wide text-base italic antialiased">Jacques Yves Cousteau</h2>
        </div>
    </div>






    <script src="/js/app.js"></script>

    <script>
        const nav = document.querySelector('.navbar');
        const navDropdowns = document.querySelectorAll('.nav-dropdown');
        const dropdownButtons = document.querySelectorAll('.dropdown-btn');
        const navCoords = nav.getBoundingClientRect();

        nav.style.backgroundColor = 'transparent';

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
