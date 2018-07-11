@extends('layout.master')

@section('content')
    <div class="my-10">
        <div class="flex mb-6 border-b-2 border-grey-light">
            <h1 class="self-start font-semibold text-2xl border-b-2 border-blue-light -mb-2px">Snorkeling Trips</h1>
        </div>

        <p class="font-normal leading-loose antialiased text-grey-darkest text-justify mb-4">Natural wonders await you on our incredible snorkeling adventures. Join us, put on a mask and snorkel at the amazing world beneath the waves. Our trip starts with a briefing from our experienced guides who will check that you are comfortable with the equipment before guiding you into the beautiful ocean. Almost anyone can snorkel, you do not need to be a great swimmer just comfortable getting into the water and ready for a great adventure. Kids love snorkeling so make this one of the highlights of your family holiday here in Praia do Burgau.</p>

        <p class="font-normal leading-loose antialiased text-grey-darkest text-justify mb-4">Includes:  A guide, mask, fins, snorkel and wetsuit.</p>

        <p class="font-normal antialiased text-grey-darkest">Price: <span class="font-semibold">30€</span>.</p>

        <div class="flex snorkel-images my-10">
            <img src="img/snorkel/01.jpg" alt="" class="overflow-hidden">
            <img src="img/snorkel/02.jpg" alt="" class="overflow-hidden mx-2">
            <img src="img/snorkel/03.jpg" alt="" class="overflow-hidden">
        </div>

        <div class="flex justify-center">
            <a href="/contact" class="bg-green rounded py-3 px-6 tracking-wide hover:bg-green-light font-light shadow text-white uppercase text-lg">Book Now</a>
        </div>
    </div>
@endsection

