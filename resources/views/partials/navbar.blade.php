<nav class="navbar flex justify-between items-center bg-black text-white font-light z-10 relative">

    {{-- LEFT SIDE --}}
    <div id="logo" class="">
        <img src="/img/brand/logo-full.png" alt="Ocean Respect Ecodive Center" id="brand">
    </div>
    {{-- RIGHT SIDE --}}

    {{-- Nav menu for small devices--}}
    <ul class="navbar-responsive list-reset lg:hidden absolute bg-grey-darkest w-full flex flex-col items-center bg-grey-darkest overflow-hidden">
        <li class="bg-black w-full text-center border-t border-grey-darkest">
            <a href="#" class="accordion inline-block p-4 w-full">Diving</a>
        </li>
        <ul class="navbar-accordion flex flex-col list-reset bg-grey-darkest w-full text-red overflow-hidden">
            <li class="text-center hover:bg-grey-dark"><a href="#" class="inline-block p-4 w-full text-grey">Courses</a></li>
            <li class="text-center hover:bg-grey-dark"><a href="#" class="inline-block p-4 w-full text-grey">Trips</a></li>
        </ul>
        <li class="bg-black w-full text-center border-t border-grey-darkest">
            <a href="#" class="inline-block p-4 w-full">Snorkel</a>
        </li>
        <li class="bg-black w-full text-center border-t border-grey-darkest">
            <a href="#" class="inline-block p-4 w-full">Research</a>
        </li>
        <li class="bg-black w-full text-center border-t border-grey-darkest">
            <a href="#" class="inline-block p-4 w-full">About</a>
        </li>
        <li class="bg-black w-full text-center border-t border-grey-darkest">
            <a href="#" class="inline-block p-4 w-full">Gallery</a>
        </li>
        <li class="bg-black w-full text-center border-t border-grey-darkest">
            <a href="#" class="inline-block p-4 w-full">Contacts</a>
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
            <a href="#" class=" pb-6">Diving</a>
            {{-- Diving Dropdown --}}
            <ul class="nav-dropdown absolute list-reset text-black bg-white hidden">
                <li class="py-4 px-8">
                    <a href="/courses">Courses</a>
                </li>
                <li class="py-4 px-8">
                    <a href="/trips">Trips</a>
                </li>
            </ul>
            {{-- End of Dropdown --}}
        </li>

        <li class="mx-4">
            <a href="/snorkel">Snorkel</a>
        </li>

        <li class="mx-4">
            <a href="/research">Research</a>
        </li>

        <li class="mx-4">
            <a href="/about" class="pb-6">About</a>
        </li>

        <li class="mx-4">
            <a href="#">Gallery</a>
        </li>

        <li class="mx-4">
            <a href="/contact">Contacts</a>
        </li>

    </ul>
</nav>
