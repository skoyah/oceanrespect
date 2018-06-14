@extends('layout.master')

@section('content')
    {{-- Courses list --}}
    <main class="flex flex-wrap justify-center my-8">

        @courseCard
            @slot('course')
                Bubblemaker
            @endslot

            @slot('price')
                40€
            @endslot
        @endcourseCard

        @courseCard
            @slot('course')
                Discover Scuba Diving
            @endslot

            @slot('price')
                40€
            @endslot
        @endcourseCard

        @courseCard
            @slot('course')
                Discover Scuba Diving
            @endslot

            @slot('price')
                40€
            @endslot
        @endcourseCard

    </main>

@endsection






@section('script')
<script>
    const courses = Array.from(document.querySelectorAll('.course-card'));
</script>
@endsection
