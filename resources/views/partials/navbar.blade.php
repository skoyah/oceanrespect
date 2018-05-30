<nav class="navbar flex justify-between items-center bg-black text-white font-light py-4 z-10">
    {{-- LEFT SIDE --}}
    <h1 class="mx-4">OCEANRESPECT</h1>

    {{-- RIGHT SIDE --}}
    <ul class="flex list-reset">

        <li class="dropdown-btn mx-4">
            <a href="#">Diving</a>
            {{-- Diving Dropdown --}}
            <ul class="nav-dropdown absolute list-reset text-black bg-white hidden">
                <li class="py-4 px-8">
                    <a href="/courses">Courses</a>
                </li>
                <li class="py-4 px-8">
                    <a href="#">Trips</a>
                </li>
            </ul>
            {{-- End of Dropdown --}}
        </li>

        <li class="mx-4">
            <a href="#">Snorkel</a>
        </li>

        <li class="mx-4">
            <a href="#">Research</a>
        </li>

        <li class="dropdown-btn mx-4">
            <a href="#">About</a>
            {{-- About Dropdown --}}
            <ul class="nav-dropdown absolute list-reset text-black bg-white hidden">
                <li class="py-4 px-8">
                    <a href="#">Hello</a>
                </li>
                <li class="py-4 px-8">
                    <a href="#">World</a>
                </li>
            </ul>
            {{-- End of Dropdown --}}
        </li>

        <li class="mx-4">
            <a href="#">Gallery</a>
        </li>

        <li class="mx-4">
            <a href="#">Contacts</a>
        </li>

    </ul>
</nav>
