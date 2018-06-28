@extends('layout.master')

@section('content')

<div class="flex mb-6 mt-10 border-b-2 border-grey-light">
        <h1 class="self-start font-semibold text-2xl border-b-2 border-blue-light -mb-2px">Contact Us</h1>
</div>

<div class="flex sm:items-center">
    <i class="fas fa-info-circle text-2xl text-blue-light mr-3"></i>
    <p class="text-grey-dark antialiased text-sm leading-tight sm:leading-none">Get in touch with us if you want to know more informations about courses, schedules, trips, rentals.</p>
</div>

<div id="contact" class="flex flex-col">
    <form action="" method="post" class="flex flex-col my-10">

        <div class="flex flex-col sm:flex-row">
            <div class="flex flex-col sm:flex-1 sm:mr-2">
                <label for="name" class="text-xs font-semibold tracking-wide text-grey-dark uppercase mb-2">Name</label>
                <input type="text" name="name" class="mb-6 p-3 border border-grey-light outline-none">
            </div>

            <div class="flex flex-col sm:flex-1 sm:ml-2">
                <label for="email" class="text-xs font-semibold tracking-wide text-grey-dark uppercase mb-2">Email</label>
                <input type="email" name="email" class="mb-6 p-3 border border-grey-light outline-none">
            </div>
        </div>

        <label for="message" class="text-xs font-semibold tracking-wide text-grey-dark uppercase mb-2">Message</label>
        <textarea name="message" id="message" cols="30" rows="10" class="mb-4 p-3 border border-grey-light outline-none"></textarea>

        <button type="submit" class="uppercase bg-green-light hover:bg-green sm:w-2/3 md:w-2/5 lg:w-1/4 text-white p-3 tracking-wide">Send message</button>
    </form>
</div>

@endsection
