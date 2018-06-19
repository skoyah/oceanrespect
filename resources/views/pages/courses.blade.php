@extends('layout.master')

@section('content')
    {{-- Courses list --}}
    <main class="flex flex-wrap justify-center my-8">

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
        @endcourseCard

        @courseModal
            @slot('course')
                Advanced Open Water
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

    </main>

@endsection






@section('script')
<script>
    const cardBtns = document.querySelectorAll('.card-btn');
    const modalCloseButton = document.querySelector('.close-modal');

    modalCloseButton.addEventListener('click', (e) => {
        const modal = e.currentTarget.parentElement.parentElement.parentElement;

        modal.classList.remove('flex');
        modal.classList.add('hidden');

    });

    cardBtns.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            const btnTarget = e.target;
            const modal = document.querySelector('#modal');

            modal.classList.remove('hidden');
            modal.classList.add('flex');

        });
    });

</script>
@endsection
