<div class="card flex flex-col bg-white antialiased justify-between m-2">

    <header class="overflow-hidden">
    <img src="https://source.unsplash.com/random/400x400?{{$img}}" alt="">
    </header>

    <h1 class="px-6 pt-4 font-normal text-lg tracking-wide text-black antialiased">
        {{$course}}
    </h1>

    <footer class="flex justify-between px-6 pt-4 pb-6">

        <a href="#" class="shadow-md text-white inline-block bg-blue py-3 px-6 text-sm font-semibold">
            More info
        </a>


        <span class="inline-block tracking-wide self-center text-3xl text-blue font-semibold">
            {{$price}}
        </span>

    </footer>
</div>
