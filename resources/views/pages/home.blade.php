<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OceanRespect</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body class="h-screen flex flex-col" id="homepage">

    <div id="page-header">
        @include('partials.navbar')

        <div id="is-loading" class="bg-white loading flex items-center justify-center w-screen absolute">
            <div id="loading-content"></div>
        </div>
    </div>

    <div id="wrapper" class="hero mx-auto px-8 md:px-6 lg:px-0 flex-1 flex pt-8">
        <div>
        <h1 class="text-white font-light uppercase tracking-wide text-5xl leading-normal mt-10"><span class="italic">" </span>The sea, once it casts its spell, holds one in its net of wonder forever.<span class="italic">"</span></h1>
        <h2 class="text-grey-light font-normal tracking-wide text-base italic antialiased">Jacques Yves Cousteau</h2>
        </div>
    </div>








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
    <script src="/js/app.js"></script>
</body>
</html>
