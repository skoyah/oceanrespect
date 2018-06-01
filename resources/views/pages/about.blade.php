@extends('layout.master')

@section('content')

<section class="my-10">

    <div class="flex mb-6 border-b-2 border-grey-light">
        <h1 class="self-start font-semibold text-2xl border-b-2 border-blue-light -mb-2px">Mission</h1>
    </div>

    <p class="font-normal leading-loose antialiased text-sm text-justify">Our goal as professional divers and marine biologists is to provide safe, enjoyable exciting scuba diving, snorkelling and training that will increase your awareness of the marine environment and ocean ́s diverse beautiful and fragile ecosystems. Our philosophy is safety first and our aim is to share our love for the Algarvian natural world while at the same time minimising our negative impact on the planet. At Ocean Respect - ecodive center, we believe that we as scuba divers have a unique responsibility to be advocates of the ocean, and we strive to embody that mission in our everyday operations as a ecodive center.</p>

</section>

<section class="my-10">

    <div class="flex mb-6 border-b-2 border-grey-light">
        <h1 class="self-start font-semibold text-2xl border-b-2 border-blue-light -mb-2px">Location</h1>
    </div>

    <p class="font-normal leading-loose antialiased text-sm text-justify">Burgau located in the region of Algarve, municipality of Vila do Bispo was a fishing village, now living mainly on tourism. Its most important attraction is the small beach of Praia de Burgau surrounded by hills that protect this beach from the frequent wind characteristic of Barlavento. There is a hotel in this town and a large number of small apartments that can be rented during the summer. The village has an approximate resident population of 450 inhabitants. In 2010, Burgau was voted by readers of the Lonely Planet as the "quaintest beachside village" in Europe. The beach has been awarded Blue Flag status and is among the top 10 beaches in Portugal. Its sandy area extends along a small sheltered inlet also used as harbour. This beach, as well as Praia da Salema Beach, is ideal to contemplate how boats return from fishing. Restaurants offer delicious dishes with fresh octopus and fish. There is a 17th-century fortress located on its cliffs, as well as the ruins of an impressing 16th century tower. Around the area, people can walk in the fields belonging to the protected area and appreciate the natural landscape of Barlavento Algarvio. There is also a large presence of people during the night, especially in the summer (June to September) due to its Bars and cafes creating big movement on the most important streets. During the Winter and Spring season, it still remains a paradise but a quiet one.</p>

</section>

<section class="my-10">

    <div class="flex mb-6 border-b-2 border-grey-light">
        <h1 class="self-start font-semibold text-2xl border-b-2 border-blue-light -mb-2px">Staff</h1>
    </div>
    {{-- Profile card --}}
    <div class="staff-card flex flex-col bg-white">

        {{-- Image, name and working position--}}
        <img src="/img/staff/joao_rodrigues_opt.jpg" alt="João Rodrigues">

        <div class="p-8 flex flex-col items-center">
            <h2 class="font-semibold mb-2">João Rodrigues</h2>

            <h3 class="font-normal text-sm text-grey-darker antialiased mb-4">Co-founder | Technical director</h3>

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

            {{-- Acomplishments --}}
            <div class="flex flex-col mb-2 border-b  w-4/5">
                <h4 class="mb-2 self-start text-blue-light font-semibold">Diving certifications</h4>
                <ul class="list-reset">
                    <li class="antialiased text-xs font-semibold text-grey-darker mb-3">PADI Open Water Scuba Instructor</li>
                    <li class="antialiased text-xs font-semibold text-grey-darker mb-3">PADI Enriched Air Nitrox Specialty Instructor</li>
                    <li class="antialiased text-xs font-semibold text-grey-darker mb-3">PADI Tec Gas Blender Instructor</li>
                    <li class="antialiased text-xs font-semibold text-grey-darker mb-3">PADI EFR Instructor</li>
                    <li class="antialiased text-xs font-semibold text-grey-darker mb-3">ITD Instructor</li>
                    <li class="antialiased text-xs font-semibold text-grey-darker mb-3">RAID Rebreather diver level 4</li>
                    <li class="antialiased text-xs font-semibold text-grey-darker mb-3">GUE Technical diver level 1</li>
                    <li class="antialiased text-xs font-semibold text-grey-darker mb-3">GUE Cave diver level 1</li>
                    <li class="antialiased text-xs font-semibold text-grey-darker mb-3">CMAS Scientific diver</li>
                </ul>
            </div>

            <div class="flex flex-col mb-2 border-b w-4/5">
                <h4 class="mb-2 self-start text-blue-light font-semibold">Nautical certifications</h4>
                <ul class="list-reset">
                    <li class="antialiased text-xs font-semibold text-grey-darker mb-3">Local Skipper</li>
                </ul>
            </div>

            <div class="flex flex-col mb-2 border-b w-4/5">
                <h4 class="mb-2 self-start text-blue-light font-semibold">Academic formation</h4>
                <ul class="list-reset">
                    <li class="antialiased text-xs font-semibold text-grey-darker mb-3">Degree in Biology</li>
                    <li class="antialiased text-xs font-semibold text-grey-darker mb-3">Master in Marine Biodiversity and Conservation</li>
                </ul>
            </div>

            <div class="flex flex-col mb-2 border-b w-4/5">
                <h4 class="mb-2 self-start text-blue-light font-semibold">Other</h4>
                <ul class="list-reset">
                    <li class="antialiased text-xs font-semibold text-grey-darker mb-3">Natural History and Conservation Photojournalist</li>
                </ul>
            </div>
        </div>
    </div>
    {{-- End of Profile card --}}

</section>

@endsection


