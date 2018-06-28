<div class="card flex flex-col bg-white antialiased justify-between m-2">

    <header class="overflow-hidden">
    <img src="https://source.unsplash.com/random/400x400?{{$img}}" alt="">
    </header>

    <h1 class="px-6 pt-4 font-normal text-lg tracking-wide text-black antialiased">
        {{$course}}
    </h1>

    <footer class="flex justify-between px-6 pt-4 pb-6">

    <a href="#" class="card-btn uppercase rounded bg-blue-lightest text-blue-light inline-block hover:bg-blue-light hover:text-white py-3 px-4 text-sm font-bold" data-modal="modal-{{$modalId}}">
            More info
        </a>


        <span class="inline-block self-center text-3xl text-grey-darker font-semibold">
            {{$price}}<sup class="text-lg">€</sup>
        </span>

    </footer>

</div>
