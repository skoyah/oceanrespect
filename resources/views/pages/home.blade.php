@extends('layout.master')

@section('content')

<div>
    <h1 class="text-white font-light uppercase tracking-wide text-5xl leading-normal mt-10">
        <span class="italic">"</span>
            The sea, once it casts its spell, holds one in its net of wonder forever.
        <span class="italic">"</span>
    </h1>

    <h2 class="text-grey-light font-normal tracking-wide text-base italic antialiased">Jacques Yves Cousteau</h2>
</div>

@endsection

@section('script')
    <script>
        document.body.setAttribute('id', 'homepage');
        document.querySelector('footer').classList.remove('flex');
        document.querySelector('footer').classList.add('hidden');
    </script>
@endsection
