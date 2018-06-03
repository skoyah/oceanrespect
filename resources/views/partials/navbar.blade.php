<nav class="navbar flex justify-between items-center bg-black text-white font-light py-4 z-10 overflow-hidden">

    {{-- LEFT SIDE --}}
    <h1 class="mx-4">OCEANRESPECT</h1>

    {{-- RIGHT SIDE --}}
    <ul class="flex list-reset">

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
