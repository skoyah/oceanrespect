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

    </main>

@endsection






@section('script')
<script>
    const courses = Array.from(document.querySelectorAll('.course-card'));
</script>
@endsection
