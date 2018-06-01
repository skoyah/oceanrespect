@extends('layout.master')

@section('content')
<div class="flex">
    {{-- LETF SIDE - Courses filter --}}
    <aside>
        <h2>Filter Courses</h2>
        <input type="text" class="search">
    </aside>




    {{-- RIGHT SIDE - Courses list --}}
    <main class="flex flex-wrap">
        <div class="course-card rounded bg-white relative m-2" data-category="kids">

            <img src="https://source.unsplash.com/random/400x400?diver" alt="">

            <div class="course-card-footer pin-b w-full absolute p-4 flex justify-between items-center" >
                <h3 class="font-normal">PADI Bubblemaker</h3>
                <p class="text-2xl">30€</p>
            </div>

        </div>

        <div class="course-card rounded bg-white relative m-2" data-category="recreational">

            <img src="https://source.unsplash.com/random/400x400?scuba" alt="">

            <div class="course-card-footer pin-b w-full absolute p-4 flex justify-between items-center">
                <h3 class="font-normal">PADI Open Water</h3>
                <p class="text-2xl">230€</p>
            </div>

        </div>

        <div class="course-card rounded bg-white relative m-2" data-category="kids">

            <img src="https://source.unsplash.com/random/400x400?water" alt="">

            <div class="course-card-footer pin-b w-full absolute p-4 flex justify-between items-center">
                <h3 class="font-normal">Seal Team</h3>
                <p class="text-2xl">70€</p>
            </div>

        </div>

        <div class="course-card rounded bg-white relative m-2" data-category="tec">

            <img src="https://source.unsplash.com/random/400x400?diving" alt="">

            <div class="course-card-footer pin-b w-full absolute p-4 flex justify-between items-center">
                <h3 class="font-normal">Nitrox</h3>
                <p class="text-2xl">180€</p>
            </div>

        </div>

    </main>
</div>
@endsection

@section('script')
<script>
    const courses = Array.from(document.querySelectorAll('.course-card'));
    const searchInput = document.querySelector('.search');

    function displayMatches() {
        console.log(this.value);
    }

    // function findMatches(wordToMatch, courses) {
    //     return courses.filter(course => {
    //         const regex = new RegExp(wordToMatch, 'gi');

    //         return course.
    //     });
    // }

        const list = courses.filter(course => {
            return course.querySelector('.course-card-footer h3');
        });

        console.log(list);

    searchInput.addEventListener('keyup', displayMatches);




</script>
@endsection
