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

    @component('components.profile-card')

    @endcomponent

</section>

@endsection


