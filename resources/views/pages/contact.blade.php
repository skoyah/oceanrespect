@extends('layout.master')

@section('content')

<div id="contact" class="flex flex-col">
    <h1 class="uppercase font-extrabold self-center mt-10">Let's talk</h1>
    <form action="" method="post" class="flex flex-col my-10">
        <label for="name" class="text-xs font-semibold tracking-wide text-grey-dark uppercase mb-2">Name</label>
        <input type="text" name="name" class="mb-6 p-3">

        <label for="email" class="text-xs font-semibold tracking-wide text-grey-dark uppercase mb-2">Email</label>
        <input type="email" name="email" class="mb-6 p-3">

        <label for="message" class="text-xs font-semibold tracking-wide text-grey-dark uppercase mb-2">Message</label>
        <textarea name="message" id="message" cols="30" rows="10" class="mb-4 p-3"></textarea>

        <button type="submite" class="uppercase bg-green-dark sm:bg-red md:bg-blue lg:bg-black hover:bg-green lg:w-2/3 text-white p-3 tracking-wide">Send message</button>
    </form>
</div>

@endsection
