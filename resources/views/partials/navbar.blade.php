<nav class="navbar flex justify-between items-center bg-white text-grey-dark font-light z-10 shadow">

    {{-- LEFT SIDE --}}
    <a href="/" class="p-4">
        <img src="/img/brand/logo.png" alt="Ocean Respect Ecodive Center" id="brand">
    </a>


    {{-- RIGHT SIDE --}}

    {{-- Nav menu for small devices--}}
    <ul class="navbar-responsive list-reset lg:hidden absolute bg-white w-full flex flex-col items-center overflow-hidden">
        <li class="w-full text-center border-t border-grey-lighter">
            <a href="#" class="accordion inline-block p-4 w-full hover:bg-blue-light hover:text-white">Diving</a>
        </li>
        <ul class="navbar-accordion flex flex-col list-reset bg-grey-darkest w-full text-red overflow-hidden">
            <li class="text-center hover:bg-grey-dark">
                <a href="/courses" class="inline-block p-4 w-full text-grey hover:bg-blue-light hover:text-white">Courses</a>
            </li>
            <li class="text-center hover:bg-grey-dark">
                <a href="/trips" class="inline-block p-4 w-full text-grey hover:bg-blue-light hover:text-white">Trips</a>
            </li>
        </ul>
        <li class="w-full text-center border-t border-grey-lighter">
            <a href="/snorkel" class="inline-block p-4 w-full hover:bg-blue-light hover:text-white">Snorkel</a>
        </li>
        <li class="w-full text-center border-t border-grey-lighter">
            <a href="/research" class="inline-block p-4 w-full hover:bg-blue-light hover:text-white">Research</a>
        </li>
        <li class="w-full text-center border-t border-grey-lighter">
            <a href="/about" class="inline-block p-4 w-full hover:bg-blue-light hover:text-white">About</a>
        </li>
        <li class="w-full text-center border-t border-grey-lighter">
            <a href="/gallery" class="inline-block p-4 w-full hover:bg-blue-light hover:text-white">Gallery</a>
        </li>
        <li class="w-full text-center border-t border-grey-lighter">
            <a href="/contact" class="inline-block p-4 w-full hover:bg-blue-light hover:text-white">Contacts</a>
        </li>

    </ul>

    {{-- Burguer icon --}}
    <div id="burguer-menu" class="w-6 h-4 flex flex-col justify-between mr-4 cursor-pointer lg:hidden">
        <i class="w-full bg-grey block rounded"></i>
        <i class="w-full bg-grey block rounded"></i>
        <i class="w-full bg-grey block rounded"></i>
    </div>


    {{-- Nav menu for large devices --}}
    <ul class="hidden list-reset lg:flex">

        <li class="dropdown-btn mx-4">
            <a href="#" class="pb-6 hover:text-blue-light">Diving <i class="fas fa-angle-down ml-1"></i></a>
            {{-- Diving Dropdown --}}
            <ul class="dropdown hidden list-reset bg-white absolute shadow z-50">
                <li class="py-4 px-8">
                    <a href="/courses" class="hover:text-blue-light">Courses</a>
                </li>
                <li class="py-4 px-8">
                    <a href="/trips" class="hover:text-blue-light">Trips</a>
                </li>
            </ul>
            {{-- End of Dropdown --}}
        </li>

        <li class="mx-4">
            <a href="/snorkel" class="hover:text-blue-light">Snorkel</a>
        </li>

        <li class="mx-4">
            <a href="/research" class="hover:text-blue-light">Research</a>
        </li>

        <li class="mx-4">
            <a href="/about" class="pb-6 hover:text-blue-light">About</a>
        </li>

        <li class="mx-4">
            <a href="/gallery" class="hover:text-blue-light">Gallery</a>
        </li>

        <li class="mx-4">
            <a href="/contact" class="hover:text-blue-light">Contacts</a>
        </li>

    </ul>
</nav>
