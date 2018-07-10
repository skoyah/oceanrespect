@extends('layout.master')

@section('content')
    <section class="my-10">
        <div class="flex mb-6 border-b-2 border-grey-light">
            <h1 class="self-start font-semibold text-2xl border-b-2 border-blue-light -mb-2px">Dive Trips</h1>
        </div>

        <p class="font-normal leading-loose antialiased text-grey-darkest text-justify mb-4">Dive trips cater to our certified divers who want to explore the walls, reefs, and wrecks surrounding Burgau, accompanied by one of our experienced dive guides.</p>

        <p class="font-normal leading-loose antialiased text-grey-darkest text-justify mb-4">Almost every morning and afternoon our boat goes out to do this type of dive trip. Usually on a two dive basis meeting at 9:00 or 13.30 everyday and returning at approximately 13.30 and 17.30 respectively.</p>

        <p class="font-normal leading-loose antialiased text-grey-darkest text-justify mb-4">Certified SCUBA divers can explore the walls, reefs, and wrecks of Burgau region with the "Portugal ́s first ecodive center" - Ocean Respect.</p>

        <p class="font-normal leading-loose antialiased text-grey-darkest text-justify mb-4">We decide on the specific site we will be diving on the actual dive day. This keeps us flexible and gives us an idea of what the best weather conditions are and what everyone on the boat would prefer to do.</p>

        <p class="font-normal leading-loose antialiased text-grey-darkest text-justify mb-4">Your program includes the use of tanks, weights, and weight belts. Your boat comes with fresh drinking water and cookies.</p>

        <p class="font-normal leading-loose antialiased text-grey-darkest text-justify mb-4">Excludes: Dive Gear and Wetsuit (rentals available on site).</p>

        <p class="font-normal antialiased text-grey-darkest">Price: <span class="font-semibold text-black">40€</span> for 1 dive / <span class="font-semibold text-black">75€</span> for 2 dives.</p>

        <div class="grid grid-trips mt-8 overflow-hidden">
            <div class="trip-img trip-01 bg-red">
                <img src="./img/trips/under-and-over.jpg"  class="" alt="">
            </div>
            <div class="trip-img trip-02 bg-red">
                <img src="./img/trips/happy-times.jpg"  class="" alt="">
            </div>
            <div class="trip-img trip-03 bg-red">
                <img src="./img/trips/dive-buddies.jpg"  class="" alt="">
            </div>
        </div>
    </section>
@endsection
