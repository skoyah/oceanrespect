    {{-- Profile card --}}
    <div class="staff-card flex flex-col bg-white m-2 self-start">

        {{-- Profile pic --}}
        <img src="/img/staff/{{ $imgUrl }}" alt="{{ $name }}">

        {{-- Content --}}
        <div class="p-2 flex flex-col items-center">

            <h2 class="font-semibold mb-2">
                {{ $name }}
            </h2>

            <h3 class="font-normal text-sm text-grey-darker antialiased mb-4">
                {{ $position }}
            </h3>

            {{-- social links --}}
            <div class="flex justify-center mb-2 pb-4 w-4/5 text-grey-light">
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

            <div class="flex justify-end w-4/5 mb-2 accordion cursor-pointer">
                <i class="fas fa-angle-double-down bg-blue-light hover:bg-blue py-1 px-2 rounded text-white"></i>
            </div>

        </div>

        {{-- Achievements --}}
        <div class="staff-achievements px-2 flex flex-col items-center overflow-hidden">

            @if(isset($divingCertifications))
                <div class="flex flex-col pt-2 border-t w-4/5">

                    <h4 class="mb-2 self-start text-blue-light font-semibold">
                        Diving certifications
                    </h4>

                    <ul class="list-reset">
                        {{ $divingCertifications }}
                    </ul>

                </div>
            @endif

            @if(isset($nauticalCertifications))
                <div class="flex flex-col pt-2 border-t w-4/5">

                    <h4 class="mb-2 self-start text-blue-light font-semibold">
                        Nautical certifications
                    </h4>
                    <ul class="list-reset">
                        {{ $nauticalCertifications }}
                    </ul>

                </div>
            @endif

            @if(isset($academics))
                <div class="flex flex-col pt-2 border-t w-4/5">

                    <h4 class="mb-2 self-start text-blue-light font-semibold">
                        Academic formation
                    </h4>
                    <ul class="list-reset">
                        {{ $academics }}
                    </ul>

                </div>
            @endif

            @if(isset($other))
                <div class="flex flex-col py-2 border-t w-4/5">

                    <h4 class="mb-2 self-start text-blue-light font-semibold">
                        Other
                    </h4>
                    <ul class="list-reset">
                        {{ $other }}
                    </ul>

                </div>
            @endif
        </div>

    </div> {{-- End of Profile card --}}
