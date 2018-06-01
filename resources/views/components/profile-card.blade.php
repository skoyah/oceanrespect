    {{-- Profile card --}}
    <div class="staff-card flex flex-col bg-white m-4">

        {{-- Profile pic --}}
        <img src="/img/staff/{{ $imgUrl }}" alt="{{ $name }}">

        {{-- Content --}}
        <div class="p-8 flex flex-col items-center">

            <h2 class="font-semibold mb-2">
                {{ $name }}
            </h2>

            <h3 class="font-normal text-sm text-grey-darker antialiased mb-4">
                {{ $position }}
            </h3>

            {{-- social links --}}
            <div class="flex justify-center mb-4 pb-4 border-b w-4/5 text-grey-light">
                <a href="#">
                    <i class="fab fa-instagram mx-2 fa-2x hover:text-grey-darker"></i>
                </a>
                <a href="#">
                    <i class="fab fa-facebook-square mx-2 fa-2x hover:text-grey-darker"></i>
                </a>
                <a href="#">
                    <i class="fas fa-link mx-2 fa-2x hover:text-grey-darker"></i>
                </a>
            </div>


            <div class="flex flex-col mb-2 border-b  w-4/5">

                <h4 class="mb-2 self-start text-blue-light font-semibold">
                    Diving certifications
                </h4>

                <ul class="list-reset">
                    {{ $divingCertifications }}
                </ul>

            </div>

            <div class="flex flex-col mb-2 border-b w-4/5">

                <h4 class="mb-2 self-start text-blue-light font-semibold">
                    Nautical certifications
                </h4>
                <ul class="list-reset">
                    {{ $nauticalCertifications }}
                </ul>

            </div>

            <div class="flex flex-col mb-2 border-b w-4/5">

                <h4 class="mb-2 self-start text-blue-light font-semibold">
                    Academic formation
                </h4>
                <ul class="list-reset">
                    {{ $academics }}
                </ul>

            </div>

            <div class="flex flex-col mb-2 border-b w-4/5">

                <h4 class="mb-2 self-start text-blue-light font-semibold">
                    Other
                </h4>
                <ul class="list-reset">
                    {{ $other }}
                </ul>

            </div>

        </div>

    </div> {{-- End of Profile card --}}
