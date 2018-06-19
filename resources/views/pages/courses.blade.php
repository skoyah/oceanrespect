@extends('layout.master')

@section('content')
    {{-- Courses list --}}
    <main class="flex flex-wrap justify-center my-8">


        {{-- Course Cards --}}
        @courseCard
            @slot('img')
                diver
            @endslot

            @slot('course')
                Bubblemaker
            @endslot

            @slot('price')
                40€
            @endslot

            @slot('modalId')
                01
            @endslot
        @endcourseCard

        @courseCard
            @slot('img')
                scuba
            @endslot

            @slot('course')
                Discover Scuba Diving
            @endslot

            @slot('price')
                120€
            @endslot


            @slot('modalId')
                02
            @endslot
        @endcourseCard

        @courseCard
            @slot('img')
                ocean
            @endslot

            @slot('course')
                Advanced Open Water
            @endslot

            @slot('price')
                320€
            @endslot

            @slot('modalId')
                03
            @endslot
        @endcourseCard

        @courseCard
            @slot('img')
                sea
            @endslot

            @slot('course')
                Rescue Diver
            @endslot

            @slot('price')
                400€
            @endslot

            @slot('modalId')
                04
            @endslot
        @endcourseCard

        @courseCard
            @slot('img')
                oceanic
            @endslot

            @slot('course')
                Dive Master
            @endslot

            @slot('price')
                800€
            @endslot

            @slot('modalId')
                05
            @endslot
        @endcourseCard

        @courseCard
            @slot('img')
                divers
            @endslot

            @slot('course')
                Enriched Air
            @endslot

            @slot('price')
                125€
            @endslot

            @slot('modalId')
                06
            @endslot
        @endcourseCard

        @courseCard
            @slot('img')
                underwater
            @endslot

            @slot('course')
                Emergency First Response
            @endslot

            @slot('price')
                125€
            @endslot

            @slot('modalId')
                07
            @endslot
        @endcourseCard

        @courseCard
            @slot('img')
                shore
            @endslot

            @slot('course')
                Tec Gas Blender Nitrox
            @endslot

            @slot('price')
                250€
            @endslot

            @slot('modalId')
                08
            @endslot
        @endcourseCard

        @courseCard
            @slot('img')
                coastal
            @endslot

            @slot('course')
                Tec Gas Blender Trimix
            @endslot

            @slot('price')
                325€
            @endslot

            @slot('modalId')
                09
            @endslot
        @endcourseCard



        {{-- Course Modals --}}
        @courseModal
            @slot('modalId')
                01
            @endslot

            @slot('course')
                Bubblemaker
            @endslot

            @slot('duration')
                1.5h
            @endslot

            @slot('equipment')
                Included
            @endslot

            @slot('age')
                18 +
            @endslot

            @slot('description')
                <p class="mb-4">
                    Bubblemaker is as fun as it sounds – a chance for kids to blow bubbles by scuba diving. Children who are at least 8 years old can use scuba gear to breathe underwater and swim around in shallow water. Have a party or celebrate a birthday by throwing a memorable, exciting Bubblemaker event with friends and family at OCEAN RESPECT - ecodive center! Enjoy up to two hours in the pool learning the basics of scuba diving with a dive professional!
                </p>
                <p class="mb-4">
                    Beginning with an introduction session on the poolside, you'll move on into the pool and will have heaps of fun as you get used to all the equipment and learn how to move around and breathe underwater. You'll quickly gain confidence and will be hooked for life once you try out this fast-growing and exciting sport!
                </p>
            @endslot
        @endcourseModal

        @courseModal
            @slot('modalId')
                02
            @endslot

            @slot('course')
                Discover Scuba Diving
            @endslot

            @slot('duration')
                2-5h
            @endslot

            @slot('equipment')
                Included
            @endslot

            @slot('age')
                10 +
            @endslot

            @slot('description')
                <p class="mb-4">
                    Have you always wondered what it’s like to breathe underwater? If you want to try scuba diving, but aren’t quite ready to take the plunge into a certification course, Discover Scuba Diving is for you. While not a scuba certification course, Discover Scuba Diving is a quick and easy introduction to what it takes to explore the underwater world.
                </p>
                <p class="mb-4">
                    To sign up for a PADI Discover Scuba Diving experience, no prior experience with scuba diving is necessary, but you need to be in reasonable physical health.
                </p>
                <p class="mb-4">
                    You learn the basic safety guidelines and skills needed to dive under the direct supervision of a PADI Professional. If you make an open water dive, you’ll practice a few more skills in shallow water to prepare for your adventure. Get ready to:

                    <ul>
                        <li class="mb-2">Go over the scuba equipment you use to dive and how easy it is to move around underwater with your gear.</li>
                        <li class="mb-2">Find out what it’s like to breathe underwater.</li>
                        <li class="mb-2">Learn key skills that you’ll use during every scuba dive.</li>
                        <li class="mb-2">Have fun swimming around and exploring.</li>
                        <li class="mb-2">Hear about becoming a certified diver through the PADI Open Water Diver course.</li>
                    </ul>
                </p>
            @endslot
        @endcourseModal

        @courseModal
            @slot('modalId')
                03
            @endslot

            @slot('course')
                Advanced Open Water
            @endslot

            @slot('duration')
                ?
            @endslot

            @slot('equipment')
                ?
            @endslot

            @slot('age')
                ?
            @endslot

            @slot('description')
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus at minus iusto. Numquam magni ratione accusamus officia excepturi, eius atque voluptatum optio porro ullam maxime iure dolores et ducimus aperiam.
                </p>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quos voluptatibus ullam id praesentium repellendus explicabo deserunt dolores alias ea.
                </p>
            @endslot
        @endcourseModal

        @courseModal
            @slot('modalId')
                04
            @endslot

            @slot('course')
                Rescue Diver
            @endslot

            @slot('duration')
                ?
            @endslot

            @slot('equipment')
                ?
            @endslot

            @slot('age')
                ?
            @endslot

            @slot('description')
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus at minus iusto. Numquam magni ratione accusamus officia excepturi, eius atque voluptatum optio porro ullam maxime iure dolores et ducimus aperiam.
                </p>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quos voluptatibus ullam id praesentium repellendus explicabo deserunt dolores alias ea.
                </p>
            @endslot
        @endcourseModal

        @courseModal
            @slot('modalId')
                05
            @endslot

            @slot('course')
                Dive Master
            @endslot

            @slot('duration')
                ?
            @endslot

            @slot('equipment')
                ?
            @endslot

            @slot('age')
                ?
            @endslot

            @slot('description')
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus at minus iusto. Numquam magni ratione accusamus officia excepturi, eius atque voluptatum optio porro ullam maxime iure dolores et ducimus aperiam.
                </p>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quos voluptatibus ullam id praesentium repellendus explicabo deserunt dolores alias ea.
                </p>
            @endslot
        @endcourseModal

        @courseModal
            @slot('modalId')
                06
            @endslot

            @slot('course')
                Enriched Air
            @endslot

            @slot('duration')
                ?
            @endslot

            @slot('equipment')
                ?
            @endslot

            @slot('age')
                ?
            @endslot

            @slot('description')
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus at minus iusto. Numquam magni ratione accusamus officia excepturi, eius atque voluptatum optio porro ullam maxime iure dolores et ducimus aperiam.
                </p>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quos voluptatibus ullam id praesentium repellendus explicabo deserunt dolores alias ea.
                </p>
            @endslot
        @endcourseModal

        @courseModal
            @slot('modalId')
                07
            @endslot

            @slot('course')
                Emergency First Response
            @endslot

            @slot('duration')
                ?
            @endslot

            @slot('equipment')
                ?
            @endslot

            @slot('age')
                ?
            @endslot

            @slot('description')
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus at minus iusto. Numquam magni ratione accusamus officia excepturi, eius atque voluptatum optio porro ullam maxime iure dolores et ducimus aperiam.
                </p>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quos voluptatibus ullam id praesentium repellendus explicabo deserunt dolores alias ea.
                </p>
            @endslot
        @endcourseModal

        @courseModal
            @slot('modalId')
                08
            @endslot

            @slot('course')
                Tec Gas Blender Nitrox
            @endslot

            @slot('duration')
                ?
            @endslot

            @slot('equipment')
                ?
            @endslot

            @slot('age')
                ?
            @endslot

            @slot('description')
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus at minus iusto. Numquam magni ratione accusamus officia excepturi, eius atque voluptatum optio porro ullam maxime iure dolores et ducimus aperiam.
                </p>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quos voluptatibus ullam id praesentium repellendus explicabo deserunt dolores alias ea.
                </p>
            @endslot
        @endcourseModal

        @courseModal
            @slot('modalId')
                09
            @endslot

            @slot('course')
                Tec Gas Blender Trimix
            @endslot

            @slot('duration')
                ?
            @endslot

            @slot('equipment')
                ?
            @endslot

            @slot('age')
                ?
            @endslot

            @slot('description')
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus at minus iusto. Numquam magni ratione accusamus officia excepturi, eius atque voluptatum optio porro ullam maxime iure dolores et ducimus aperiam.
                </p>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quos voluptatibus ullam id praesentium repellendus explicabo deserunt dolores alias ea.
                </p>
            @endslot
        @endcourseModal
    </main>

@endsection






@section('script')
<script>

    const cardBtns = document.querySelectorAll('.card-btn');
    const modalCloseButton = document.querySelectorAll('.close-modal');

    cardBtns.forEach(button => {

        const modalId = button.dataset.modal;

        button.addEventListener('click', (e) => {

            e.preventDefault();

            const modal = document.querySelector(`#${modalId}`);

            modal.classList.remove('hidden');
            modal.classList.add('flex');

        });
    });


    modalCloseButton.forEach(button => {
        button.addEventListener('click', (e) => {

            const modal = e.currentTarget.parentElement.parentElement.parentElement;

            modal.classList.remove('flex');
            modal.classList.add('hidden');

        });
    });


</script>
@endsection
