@extends('layout.master')

@section('content')
<div class="flex">
    {{-- LETF SIDE - Courses filter --}}
    <aside>
        <h2>Filter Courses</h2>
        <div>
            <h3>By Category</h3>
            <div class="input-group">
                <input type="checkbox" name="">
                <label for="">Baptisms</label>
            </div>
            <div class="input-group">
                <input type="checkbox" name="">
                <label for="">Kids</label>
            </div>
            <div class="input-group">
                <input type="checkbox" name="">
                <label for="">Recreational</label>
            </div>
            <div class="input-group">
                <input type="checkbox" name="">
                <label for="">Tec</label>
            </div>
            <div class="input-group">
                <input type="checkbox" name="">
                <label for="">Safety</label>
            </div>
            <div class="input-group">
                <input type="checkbox" name="">
                <label for=""></label>
            </div>
        </div>
        <div>
            <h3>By Price</h3>
        </div>

    </aside>




    {{-- RIGHT SIDE - Courses list --}}
    <main class="flex flex-wrap">
        <div class="course-card rounded bg-white relative m-2">

            <img src="https://source.unsplash.com/random/400x400?diver" alt="">

            <div class="course-card-footer pin-b w-full absolute p-4 flex justify-between items-center" data-category="kids">
                <h3 class="font-normal">PADI Bubblemaker</h3>
                <p class="text-2xl">30€</p>
            </div>

        </div>

        <div class="course-card rounded bg-white relative m-2">

            <img src="https://source.unsplash.com/random/400x400?scuba" alt="">

            <div class="course-card-footer pin-b w-full absolute p-4 flex justify-between items-center">
                <h3 class="font-normal">PADI Open Water</h3>
                <p class="text-2xl">230€</p>
            </div>

        </div>

        <div class="course-card rounded bg-white relative m-2">

            <img src="https://source.unsplash.com/random/400x400?water" alt="">

            <div class="course-card-footer pin-b w-full absolute p-4 flex justify-between items-center">
                <h3 class="font-normal">Seal Team</h3>
                <p class="text-2xl">70€</p>
            </div>

        </div>

        <div class="course-card rounded bg-white relative m-2">

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

const checkboxes = document.querySelectorAll('input[type=checkbox]');

Array.from(checkboxes)[1].addEventListener('click', () => {
    console.log(Array.from(checkboxes)[0].checked);
});

</script>
@endsection
