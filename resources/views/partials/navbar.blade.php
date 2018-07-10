<nav class="navbar flex justify-between items-center bg-white text-grey-dark z-50 shadow">

    {{-- LEFT SIDE --}}
    <a href="/" class="p-4">
        <img src="/img/brand/logo.png" alt="Ocean Respect Ecodive Center" id="brand">
    </a>


    {{-- RIGHT SIDE --}}

    @include('partials.responsiveNav')

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
                <li class="py-4 px-8">
                    <a href="/gear-rental" class="hover:text-blue-light">Gear Rental</a>
                </li>
                <li class="py-4 px-8">
                    <a href="/diving-sites" class="hover:text-blue-light">Spots</a>
                </li>
                <li class="py-4 px-8">
                    <a href="/shark-diving" class="hover:text-blue-light">Shark Diving</a>
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
